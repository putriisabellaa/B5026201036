<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PraktikumController extends Controller
{
    // Script Menampilkan Tabel Praktikum Karyawan
    public function index()
    {
        $praktikum = DB::table('karyawan1')->paginate(5);
        return view('praktikum.index', ['praktikum' => $praktikum]);
    }

    // Script Proses Search Data Praktikum Karyawan
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $praktikum = DB::table('karyawan1')
            ->where('Nama', 'like', "%" . $cari . "%")
            ->orWhere('Pangkat', 'like', "%" . $cari . "%")
            ->paginate(5);
        return view('praktikum.index', ['praktikum' => $praktikum]);
    }

    // Script Menampilkan form Tambah Praktikum Karyawan
    public function tambah()
    {
        return view('praktikum.tambah');
    }

    // Script Proses Simpan Data Praktikum Karyawan
    public function store(Request $request)
    {

        DB::table('karyawan1')->insert([
            'NIP' => $request->NIP,
            'Nama' => $request->Nama,
            'Pangkat' => $request->Pangkat,
            'Gaji' => $request->Gaji
        ]);
        return redirect('/praktikum');
    }

    // Script Detail Data Praktikum Karyawan
    public function view($NIP)
    {
        $praktikum = DB::table('karyawan1')->where('NIP', $NIP)->get();
        return view('praktikum.detail', ['praktikum' => $praktikum]);
    }

    // Script Menampilkan form Edit Praktikum Karyawan
    public function edit($NIP)
    {
        $praktikum = DB::table('karyawan1')->where('NIP', $NIP)->get();
        return view('praktikum.edit', ['praktikum' => $praktikum]);
    }

    //Script Proses Update Praktikum Karyawan
    public function update(Request $request)
    {
        DB::table('karyawan1')->where('NIP', $request->NIP)->update([
            'NIP' => $request->NIP,
            'Nama' => $request->Nama,
            'Pangkat' => $request->Pangkat,
            'Gaji' => $request->Gaji
        ]);
        return redirect('/praktikum');
    }

    // Script Hapus Data Praktikum Karyawan
    public function hapus($NIP)
    {
        DB::table('karyawan1')->where('NIP', $NIP)->delete();
        return redirect('/praktikum');
    }
}
