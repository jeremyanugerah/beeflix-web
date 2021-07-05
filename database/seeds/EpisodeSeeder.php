<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('episodes')->insert([
            ['movie_id' => 1, 'episode' => 1, 'title' => 'Episode 1'],
            ['movie_id' => 1, 'episode' => 2, 'title' => 'Episode 2'],
            ['movie_id' => 1, 'episode' => 3, 'title' => 'Episode 3'],
            ['movie_id' => 1, 'episode' => 4, 'title' => 'Episode 4'],
            ['movie_id' => 1, 'episode' => 5, 'title' => 'Episode 5'],
            ['movie_id' => 1, 'episode' => 6, 'title' => 'Episode 6'],
            ['movie_id' => 1, 'episode' => 7, 'title' => 'Episode 7'],
            ['movie_id' => 1, 'episode' => 8, 'title' => 'Episode 8'],
            ['movie_id' => 1, 'episode' => 9, 'title' => 'Episode 9'],
            ['movie_id' => 1, 'episode' => 10, 'title' => 'Episode 10'],
            ['movie_id' => 1, 'episode' => 11, 'title' => 'Episode 11'],
            ['movie_id' => 1, 'episode' => 12, 'title' => 'Episode 12'],
            ['movie_id' => 1, 'episode' => 13, 'title' => 'Episode 13'],
            ['movie_id' => 1, 'episode' => 14, 'title' => 'Episode 14'],
            ['movie_id' => 1, 'episode' => 15, 'title' => 'Episode 15'],
            ['movie_id' => 1, 'episode' => 16, 'title' => 'Episode 16'],

            ['movie_id' => 2, 'episode' => 1, 'title' => 'Episode 1'],
            ['movie_id' => 2, 'episode' => 2, 'title' => 'Episode 2'],
            ['movie_id' => 2, 'episode' => 3, 'title' => 'Episode 3'],
            ['movie_id' => 2, 'episode' => 4, 'title' => 'Episode 4'],
            ['movie_id' => 2, 'episode' => 5, 'title' => 'Episode 5'],
            ['movie_id' => 2, 'episode' => 6, 'title' => 'Episode 6'],
            ['movie_id' => 2, 'episode' => 7, 'title' => 'Episode 7'],
            ['movie_id' => 2, 'episode' => 8, 'title' => 'Episode 8'],
            ['movie_id' => 2, 'episode' => 9, 'title' => 'Episode 9'],
            ['movie_id' => 2, 'episode' => 10, 'title' => 'Episode 10'],
            ['movie_id' => 2, 'episode' => 11, 'title' => 'Episode 11'],
            ['movie_id' => 2, 'episode' => 12, 'title' => 'Episode 12'],
            ['movie_id' => 2, 'episode' => 13, 'title' => 'Episode 13'],
            ['movie_id' => 2, 'episode' => 14, 'title' => 'Episode 14'],

            ['movie_id' => 3, 'episode' => 1, 'title' => 'Pilot'],
            ['movie_id' => 3, 'episode' => 2, 'title' => 'Ice Pick'],
            ['movie_id' => 3, 'episode' => 3, 'title' => 'Angel of Mercy'],
            ['movie_id' => 3, 'episode' => 4, 'title' => 'Angel of Mercy: Part Two'],
            ['movie_id' => 3, 'episode' => 5, 'title' => 'The Dance'],
            ['movie_id' => 3, 'episode' => 6, 'title' => 'Got No Strings'],
            ['movie_id' => 3, 'episode' => 7, 'title' => 'The Bucket List'],
            ['movie_id' => 3, 'episode' => 8, 'title' => 'Mildred and Edmund'],

            ['movie_id' => 4, 'episode' => 1, 'title' => 'Pilot'],
            ['movie_id' => 4, 'episode' => 2, 'title' => 'Start-up'],
            ['movie_id' => 4, 'episode' => 3, 'title' => 'Angel'],
            ['movie_id' => 4, 'episode' => 4, 'title' => 'Family'],
            ['movie_id' => 4, 'episode' => 5, 'title' => 'Friends'],
            ['movie_id' => 4, 'episode' => 6, 'title' => 'Sandbox'],
            ['movie_id' => 4, 'episode' => 7, 'title' => 'I Love You'],
            ['movie_id' => 4, 'episode' => 8, 'title' => 'Release'],

            ['movie_id' => 5, 'episode' => 1, 'title' => 'Friendship'],
            ['movie_id' => 5, 'episode' => 2, 'title' => 'Magic'],
            ['movie_id' => 5, 'episode' => 3, 'title' => 'Ice Cream'],
            ['movie_id' => 5, 'episode' => 4, 'title' => 'Fashion'],
            ['movie_id' => 5, 'episode' => 5, 'title' => 'Sundaes'],
            ['movie_id' => 5, 'episode' => 6, 'title' => 'Sunshine'],
            ['movie_id' => 5, 'episode' => 7, 'title' => 'Moonlight'],
            ['movie_id' => 5, 'episode' => 8, 'title' => 'Princess Duties'],
            ['movie_id' => 5, 'episode' => 9, 'title' => 'Royal Family'],
            ['movie_id' => 5, 'episode' => 10, 'title' => 'Birthday Surprise'],

            ['movie_id' => 6, 'episode' => 1, 'title' => 'Mickey'],
            ['movie_id' => 6, 'episode' => 2, 'title' => 'Minnie'],
            ['movie_id' => 6, 'episode' => 3, 'title' => 'Donald Duck'],
            ['movie_id' => 6, 'episode' => 4, 'title' => 'Daisy'],
            ['movie_id' => 6, 'episode' => 5, 'title' => 'Goofy'],
            ['movie_id' => 6, 'episode' => 6, 'title' => 'Clarabel'],
            ['movie_id' => 6, 'episode' => 7, 'title' => 'Pluto'],
            ['movie_id' => 6, 'episode' => 8, 'title' => 'Mickey & Friends'],

            ['movie_id' => 7, 'episode' => 1, 'title' => 'Boss'],
            ['movie_id' => 7, 'episode' => 2, 'title' => 'Baby'],
            ['movie_id' => 7, 'episode' => 3, 'title' => 'Back in Business'],
            ['movie_id' => 7, 'episode' => 4, 'title' => 'Pacifier'],
            ['movie_id' => 7, 'episode' => 5, 'title' => 'Grandparents'],
            ['movie_id' => 7, 'episode' => 6, 'title' => 'Friends and Foes'],
            ['movie_id' => 7, 'episode' => 7, 'title' => 'Milkshake'],
            ['movie_id' => 7, 'episode' => 8, 'title' => 'Cat Trouble'],
            ['movie_id' => 7, 'episode' => 9, 'title' => 'Suits'],
            ['movie_id' => 7, 'episode' => 10, 'title' => 'Little People'],

            ['movie_id' => 8, 'episode' => 1, 'title' => 'Meet the Babies'],
            ['movie_id' => 8, 'episode' => 2, 'title' => 'Sing A Long'],
            ['movie_id' => 8, 'episode' => 3, 'title' => 'Playtime'],
            ['movie_id' => 8, 'episode' => 4, 'title' => 'Outer Space'],
            ['movie_id' => 8, 'episode' => 5, 'title' => 'Lullaby'],
            ['movie_id' => 8, 'episode' => 6, 'title' => 'Colorful Day'],
            ['movie_id' => 8, 'episode' => 7, 'title' => 'Rainy Weather'],

            ['movie_id' => 9, 'episode' => 1, 'title' => 'Episode 1'],
            ['movie_id' => 9, 'episode' => 2, 'title' => 'Episode 2'],
            ['movie_id' => 9, 'episode' => 3, 'title' => 'Episode 3'],
            ['movie_id' => 9, 'episode' => 4, 'title' => 'Episode 4'],
            ['movie_id' => 9, 'episode' => 5, 'title' => 'Episode 5'],
            ['movie_id' => 9, 'episode' => 6, 'title' => 'Episode 6'],
            ['movie_id' => 9, 'episode' => 7, 'title' => 'Episode 7'],
            ['movie_id' => 9, 'episode' => 8, 'title' => 'Episode 8'],
            ['movie_id' => 9, 'episode' => 9, 'title' => 'Episode 9'],
            ['movie_id' => 9, 'episode' => 10, 'title' => 'Episode 10'],
            ['movie_id' => 9, 'episode' => 11, 'title' => 'Episode 11'],
            ['movie_id' => 9, 'episode' => 12, 'title' => 'Episode 12'],
            ['movie_id' => 9, 'episode' => 13, 'title' => 'Episode 13'],

            ['movie_id' => 10, 'episode' => 1, 'title' => 'Episode 1'],
            ['movie_id' => 10, 'episode' => 2, 'title' => 'Episode 2'],
            ['movie_id' => 10, 'episode' => 3, 'title' => 'Episode 3'],
            ['movie_id' => 10, 'episode' => 4, 'title' => 'Episode 4'],
            ['movie_id' => 10, 'episode' => 5, 'title' => 'Episode 5'],
            ['movie_id' => 10, 'episode' => 6, 'title' => 'Episode 6'],
            ['movie_id' => 10, 'episode' => 7, 'title' => 'Episode 7'],
            ['movie_id' => 10, 'episode' => 8, 'title' => 'Episode 8'],
            ['movie_id' => 10, 'episode' => 9, 'title' => 'Episode 9'],
            ['movie_id' => 10, 'episode' => 10, 'title' => 'Episode 10'],

            ['movie_id' => 11, 'episode' => 1, 'title' => 'Episode 1'],
            ['movie_id' => 11, 'episode' => 2, 'title' => 'Episode 2'],
            ['movie_id' => 11, 'episode' => 3, 'title' => 'Episode 3'],
            ['movie_id' => 11, 'episode' => 4, 'title' => 'Episode 4'],
            ['movie_id' => 11, 'episode' => 5, 'title' => 'Episode 5'],
            ['movie_id' => 11, 'episode' => 6, 'title' => 'Episode 6'],
            ['movie_id' => 11, 'episode' => 7, 'title' => 'Episode 7'],
            ['movie_id' => 11, 'episode' => 8, 'title' => 'Episode 8'],
            ['movie_id' => 11, 'episode' => 9, 'title' => 'Episode 9'],
            ['movie_id' => 11, 'episode' => 10, 'title' => 'Episode 10'],
            ['movie_id' => 11, 'episode' => 11, 'title' => 'Episode 11'],
            ['movie_id' => 11, 'episode' => 12, 'title' => 'Episode 12'],

            ['movie_id' => 12, 'episode' => 1, 'title' => 'Episode 1'],
            ['movie_id' => 12, 'episode' => 2, 'title' => 'Episode 2'],
            ['movie_id' => 12, 'episode' => 3, 'title' => 'Episode 3'],
            ['movie_id' => 12, 'episode' => 4, 'title' => 'Episode 4'],
            ['movie_id' => 12, 'episode' => 5, 'title' => 'Episode 5'],
            ['movie_id' => 12, 'episode' => 6, 'title' => 'Episode 6'],
            ['movie_id' => 12, 'episode' => 7, 'title' => 'Episode 7'],
            ['movie_id' => 12, 'episode' => 8, 'title' => 'Episode 8'],
            ['movie_id' => 12, 'episode' => 9, 'title' => 'Episode 9'],
            ['movie_id' => 12, 'episode' => 10, 'title' => 'Episode 10'],
            ['movie_id' => 12, 'episode' => 11, 'title' => 'Episode 11'],
            ['movie_id' => 12, 'episode' => 12, 'title' => 'Episode 12'],
            ['movie_id' => 12, 'episode' => 13, 'title' => 'Episode 13'],
            ['movie_id' => 12, 'episode' => 14, 'title' => 'Episode 14'],
            ['movie_id' => 12, 'episode' => 15, 'title' => 'Episode 15'],
        ]);
    }
}