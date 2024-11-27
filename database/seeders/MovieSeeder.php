<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $movies = [
            [
                'genre_id'=>'1',
                'title'=>'Titanic',
                'photo'=>'images/Titanic.jpg',
                'publish_date'=>'1997-07-15',
                'description'=>'Desc Titanic'
            ],
            [
                'genre_id'=>'2',
                'title'=>'Judgement of Paris',
                'photo'=>'images/JudgementOfParis.jpg',
                'publish_date'=>'2000-09-07',
                'description'=>'Desc Judgement of Paris'
            ],
            [
                'genre_id'=>'1',
                'title'=>'Crazy Rich Asians',
                'photo'=>'images/CrazyRichAsian.jpeg',
                'publish_date'=>'2018-04-19',
                'description'=>'Desc Crazy Rich Asians'
            ],
            [
                'genre_id'=>'3',
                'title'=>'Monsters University',
                'photo'=>'images/MonstersUniversity.jpeg',
                'publish_date'=>'2020-10-19',
                'description'=>'Desc Monsters University'
            ],
            [
                'genre_id'=>'2',
                'title'=>'The Uncharted',
                'photo'=>'images/TheUncharted.jpg',
                'publish_date'=>'2017-01-05',
                'description'=>'Desc The Uncharted'
            ],
            [
                'genre_id'=>'3',
                'title'=>'Up',
                'photo'=>'images/Up.jpeg',
                'publish_date'=>'2019-12-11',
                'description'=>'Desc Up'
            ],
            [
                'genre_id'=>'1',
                'title'=>'Love Happens',
                'photo'=>'images/LoveHappens.jpeg',
                'publish_date'=>'2016-03-06',
                'description'=>'Desc Love Happens'
            ],
            [
                'genre_id'=>'3',
                'title'=>'Powerpuff Girls',
                'photo'=>'images/PowerPuffGirls.jpg',
                'publish_date'=>'2021-11-03',
                'description'=>'Desc Powerpuff Girls'
            ]
        ];
        DB::table('movies')->insert($movies);
    }
}
