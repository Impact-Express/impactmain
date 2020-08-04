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

        //Generate Default Users In Database
        DB::table('users')->insert([
            [
                'name'      => 'Cameron Miller',
                'slug'      => 'cameron-miller',
                'email'     => 'cameron@impactexpress.co.uk',
                'role'      => 'admin',
                'password'  => bcrypt('12345678'),
                'bio'       => 'Web Developer and cool guy',
            ],
            [
                'name'      => 'Richard Bailey',
                'slug'      => 'richard-bailey',
                'email'     => 'richard@impactexpress.co.uk',
                'role'      => 'admin',
                'password'  => bcrypt('12345678'),
                'bio'       => 'Lead Web Developer and cooler guy',
            ],
            [
                'name'      => 'Neil Miller',
                'slug'      => 'neil-miller',
                'email'     => 'neil@impactexpress.co.uk',
                'role'      => 'admin',
                'password'  => bcrypt('12345678'),
                'bio'       => 'M.D of the Company',
            ]
        ]);
    }
}
