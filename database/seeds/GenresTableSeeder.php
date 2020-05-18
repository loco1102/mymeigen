<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            [
              'genre_name' => '友情',
              'genre_photo' => '../images/yuu0100-073.jpg',
              'comment' => '友情に関連する名言集',
            ],
            
            [
              'genre_name' => '恋愛',
              'genre_photo' => '../images/rennai.jpg',
              'comment' => '恋愛に関連する名言集',
            ],
            
            [
              'genre_name' => '人生',
              'genre_photo' => '../images/zinnsei.jpg',
              'comment' => '人生に関連する名言集',
            ],
        ]);
    }
}
