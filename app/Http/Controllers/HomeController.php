<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

    function sendKonsultasi(Request $req) {
        $validator = Validator::make($req->all(), [
            'nama_pelapor' => 'required',
            'no_telp' => 'required',
            'kebutuhan' => 'required',
            'deskripsi' => 'required',
            'nik_pasien' => 'required',
            'nama_pasien' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required'
        ]);
    
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput()->withFragment('appointment');
        }

        Konsultasi::create([
            'nama_pelapor' => $req->nama_pelapor,
            'no_telepon' => $req->no_telp,
            'kebutuhan' => $req->kebutuhan,
            'deskripsi' => $req->deskripsi,
            'nik_pasien' => $req->nik_pasien,
            'nama_pasien' => $req->nama_pasien,
            'tgl_lahir' => $req->tgl_lahir,
            'alamat' => $req->alamat,
        ]);
    }
}
