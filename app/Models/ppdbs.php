<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ppdbs extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama_lengkap','jenis_kelamin','agama','alamat','telepon','asal_sekolah'];
    public $timestamp = true;
}
