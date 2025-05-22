<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::orderBy('tanggal', 'desc')->get();
        return view('announcements.index', compact('announcements'));
    }

    public function all()
    {
        $announcements = Announcement::latest()->get();
    
        // Tampilkan ke view 'news.all_news'
        return view('announcements.all_announcement', compact('announcements'));
    }

    public function create()
    {
        return view('announcements.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'tanggal' => 'required|date',
        ]);

        Announcement::create([
            'title' => $request->title,
            'content' => $request->content,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('announcements.index')->with('success', 'Pengumuman berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $announcement = Announcement::findOrFail($id);
        return view('announcements.edit', compact('announcement'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'tanggal' => 'required|date',
        ]);

        $announcement = Announcement::findOrFail($id);
        $announcement->update([
            'title' => $request->title,
            'content' => $request->content,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('announcements.index')->with('success', 'Pengumuman berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $announcement = Announcement::findOrFail($id);
        $announcement->delete();

        return redirect()->route('announcements.index')->with('success', 'Pengumuman berhasil dihapus.');
    }
}
