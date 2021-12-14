<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MutasiController extends Controller
{
    // Script Menampilkan Tabel Mutasi
    public function index()
    {
        $mutasi = DB::table('mutasi')
            ->join('pegawai', 'mutasi.IDPegawai', '=', 'pegawai.pegawai_id')
            ->paginate(5);
        return view('mutasi.index', ['mutasi' => $mutasi]);
    }

    // Script Proses Search Data Mutasi
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $mutasi = DB::table('mutasi')
            ->join('pegawai', 'mutasi.IDPegawai', '=', 'pegawai.pegawai_id')
            ->where('pegawai_nama', 'like', "%" . $cari . "%")
            ->orWhere('Deparetemen', 'like', "%" . $cari . "%")
            ->paginate(5);
        return view('mutasi.index', ['mutasi' => $mutasi]);
    }

    // Script Menampilkan form Tambah Mutasi
    public function tambah()
    {
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();
        return view('mutasi.tambah', ['pegawai' => $pegawai]);
    }

    // Script Proses Simpan Data Mutasi
    public function store(Request $request)
    {
        DB::table('mutasi')->insert([
            'IDPegawai' => $request->IDPegawai,
            'Departemen' => $request->Departemen,
            'SubDepartemen' => $request->SubDepartemen,
            'MulaiBertugas' => $request->MulaiBertugas
        ]);
        return redirect('/mutasi');
    }

    // Script Detail Data Mutasi
    public function view($id)
    {
        $mutasi = DB::table('mutasi')
            ->where('pegawai_id', $id)
            ->join('pegawai', 'mutasi.IDPegawai', '=', 'pegawai.pegawai_id')
            ->get();
        return view('mutasi.detail', ['mutasi' => $mutasi]);
    }

    // Script Menampilkan form Edit Mutasi
    public function edit($id)
    {
        $mutasi = DB::table('mutasi')->where('ID', $id)->get();
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();
        return view('mutasi.edit', ['mutasi' => $mutasi], ['pegawai' => $pegawai]);
    }

    // Script Proses Update Mutasi
    public function update(Request $request)
    {
        DB::table('mutasi')->where('ID', $request->ID)->update([
            'IDPegawai' => $request->IDPegawai,
            'Departemen' => $request->Departemen,
            'SubDepartemen' => $request->SubDepartemen,
            'MulaiBertugas' => $request->MulaiBertugas
        ]);
        return redirect('/mutasi');
    }

    // Script Hapus Data Mutasi
    public function hapus($id)
    {
        DB::table('mutasi')->where('ID', $id)->delete();
        return redirect('/mutasi');
    }
}
