<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;
    protected $fillable = [     //Muhammad Rizki Anshari_6706223168_46-04
            'namaKoleksi',
            'jenisKoleksi',
            'jumlahKoleksi',
    ];

}
