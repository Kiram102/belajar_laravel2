<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class postTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            ['title'=>'Tips Pintar','content'=>'lorem ipsum'],
            ['title'=>'Tips Jadi Koruptor','content'=>'lorem ipsum'],
            ['title'=>'Tips Ganteng','content'=>'lorem ipsum']
        ];
        DB::table('posts')->insert($post);
    }
}
