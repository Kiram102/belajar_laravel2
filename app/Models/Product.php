<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_product','merk','price','stock'];
    public $timestamp = true;

    public function Order()
    {
        return $this->hasMany(Order::class);
    }
}
