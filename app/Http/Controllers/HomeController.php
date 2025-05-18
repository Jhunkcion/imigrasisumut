<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Berita;
use App\Models\Pengumuman;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\ViewErrorBag;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::all();
        $beritas = Berita::where('status', 'publish')->latest()->take(6)->get();
        $pengumumans = Pengumuman::latest()->take(3)->get();

        $servicesByCategory = [
            'WNI' => Service::where('category', 'WNI')->latest()->get(),
            'WNA' => Service::where('category', 'WNA')->latest()->get(),
        ];

        return view('user.home', compact('about', 'beritas', 'pengumumans', 'servicesByCategory'));
    }

    public function show_berita($id)
    {
        $berita = Berita::findOrFail($id);
        return view('user.news', compact('berita'));
    }

    public function show_service($id)
    {
        $service = Service::findOrFail($id);
        return view('user.service', compact('service'));
    }
    public function show_pengumuman()
    {
        $pengumumans = Pengumuman::latest()->take(3)->get();
        return view('user.home', compact('pengumumans'));
    }

}