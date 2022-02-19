<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Database\Seeders\RolesTableSeeder;
use Database\Seeders\UsersTableSeeder;
use Database\Seeders\ProfileSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            "role_id" => 1,

            'profiled' => 1,
            'email' => 'admin@gmail.com',
            'password' => Hash::make('dennison'),
        ]);
        DB::table('users')->insert([

            "role_id" => 1,

            'profiled' => 1,
            'email' => 'admin2@gmail.com',
            'password' => Hash::make('dennison'),
        ]);
        DB::table('users')->insert([

            "role_id" => 1,

            'profiled' => 1,
            'email' => 'admin3@gmail.com',
            'password' => Hash::make('dennison'),
        ]);
        DB::table('users')->insert([

            "role_id" => 1,

            'profiled' => 1,
            'email' => 'admin4@gmail.com',
            'password' => Hash::make('dennison'),
        ]);
        DB::table('users')->insert([

            "role_id" => 1,

            'profiled' => 1,
            'email' => 'admin5@gmail.com',
            'password' => Hash::make('dennison'),
        ]);
        // $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ProfileSeeder::class);
    }
}
