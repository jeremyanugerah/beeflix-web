<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            ['genre_id' => 1, 'title' => 'Hotel Del Luna', 'photo' => 'assets/Drama001.jpg', 'description' => 'Nestled in the heart of Jung-gu, Seoul is Hotel Del Luna, a mystical hotel that caters to spirits and prepares them for their journey to the afterlife. Things shake-up when its owner, Jang Man Wol (IU), recruits elite hotelier Goo Chan Sung (Yeo Jin Goo) to be her new general manager.', 'rating' => 4.8],
            ['genre_id' => 1, 'title' => 'Descendants of the Sun', 'photo' => 'assets/Drama002.jpg', 'description' => 'A romantic story of a special forces captain (Song Joong Ki) and a doctor (Song Hye Kyo) who fall in love while providing aid in a country dealing with a natural disaster and civil strife', 'rating' => 5.0],
            ['genre_id' => 1, 'title' => 'Ratched', 'photo' => 'assets/Drama003.jpg', 'description' => 'a suspenseful drama series that tells the origin story of asylum nurse Mildred Ratched. In 1947, Mildred arrives in Northern California to seek employment at a leading psychiatric hospital where new and unsettling experiments have begun on the human mind.', 'rating' => 4.4],
            ['genre_id' => 1, 'title' => 'Start-up', 'photo' => 'assets/Drama004.jpg', 'description' => 'Nam Do-San is the founder of Samsan Tech. He is excellent with mathematics. He started Samsan Tech two years ago, but the company is not doing well. Somehow, Nam Do-San becomes Seo Dal-Mi’s first love. They cheer each others start and growth.', 'rating' => 4.6],
            ['genre_id' => 2, 'title' => 'My Little Pony', 'photo' => 'assets/Kids001.png', 'description' => 'The show follows a studious anthropomorphic unicorn (later an alicorn) pony named Twilight Sparkle as her mentor, Princess Celestia, guides her to learn about friendship in the town of Ponyville.', 'rating' => 4.5],
            ['genre_id' => 2, 'title' => 'Mickey Mouse', 'photo' => 'assets/Kids002.jpg', 'description' => 'Mickey Mouse takes on new adventures finding himself in silly situations in different settings.', 'rating' => 5.0],
            ['genre_id' => 2, 'title' => 'Boss Baby', 'photo' => 'assets/Kids003.jpg', 'description' => 'A suit-wearing, briefcase-carrying baby pairs up with his 7-year old brother to stop the dastardly plot of the CEO of Puppy Co.', 'rating' => 4.5],
            ['genre_id' => 2, 'title' => 'Muppet Babies', 'photo' => 'assets/Kids004.jpg', 'description' => 'The show details Kermit the Frog, Miss Piggy, Summer Penguin, Fozzie Bear, Animal, and Gonzo and a cast of characters using their imaginations.', 'rating' => 4.7],
            ['genre_id' => 3, 'title' => 'The Umbrella Academy', 'photo' => 'assets/TV001.jpg', 'description' => 'a dysfunctional family of adopted sibling superheroes who reunite to solve the mystery of the death of their father and the threat of an impending apocalypse.', 'rating' => 4.9],
            ['genre_id' => 3, 'title' => 'Stranger Things', 'photo' => 'assets/TV002.jpg', 'description' => 'A young boy, Will Byers, goes missing near a top-secret government laboratory. As friends, family and local police search for answers, they are drawn into an extraordinary mystery involving top-secret government experiments, terrifying supernatural forces and one very strange little girl.', 'rating' => 4.6],
            ['genre_id' => 3, 'title' => 'Scream Queens', 'photo' => 'assets/TV003.jpeg', 'description' => 'One of the sororities, Kappa Kappa Tau, becomes plagued by a serial killer, who uses the university Red Devil mascot as a disguise.', 'rating' => 4.5],
            ['genre_id' => 3, 'title' => 'Riverdale', 'photo' => 'assets/TV004.jpg', 'description' => 'Riverdale may not be as innocent as it appears. In an innocent, small town, the death of a popular rich boy named Jason Blossom rattles the town.', 'rating' => 4.6],
        ]);
    }
}
