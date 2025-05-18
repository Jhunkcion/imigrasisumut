<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{

    public function adminIndex()
    {
        $services = Service::latest()->get();
        return view('services.index', compact('services'));
    }

    public function index()
    {
        $services = Service::latest()->get();  // atau take(3) kalau mau dibatasi
        return view('services.index', compact('services'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|in:WNA,WNI',
            'content' => 'required|string',
            'image' => 'required|image|max:2048',
        ]);

        $imagePath = $request->file('image')->store('services', 'public');

        Service::create([
            'title' => $request->title,
            'category' => $request->category,
            'content' => $request->content,
            'image' => $imagePath,
        ]);

        return redirect()->route('services.index')->with('success', 'service berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
   public function all(Request $request)
{
    $category = $request->query('category'); // Ambil query category (WNI/WNA)

    $services = Service::query()
        ->when($category, function ($query, $category) {
            $query->where('category', $category);
        })
        ->latest()
        ->get();

    return view('services.all_service', compact('services', 'category'));
}






    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $data = $request->validate([
            'title' => 'required',
            'category' => 'required|in:WNI,WNA',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($service->image && Storage::disk('public')->exists($service->image))
                ;
            Storage::disk('public')->delete($service->image);
            $data['image'] = $request->file('image')->store('services', 'public');
        }

        $service->update($data);

        return redirect()->route('services.index')->with('success', 'Service berhasil diperbarui!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        Storage::disk('public')->delete($service->image);
        $service->delete();

        return redirect()->route('services.index')->with('success', 'service berhasil dihapus!');
    }
}
