<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['id','id_product','quantity','order_date','id_customer'];
    public $timestamp = true;

    public function Product()
    {
        return $this->belongsTo(Product::class,'id_product');
    }

    public function Customer()
    {
        return $this->belongsTo(Customer::class,'id_customer');
    }
}
