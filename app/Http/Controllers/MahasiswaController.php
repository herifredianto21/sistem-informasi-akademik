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

    public function edit($id)
    {
        $mhs = MahasiswaModel::findOrFail($id);
        $jurusans = DB::table('jurusans')->get();

        return view('mahasiswa.edit', compact('mhs','jurusans'));

    }

    public function show($id)
    {
        $mhs = MahasiswaModel::findOrFail($id);
        return view('mahasiswa.show', compact('mhs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'tgl_lahir' => 'required',
            'umur' => 'required',
            'jk' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'nama_prodi' => 'required',
            'photo' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        $mhs = MahasiswaModel::find($id);

        if($request->hasFile('photo')){
            $request->validate([
                'photo' => 'required|image|mimes:png,jpg,jpeg',
            ]);

            // $path = $request->file('photo')->move('storage/uploads/mahasiswa/');
            // $mhs->photo = $path;
            $file = $request->file('photo');
            $extenstion = $file->getClientOriginalName();
            $filename = time().'.'.$extenstion;
            $file->move('storage/uploads/mahasiswa/', $filename);
            $mhs->photo = $filename;

            // $mhs->save();
            // return redirect('/mahasiswa')->with('success', 'Game is successfully saved');

        }

        $mhs->nama = $request->input('nama');
        $mhs->tgl_lahir = $request->input('tgl_lahir');
        $mhs->umur = $request->input('umur');
        $mhs->jk = $request->input('jk');
        $mhs->no_telp = $request->input('no_telp');
        $mhs->alamat = $request->input('alamat');
        $mhs->email = $request->input('email');
        $mhs->nama_prodi = $request->input('nama_prodi');

        $mhs->save();


        return redirect()->route('mhs.index');

    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'tgl_lahir' => 'required',
            'umur' => 'required',
            'jk' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'nama_prodi' => 'required',
            'photo' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        $mhs = new MahasiswaModel();
        $mhs->nama = $request->input('nama');
        $mhs->tgl_lahir = $request->input('tgl_lahir');
        $mhs->umur = $request->input('umur');
        $mhs->jk = $request->input('jk');
        $mhs->no_telp = $request->input('no_telp');
        $mhs->alamat = $request->input('alamat');
        $mhs->email = $request->input('email');
        $mhs->jurusan_id = $request->input('jurusan_id');
        $mhs->nama_prodi = $request->input('nama_prodi');
        
        if($request->hasFile('photo'))
        {
            $file = $request->file('photo');
            $extenstion = $file->getClientOriginalName();
            $filename = time().'.'.$extenstion;
            $file->move('storage/uploads/mahasiswa/', $filename);
            $mhs->photo = $filename;

            $mhs->save();
            return redirect('/mahasiswa')->with('success', 'Game is successfully saved');
        }


        // $path = $request->file('photo')->store('public/files');

        // $mhs->nama = $nama;
        // $mhs->photo = $photo;
        // $mhs->path = $path;

        
        // return redirect('/mahasiswa')->with('success', 'Game is successfully saved');
    }

    public function create()
    {
        $jurusans = DB::table('jurusans')->get();
        return view('mahasiswa.create', compact('jurusans'));
    }

    public function destroy($id)
    {
        // $mhs->delete();

        // return redirect()->route('mhs.index')->with('success', 'Mahasiswa Berhasil di Hapus');

        $mhs = MahasiswaModel::findOrFail($id);
        $mhs->delete();
        return redirect()->route('mhs.index');
    }
    
}
