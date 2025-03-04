<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_customer','gender','contact'];
    public $timestamp = true;

    public function Order()
    {
        return $this->hasMany(Order::class);
    }
}
