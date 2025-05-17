<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Berita;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\ViewErrorBag;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexBerita()
    {
        $about = About::all();
        $beritas = Berita::where('status', 'publish')->latest()->take(6)->get();
        return view('user.home', compact('about', 'beritas'));
    }

    public function show_berita($id)
    {
        $berita = Berita::findOrFail($id);
        return view('user.news', compact('berita'));
    }

    public function indexService()
    {
        $latestServices = Service::latest()->take(3)->get(); // ambil 3 service terbaru
        return view('home', compact('latestServices'));
    }

}
