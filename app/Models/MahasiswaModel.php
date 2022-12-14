<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    // protected $primaryKey = 'id_mahasiswa';
    protected $fillable = ['id', 'nama', 'tgl_lahir', 'umur', 'alamat', 'jk', 'no_telp', 'email', 'jurusan_id', 'nama_prodi', 'photo'];

    public function jurusans() {
        return $this->belongsTo('App\Models\Jurusan');
    }
}
