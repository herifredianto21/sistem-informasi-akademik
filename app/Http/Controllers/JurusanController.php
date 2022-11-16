<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Jurusan;
use App\Models\MahasiswaModel;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusans = Jurusan::withCount('mahasiswas')->orderBy('nama')->get();
        return view('jurusan.index', compact('jurusans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $id = Helper::IDGenerator(new Jurusan, 'id', 5, 'JRS');

        $request->validate([
            // 'id' => 'required',
            'nama' => 'required|max:255',
            'ketua_jurusan' => 'required',
            'daya_tampung' => 'required',
        ]);

        $kode_jurusan = Helper::IDGenerator(new Jurusan, 'kode_jurusan', 5, 'JRS');


        $jurusans = new Jurusan();

        // $jurusans->id = $request->$id;
        $jurusans->kode_jurusan = $kode_jurusan;

        $jurusans->nama = $request->input('nama');
        $jurusans->ketua_jurusan = $request->input('ketua_jurusan');
        $jurusans->daya_tampung = $request->input('daya_tampung');
        // dd($jurusans);

        $jurusans->save();

        // $jurus = Jurusan::create($validatedData);

        // Jurusan::create($request->all());

        // $mhs->save();
            // return redirect('/mahasiswa')->with('success', 'Game is successfully saved');

            // dd($jrs);

        return redirect()->route('jrs.index');


    
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
        $jurusans = Jurusan::findOrFail($id);
        return view('jurusan.edit', compact('jurusans'));
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
        $request->validate([
            'nama' => 'required',
            'ketua_jurusan' => 'required',
            'daya_tampung' => 'required'
        ]);

        $jurusans = Jurusan::find($id);

        $jurusans->nama = $request->input('nama');
        $jurusans->ketua_jurusan = $request->input('ketua_jurusan');
        $jurusans->daya_tampung = $request->input('daya_tampung');
        $jurusans->save();

        return redirect()->route('jrs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurusans = Jurusan::findOrFail($id);
        $jurusans->delete();
        return redirect()->route('jrs.index');
    }
}
