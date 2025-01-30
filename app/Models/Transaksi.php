<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['id','jumlah','tanggal_transaksi','id_buku','id_pembeli'];
    public $timestamp = true;

    public function Buku()
    {
        return $this->belongsTo(Buku::class,'id_buku');
    }

    public function Pembeli()
    {
        return $this->belongsTo(Pembeli::class,'id_pembeli');
    }
}
