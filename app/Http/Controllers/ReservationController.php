<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
       
        // dd($request->all());

        // 1. Validasi data
        $validated = $request->validate([
            'nama' => 'required',
            'tanggal_reservasi' => 'required',
            'jumlah_pengunjung' => 'required',
            'no_tlpn' => 'required',
        ]);

        Reservation::create($validated);

        return redirect('/Home')->with('success', 'Kami akan menghubungi Anda segera.');
    }

    public function update(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal_reservasi' => 'required|date',
            'jumlah_pengunjung' => 'required|integer|min:1',
            'no_tlpn' => 'required|string|max:20',
        ]);

        $reservation->update($validated);

        return back()->with('success', 'Data reservasi berhasil diperbarui!');
    }
}