<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penggunas extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama'];
    public $timestamp = true;
}
