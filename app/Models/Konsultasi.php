<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    use HasFactory;

    protected $table = "konsultasi";

    protected $fillable = [
        'nama_pelapor','no_telepon','kebutuhan','deskripsi','nik_pasien','nama_pasien','tgl_lahir','alamat','status'
    ];
}
