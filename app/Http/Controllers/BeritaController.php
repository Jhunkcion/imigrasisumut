<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{

    public function adminIndex()
    {
        $beritas = Berita::latest()->get();
        return view('news.index', compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'tanggal' => 'required|date',
            'gambar' => 'required|image|max:2048',
        ]);

        $gambarPath = $request->file('gambar')->store('beritas', 'public');

        Berita::create([
            'judul' => $request->judul,
            'konten' => $request->konten,
            'tanggal' => $request->tanggal,
            'gambar' => $gambarPath,
            'status' => 'draft',
        ]);

        return redirect()->route('news.index')->with('success', 'Berita berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('news.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        $data = $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            Storage::disk('public')->delete($berita->gambar);
            $data['gambar'] = $request->file('gambar')->store('beritas', 'public');
        }

        $berita->update($data);

        return redirect()->route('news.index')->with('success', 'Berita berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        Storage::disk('public')->delete($berita->gambar);
        $berita->delete();

        return redirect()->route('news.index')->with('success', 'Berita berhasil dihapus!');
    }

    public function publish($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->update(['status' => 'publish']);
        return redirect()->route('news.index')->with('success', 'Berita berhasil dipublish.');
    }
}
