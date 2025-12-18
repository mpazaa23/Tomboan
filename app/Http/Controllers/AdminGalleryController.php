<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GalleryPhoto;
use Illuminate\Support\Facades\Storage;

class AdminGalleryController extends Controller
{
    public function index()
    {
        $photos = GalleryPhoto::latest()->get();
        return view('admin.gallery', compact('photos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
            'caption' => 'nullable|string|max:100',
            'orientation' => 'required|in:square,landscape,portrait',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/uploads'), $imageName);

        GalleryPhoto::create([
            'image_path' => 'images/uploads/' . $imageName,
            'caption' => $request->caption,
            'orientation' => $request->orientation,
        ]);

        return back()->with('success', 'Foto berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $photo = GalleryPhoto::findOrFail($id);

        
        if(file_exists(public_path($photo->image_path))){
            unlink(public_path($photo->image_path));
        }

        $photo->delete();

        return back()->with('success', 'Foto berhasil dihapus!');
    }
}
