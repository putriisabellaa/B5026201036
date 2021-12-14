<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pegawaiController extends Controller
{
    // Script Menampilkan Tabel Pegawai
    public function index()
    {
        $pegawai = DB::table('pegawai')->paginate(5);
        return view('pegawai.index', ['pegawai' => $pegawai]);
    }

    // Script Proses Search Data Pegawai
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $pegawai = DB::table('pegawai')
            ->where('pegawai_nama', 'like', "%" . $cari . "%")
            ->orWhere('pegawai_jabatan', 'like', "%" . $cari . "%")
            ->paginate(5);
        return view('pegawai.index', ['pegawai' => $pegawai]);
    }

    // Script Menampilkan form Tambah Pegawai
    public function tambah()
    {
        return view('pegawai.tambah');
    }

    // Script Proses Simpan Data Pegawai
    public function store(Request $request)
    {
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        return redirect('/pegawai');
    }

    // Script Detail Data Pegawai
    public function view($id)
    {
        $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();
        return view('pegawai.detail', ['pegawai' => $pegawai]);
    }

    // Script Menampilkan form Edit Kaos
    public function edit($id)
    {
        $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();
        return view('pegawai.edit', ['pegawai' => $pegawai]);
    }

    //Script Proses Update Pegawai
    public function update(Request $request)
    {
        DB::table('pegawai')->where('pegawai_id', $request->id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        return redirect('/pegawai');
    }

    // Script Hapus Data Pegawai
    public function hapus($id)
    {
        DB::table('pegawai')->where('pegawai_id', $id)->delete();
        return redirect('/pegawai');
    }
}
