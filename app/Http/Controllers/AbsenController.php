<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsenController extends Controller
{
    // Script Menampilkan Tabel Absen
    public function index()
    {
        $absen = DB::table('absen')
            ->join('pegawai', 'absen.IDPegawai', '=', 'pegawai.pegawai_id')
            ->paginate(5);
        return view('absen.index', ['absen' => $absen]);
    }

    // Script Proses Search Data Absen
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $absen = DB::table('absen')
            ->join('pegawai', 'absen.IDPegawai', '=', 'pegawai.pegawai_id')
            ->where('pegawai_nama', 'like', "%" . $cari . "%")
            ->paginate();
        return view('absen.index', ['absen' => $absen]);
    }

    // Script Menampilkan form Tambah Absen
    public function tambah()
    {
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();
        return view('absen.tambah', ['pegawai' => $pegawai]);
    }

    // Script Proses Simpan Data Absen
    public function store(Request $request)
    {
        DB::table('absen')->insert([
            'IDPegawai' => $request->IDPegawai,
            'Tanggal' => $request->tanggal,
            'Status' => $request->status
        ]);
        return redirect('/absen');
    }

    // Script Detail Data Absen
    public function view($id)
    {
        $absen = DB::table('absen')
            ->where('ID', $id)
            ->join('pegawai', 'absen.IDPegawai', '=', 'pegawai.pegawai_id')
            ->get();
        return view('absen.detail', ['absen' => $absen]);
    }

    // Script Menampilkan form Edit Absen
    public function edit($id)
    {
        $absen = DB::table('absen')->where('ID', $id)->get();
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();
        return view('absen.edit', ['absen' => $absen, 'pegawai' => $pegawai]);
    }

    // Script Proses Update Absen
    public function update(Request $request)
    {
        DB::table('absen')->where('ID', $request->id)->update([
            'IDPegawai' => $request->IDPegawai,
            'Tanggal' => $request->tanggal,
            'Status' => $request->status
        ]);
        return redirect('/absen');
    }

    public function hapus($id)
    {
        DB::table('absen')->where('ID', $id)->delete();
        return redirect('/absen');
    }
}
