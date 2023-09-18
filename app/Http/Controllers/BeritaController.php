<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $title = "Post Berita";
        return view('feature.berita-create', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'konten' => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $thumbnailPath = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        Berita::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'konten' => $request->konten,
            'thumbnail' => $thumbnailPath
        ]);

        return redirect('/dashboard/berita')->with('success', 'Berita berhasil dibuat');
    }

    public function show($id)
    {
        $berita = Berita::find($id);

        if (!$berita) {
            abort(404, 'Berita tidak ditemukan');
        }

        return view('feature.berita-view', ['berita' => $berita]);
    }
    public function dataBerita()
    {
        $title = "Data Berita Panel";
        $berita = Berita::paginate(5);
        return view('feature.berita-data', compact('title', 'berita'));
    }
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();
        return redirect()->route('berita-data')->with('success', 'Berita deleted successfully.');
    }

}