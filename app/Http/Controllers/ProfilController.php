<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        return view('pages.tentang-kami'); // View halaman profil kantor
    }

    public function alamatKami()
{
    return view('pages.alamat-kami');
}

    public function strukturOrganisasi()
{
    return view('pages.struktur-organisasi');
}

    public function dipa()
{
    return view('pages.dipa'); // Pastikan file ini ada
}
    public function lakip()
{
    return view('pages.lakip');
}

    public function standarPelayanan()
{
    return view('pages.standar-pelayanan');
}

    public function zonaIntegritas()
{
    return view('pages.zona-integritas');
}

}