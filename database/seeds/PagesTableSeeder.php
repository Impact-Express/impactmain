<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use Carbon\Carbon;


class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset Database with Truncate
        DB::table('pages')->truncate();

        // Generate Dummy Data
        $pages = [];
        $faker = Factory::create();
        $date = Carbon::now();

        for ($i = 1; $i <=20; $i++) 
        {
            $image = "Post_Image_" . rand(1, 5) . ".jpg";
            $date = $date->addDays(1);
            $publishedDate = clone($date);
            $createdDate   = clone($date);

            $pages[] = [
                'author_id'     => rand(1, 3),
                'title'         => $faker->sentence(rand(8, 12)),
                'excerpt'       => $faker->text(rand(150, 200)),
                'body'          => $faker->paragraphs(rand(10, 15), true),
                'slug'          => $faker->slug(),
                'image'         => rand(0, 1) == 1 ? $image : NULL,
                'created_at'    => $createdDate,
                'updated_at'    => $createdDate,
                'published_at'  => $i < 5 ? $publishedDate : ( rand( 0, 1 ) == 0 ? NULL : $publishedDate->addDays(4) ),
            ];
        }

        DB::table('pages')->insert($pages);
    }
}