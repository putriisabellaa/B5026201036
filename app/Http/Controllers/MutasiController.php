<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MutasiController extends Controller
{
    //
    public function index()
    {
        //menga,bil data dari tabel mutasi
        $mutasi = DB::table('mutasi')->get();

        //mengirim data mutasi ke view index
        return view('mutasi.index', ['mutasi' => $mutasi]);
    }
    public function tambah()
    {
        return view('mutasi.tambah');
    }

    // method untuk insert data ke table mutasi
    public function store(Request $request)
    {
        // insert data ke table mutasi
        DB::table('mutasi')->insert([
            'IDPegawai' => $request->IDPegawai,
            'Departemen' => $request->Departemen,
            'SubDepartemen' => $request->SubDepartemen,
            'MulaiBertugas' => $request->MulaiBertugas
        ]);
        // alihkan halaman ke halaman mutasi
        return redirect('/mutasi');
    }
    // method untuk edit data mutasi
    public function edit($id)
    {
        // mengambil data mutasi berdasarkan id yang dipilih
        $mutasi = DB::table('mutasi')->where('ID', $id)->get();

        // passing data mutasi yang didapat ke view edit.blade.php
        return view('mutasi.edit', ['mutasi' => $mutasi]);
    }
    // update data mutasi
    public function update(Request $request)
    {
        // update data mutasi
        DB::table('mutasi')->where('ID', $request->ID)->update([
            'IDPegawai' => $request->IDPegawai,
            'Departemen' => $request->Departemen,
            'SubDepartemen' => $request->SubDepartemen,
            'MulaiBertugas' => $request->MulaiBertugas
        ]);
        // alihkan halaman ke halaman mutasi
        return redirect('/mutasi');
    }
    // method untuk hapus data mutasi
    public function hapus($id)
    {
        // menghapus data mutasi berdasarkan id yang dipilih
        DB::table('mutasi')->where('ID', $id)->delete();

        // alihkan halaman ke halaman mutasi
        return redirect('/mutasi');
    }
}
