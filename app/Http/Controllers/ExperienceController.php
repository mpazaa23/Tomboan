<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use App\Models\GalleryPhoto;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::where('status', 'approved')->latest()->get();
        $photos = GalleryPhoto::latest()->get();
        return view('gallery', compact('experiences','photos'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:255',
            'asal' => 'required|max:255',
            'tanggal_bertamu' => 'required|date',
            'cerita' => 'required',
        ]);

        Experience::create($validated);

        return redirect()->back()->with('success', 'Cerita terkirim! Menunggu persetujuan Admin untuk ditampilkan.');
    }
    
    public function update(Request $request, $id)
{
    // 1. Cari data berdasarkan ID
    $experience = Experience::findOrFail($id);

    // 2. Validasi input baru
    $validated = $request->validate([
        'nama' => 'required|max:255',
        'asal' => 'required|max:255',
        'tanggal_bertamu' => 'required|date',
        'cerita' => 'required',
    ]);

    // 3. Update data
    $experience->update($validated);

    // 4. Kembali dengan pesan sukses
    return redirect()->back()->with('success', 'Cerita berhasil diperbarui!');
}
}
