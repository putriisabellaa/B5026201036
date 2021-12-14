<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaosController extends Controller
{
    // Script Menampilkan Tabel Kaos
    public function index()
    {
        $kaos = DB::table('kaos')
            ->paginate(5);
        return view('kaos.index', ['kaos' => $kaos]);
    }

    // Script Proses Search Data Kaos
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $kaos = DB::table('kaos')
            ->where('merkkaos', 'like', "%" . $cari . "%")
            ->paginate(5);
        return view('kaos.index', ['kaos' => $kaos]);
    }

    // Script Menampilkan form Tambah Kaos
    public function tambah()
    {
        return view('kaos.tambah');
    }

    // Script Proses Simpan Data Kaos
    public function store(Request $request)
    {
        DB::table('kaos')->insert([
            'merkkaos' => $request->merkkaos,
            'stockkaos' => $request->stockkaos,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/kaos');
    }

    // Script Detail Data Kaos
    public function view($id)
    {
        $kaos = DB::table('kaos')->where('kodekaos', $id)->get();
        return view('kaos.detail', ['kaos' => $kaos]);
    }

    // Script Menampilkan form Edit Kaos
    public function edit($kodekaos)
    {
        $kaos = DB::table('kaos')->where('kodekaos', $kodekaos)->get();
        return view('kaos.edit', ['kaos' => $kaos]);
    }

    // Script Proses Update Kaos
    public function update(Request $request)
    {
        DB::table('kaos')->where('kodekaos', $request->kodekaos)->update([
            'merkkaos' => $request->merkkaos,
            'stockkaos' => $request->stockkaos,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/kaos');
    }

    // Script Hapus Data Kaos
    public function hapus($kodekaos)
    {
        DB::table('kaos')->where('kodekaos', $kodekaos)->delete();
        return redirect('/kaos');
    }
}
