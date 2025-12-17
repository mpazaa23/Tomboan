<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation; 
use App\Models\Experience;
use App\Models\SiteSetting;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function showLogin() {
        return view('admin.login');
    }

    public function showRegister() {
        return view('admin.register');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        }

        return back()->withErrors(['email' => 'Email atau password salah!']);
    }

     public function processRegister(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed', n
        ]);

        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), 
            'role' => 'admin', 
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }


   public function dashboard() {
        $reservations = Reservation::latest()->get();
        $experiences = Experience::latest()->get();

        $allReservations = Reservation::all();
        $monthlyVisitors = array_fill(0, 12, 0);

        $reservationsThisYear = Reservation::whereYear('tanggal_reservasi', date('Y'))
                                            ->get();

        foreach($allReservations as $res) {
            $monthIndex = \Carbon\Carbon::parse($res->tanggal_reservasi)->month - 1; 
            $bulanData = (int) substr($res->tanggal_reservasi, 5, 2); 

            
                $monthlyVisitors[$bulanData - 1] += $res->jumlah_pengunjung;
        }

        $allExperiences = Experience::all();
        $cityStats = $allExperiences->groupBy('asal')->map(function ($row) {
            return $row->count();
        })->sortDesc()->take(5);
        
        $cityNames = $cityStats->keys();
        $cityCounts = $cityStats->values();

        return view('admin.dashboard', compact(
            'reservations', 
            'experiences', 
            'monthlyVisitors', 
            'cityNames', 
            'cityCounts'
        ));
    } 

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login');
    }

    public function settings() {
    $setting = SiteSetting::first();
    return view('admin.settings', compact('setting'));
    }

    public function updateSettings(Request $request) {
    $setting = SiteSetting::first();

    $validated = $request->validate([
        'phone1' => 'required',
        'phone2' => 'required',
        'email' => 'required|email',
        'address' => 'required',
        'opening_hours' => 'required',
        'user_id' => auth()->id(),
    ]);

    $setting->update($validated);

    return back()->with('success', 'Informasi Kontak berhasil diperbarui!');
    }

    public function approveExperience($id) {
    $exp = Experience::findOrFail($id);
    $exp->update(['status' => 'approved']);

    return back()->with('success', 'Cerita berhasil disetujui dan ditampilkan!');
   }

   public function updateReservasi(Request $request, $id)
    {
        $reservasi = \App\Models\Reservation::findOrFail($id);
        $reservasi->update([
            'nama'              => $request->nama,
            'tanggal_reservasi' => $request->tanggal_reservasi,
            'jumlah_pengunjung' => $request->jumlah_pengunjung,
            'no_tlpn'           => $request->no_tlpn, 
        ]);
        return redirect()->back()->with('success', 'Data reservasi berhasil diperbarui!');
    }

    public function deleteReservation($id) {
        Reservation::destroy($id);
        return back()->with('success', 'Data reservasi dihapus!');
    }

    public function deleteExperience($id) {
        Experience::destroy($id);
        return back()->with('success', 'Cerita dihapus!');
    }
}
