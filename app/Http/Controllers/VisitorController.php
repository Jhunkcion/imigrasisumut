<?php

namespace App\Http\Controllers;

use App\Models\Visitor;

class VisitorController extends Controller
{
    public function index()
    {
        $visitors = Visitor::orderBy('visited_at', 'desc')->get();
        return view('visitors.index', compact('visitors'));
    }
}
