<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_buku','harga','stok','image','id_penerbit','tanggal_terbit','id_genre'];
    public $timestamp = true;

    public function Penerbit()
    {
        return $this->belongsTo(Penerbit::class,'id_penerbit');
    }

    public function Genre()
    {
        return $this->belongsTo(Genre::class,'id_genre');
    }

    public function Transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }

    public function deleteImage(){
        if($this->cover && file_exists(public_path('images/buku'.$this->cover))){
            return unlink(public_path('images/buku'.$this->cover));
        }
    }
}
