<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $abouts = About::all();
        return view('abouts.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('abouts.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'caption' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $about = About::findOrFail($id);

        if ($request->hasFile('image')) {
            // upload file baru
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage'), $filename);
            $about->image = $filename;
        }

        $about->caption = $request->caption;
        $about->save();

        return redirect()->route('abouts.index')->with('success', 'About berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(About $about)
    {
        //
    }
}
