<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $table = 'jurusans';
    protected $fillable =['id', 'kode_jurusan', 'nama', 'ketua_jurusan', 'daya_penampung'];

    public function dosens(){
        return $this->hasMany('App\Models\Dosen');
    }

    public function mahasiswas(){
        return $this->hasMany('App\Models\MahasiswaModel');
    }
}
