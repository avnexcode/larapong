<?php

namespace App\Http\Controllers;

use App\Models\UTS;
use Illuminate\Http\Request;

class UTSController extends Controller
{
    public function index() {
        return view('ujian.index', [
            "title" => "Home"
        ]);
    }

    public function create() {
        return view('ujian.create', [
            "title" => "Create New Data",
            "mahasiswa" => UTS::all()
        ]);
    }

    public function store(Request $req) {
        $mahasiswa = [
            "nama_lengkap" => $req->nama_lengkap,
            "nim" => $req->nim,
            "jurusan" => $req->jurusan,
            "semester" => $req->semester,
        ];
        UTS::create($mahasiswa);
        return redirect('/uts/create');
        // ->session('kunci', 'Data Mahasiswa Berhasil Ditambahkan.')
    }
}
