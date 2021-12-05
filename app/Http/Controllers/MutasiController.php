<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MutasiController extends Controller
{
    //
    public function index()
    {
        $mutasi = DB::table('mutasi')
            ->join('pegawai', 'mutasi.IDPegawai', '=', 'pegawai.pegawai_id')
            ->get();
        return view('mutasi.index', ['mutasi' => $mutasi]);
    }
    public function tambah()
    {
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();
        return view('mutasi.tambah', ['pegawai' => $pegawai]);
    }


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

    public function edit($id)
    {

        $mutasi = DB::table('mutasi')->where('ID', $id)->get();
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();
        return view('mutasi.edit', ['mutasi' => $mutasi], ['pegawai' => $pegawai]);
    }

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

    public function hapus($id)
    {
        DB::table('mutasi')->where('ID', $id)->delete();
        return redirect('/mutasi');
    }
}
