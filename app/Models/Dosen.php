<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosens';
    protected $fillable = ['id', 'nid', 'nama', 'jurusan_id'];

    public function jurusans() {
        return $this->belongsTo('App\Models\Jurusan');
    }
}
