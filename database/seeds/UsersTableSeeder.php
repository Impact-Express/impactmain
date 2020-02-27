<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        //Generate Dummy Authors
        $faker = Factory::create();
        DB::table('users')->insert([
            [
                'name'      => 'Cameron Miller',
                'slug'      => 'cameron-miller',
                'email'     => 'cameron@impactexpress.co.uk',
                'password'  => bcrypt('12345678'),
                'bio'       => $faker->text(rand(250, 300))
            ],
            [
                'name'      => 'John Doe',
                'slug'      => 'john-doe',
                'email'     => 'john@test.co.uk',
                'password'  => bcrypt('12345678'),
                'bio'       => $faker->text(rand(250, 300))
            ],
            [
                'name'      => 'Jane Doe',
                'slug'      => 'jane-doe',
                'email'     => 'jane@test.co.uk',
                'password'  => bcrypt('12345678'),
                'bio'       => $faker->text(rand(250, 300))
            ]
        ]);
    }
}
