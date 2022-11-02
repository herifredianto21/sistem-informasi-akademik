<?php

namespace App\Http\Controllers;

use App\Models\Statusmhsw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatusmhswController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statusmhsw = DB::table('statusmahasiswas')->get();
        return view('statusmahasiswa.index', compact('statusmhsw'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('statusmahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'statusMhsw_id' => 'required',
            'nama' => 'required',
            'nilai' => 'required',
            'keluar' => 'required',
            'aktif' => 'required',
        ]);

        $statusmhsw = new Statusmhsw();
        $statusmhsw->statusMhsw_id = $request->input('statusMhsw_id');
        $statusmhsw->nama = $request->input('nama');
        $statusmhsw->nilai = $request->input('nilai');
        $statusmhsw->keluar = $request->input('keluar');
        $statusmhsw->aktif = $request->input('aktif');
        $statusmhsw->save();

        return redirect()->route('statusmhsw.index');

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
        $statusmhsw = Statusmhsw::findOrFail($id);
        return view('statusmahasiswa.edit', compact('statusmhsw'));
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
            'statusMhsw_id' => 'required',
            'nama' => 'required',
            'nilai' => 'required',
            'keluar' => 'required',
            'aktif' => 'required'
        ]);

        $statusmhsw = Statusmhsw::find($id);
        $statusmhsw->statusMhsw_id = $request->input('statusMhsw_id');
        $statusmhsw->nama = $request->input('nama');
        $statusmhsw->nilai = $request->input('nilai');
        $statusmhsw->keluar = $request->input('keluar');
        $statusmhsw->aktif = $request->input('aktif');

        $statusmhsw->save();

        return redirect()->route('statusmhsw.index');
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
