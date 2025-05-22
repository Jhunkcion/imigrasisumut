<?php
namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Service;
use App\Models\Berita;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function home()
    {
        $data = [
            'services'=> Service::all(),
            'beritas' => Berita::all(),
            'about'   => About::all(),
        ];
        return view('user/home', $data);
    }

}
