<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'username' => 'admin1',
            'user_id' => '1',
            'nin' => '12345678',
            'referral_id' => 'ng-1111',
            'unique_id' => 'ng-111',
        ]);
        DB::table('profiles')->insert([
            'username' => 'admin2',
            'user_id' => '2',
            'nin' => '22222222',
            'referral_id' => 'ng-111',
            'unique_id' => 'ng-1111',
        ]);
        DB::table('profiles')->insert([
            'username' => 'admin3',
            'user_id' => '3',
            'nin' => '33333333',
            'referral_id' => 'ng-1111',
            'unique_id' => 'ng-222',
        ]);
        DB::table('profiles')->insert([
            'username' => 'admin4',
            'user_id' => '4',
            'nin' => '44444444',
            'referral_id' => 'ng-222',
            'unique_id' => 'ng-333',
        ]);
        DB::table('profiles')->insert([
            'username' => 'admin5',
            'user_id' => '5',
            'nin' => '55555555',
            'referral_id' => 'ng-333',
            'unique_id' => 'ng-444',
        ]);
    }
}
