<?php
namespace App\Http\Controllers;

use App\About;
use App\Article;
use App\Destination;
use App\Notice;
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
            'beritas' => Berita::all(),
            'notices' => Notice::all(),
            'about'   => About::all(),
        ];
        return view('user/home', $data);
    }

    public function blog(Request $request)
    {

        $keyword = $request->get('s') ? $request->get('s') : '';
        $berita  = $request->get('c') ? $request->get('c') : '';

        $articles = Article::with('beritas')
            ->whereHas('beritas', function ($q) use ($berita) {
                $q->where('name', 'LIKE', "%$berita%");
            })
            ->where('status', 'PUBLISH')
            ->where('title', 'LIKE', "%$keyword%")
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        $recents = Article::select('title', 'slug')->where('status', 'PUBLISH')->orderBy('created_at', 'desc')->limit(5)->get();

        $data = [
            'articles' => $articles,
            'recents'  => $recents,
        ];

        return view('user/blog', $data);
    }

    public function show_article($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $recents = Article::select('title', 'slug')->where('status', 'PUBLISH')->orderBy('created_at', 'desc')->limit(5)->get();

        $data = [
            'article' => $article,
            'recents' => $recents,
        ];

        return view('user/', $data); // Ubah ke view detail
    }

    public function destination(Request $request)
    {
        $keyword = $request->get('s') ? $request->get('s') : '';

        $destinations       = Destination::where('title', 'LIKE', "%$keyword%")->orderBy('created_at', 'desc')->paginate(10);
        $other_destinations = Destination::select('title', 'slug')->where('status', 'PUBLISH')->orderBy('created_at', 'desc')->limit(5)->get();

        $data = [
            'destinations' => $destinations,
            'other'        => $other_destinations,
        ];

        return view('user/destination', $data);
    }

    public function show_destination($slug)
    {
        $destinations       = Destination::where('slug', $slug)->firstOrFail();
        $other_destinations = Destination::select('title', 'slug')->where('status', 'PUBLISH')->orderBy('created_at', 'desc')->limit(5)->get();

        $data = [
            'destinations' => $destinations,
            'other'        => $other_destinations,
        ];

        return view('user/destination', $data);
    }

    public function contact()
    {
        return view('user/contact');
    }

}
