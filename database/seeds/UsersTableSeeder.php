<?php

use Illuminate\Database\Seeder;

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
        DB::table('users')->insert([
            [
                'name'      => 'Cameron Miller',
                'slug'      => 'cameron-miller',
                'email'     => 'cameron@impactexpress.co.uk',
                'password'  => bcrypt('12345678')
            ],
            [
                'name'      => 'John Doe',
                'slug'      => 'john-doe',
                'email'     => 'john@test.co.uk',
                'password'  => bcrypt('12345678')
            ],
            [
                'name'      => 'Jane Doe',
                'slug'      => 'jane-doe',
                'email'     => 'jane@test.co.uk',
                'password'  => bcrypt('12345678')
            ]
        ]);
    }
}
