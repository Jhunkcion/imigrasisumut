<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexBerita()
    {
        $beritas = Berita::where('status', 'publish')->latest()->take(6)->get();
        return view('user.home', compact('beritas'));
    }

    public function show_berita($id)
    {
        $berita = Berita::findOrFail($id);
        return view('user.news', compact('berita'));
    }
}
