<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('users')->insert([
            'name' => 'Admin Admin',
            'email' => 'admins@admins.com',
            'password' => Hash::make('adminadmin123'),
            'role_id' => 2
        ]);

        DB::table('roles')->insert([
           'name' => 'guest'
        ]);

        DB::table('roles')->insert([
            'name' => 'admin'
        ]);

        DB::table('roles')->insert([
            'name' => 'teacher'
        ]);

        DB::table('roles')->insert([
            'name' => 'student'
        ]);
    }
}
