<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MahasiswaModel;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index() {

        // $mhs = DB::table('mahasiswa')->get();
        // dd($mhs);

        // $first = DB::table('mahasiswa')->whereNull('nama');
        // $mhs = DB::table('mahasiswa')->where('umur', '<', 35)->get(); //menampilkan mahasiswa yang dibawah umur 35 tahun
        $mhs = DB::table('mahasiswa')->get();

        // dd($mhs);

        return view('mahasiswa.index', compact('mhs'));
    }

    public function destroy(MahasiswaModel $mhs)
    {
        $mhs->delete();

        return redirect()->route('mhs.index')->with('success', 'Mahasiswa Berhasil di Hapus');
    }
    
}
