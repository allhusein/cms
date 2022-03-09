<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('posts')->insert([
            [
            'id' => 1,
            'name'=> 'Lightweight Down Puffer',
            'price'=> '$679.89',
            'image' => 'icon/p1.png'
            ],
            [
            'id' => 2,
            'name'=> 'Lightweight Down Puffer',
            'price'=> '$679.89',
            'image' => 'icon/p3.png'
            ],
            [
            'id'=> 3,
            'name'=> 'Lightweight Down Puffer',
            'price'=> '$679.89',
            'image' => 'icon/p4.png'
            ],
            [
                'id'=> 4,
                'name'=> 'Lightweight Down Puffer',
                'price'=> '$679.89',
                'image' => 'icon/p1.png'
            ],
            [
                'id'=> 5,
                'name'=> 'Lightweight Down Puffer',
                'price'=> '$679.89',
                'image' => 'icon/p2.png'
            ]
            ]);
           
    }
}
