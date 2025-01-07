<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barangsTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            ['nama_barang'=>'Pisau','merk'=>'Lod','harga'=>'200000'],
            ['nama_barang'=>'Garpu','merk'=>'Ld','harga'=>'300000'],
            ['nama_barang'=>'Panci','merk'=>'po','harga'=>'600000'],
            ['nama_barang'=>'Wajan','merk'=>'pas','harga'=>'800000'],
            ['nama_barang'=>'Sendok','merk'=>'Lpp','harga'=>'900000']
        ];
        DB::table('barangs')->insert($barang);
    }
}
