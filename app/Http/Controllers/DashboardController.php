<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\MahasiswaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count_mahasiswa = DB::table('mahasiswa')->count();
        $count_jenis_male = MahasiswaModel::where('jk', 'male')->count();
        $count_jenis_female = MahasiswaModel::where('jk', 'female')->count();

        $count_jurusan = DB::table('jurusans')->count();

        $count_mahasiswa_if = MahasiswaModel::where('jurusan_id', '1')->count();

        $count_mahasiswa_si = MahasiswaModel::where('jurusan_id', '2')->count();

        $count_mahasiswa_teksip = MahasiswaModel::where('jurusan_id', '3')->count();

        $count_mahasiswa_tekmes = MahasiswaModel::where('jurusan_id', '4')->count();

        $count_mahasiswa_menekon = MahasiswaModel::where('jurusan_id', '4')->count();





        // dd($count_mahasiswa_if);
        
        return view('dashboard', compact('count_mahasiswa', 'count_jenis_male', 'count_jenis_female', 'count_jurusan', 'count_mahasiswa_if', 'count_mahasiswa_si', 'count_mahasiswa_teksip', 'count_mahasiswa_tekmes', 'count_mahasiswa_menekon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
