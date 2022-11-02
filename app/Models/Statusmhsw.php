<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statusmhsw extends Model
{
    use HasFactory;
    protected $table = 'statusmahasiswas';
    protected $fillable =['id', 'statusMhsw_id', 'nama', 'nilai', 'keluar', 'aktif'];

}
