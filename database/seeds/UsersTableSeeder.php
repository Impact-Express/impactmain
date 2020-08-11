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
                'name'      => 'Administrator Account',
                'slug'      => 'administrator',
                'email'     => 'admin@impactexpress.co.uk',
                'role'      => 'admin',
                'password'  => bcrypt('Impact5710%%'),
                'bio'       => '',
            ],
        ]);
    }
}
