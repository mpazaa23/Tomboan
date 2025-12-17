<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
         'tanggal_reservasi',
          'jumlah_pengunjung', 
          'no_tlpn',
           'status'
        ];
}
