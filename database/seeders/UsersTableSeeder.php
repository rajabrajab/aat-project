<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'source_platform' => 'facebook',
                'email' => 'admin@example.com',
                'password' => bcrypt('password'),
                'avatar' => 'avatar1.jpg',
                'full_name' => 'المستخدم الأول',
                'status' => 'active',
                'role' => 'admin',
                'permissions' => 'all',
                'activated_at' => now(),
                'username' => 'user1',
                'country' => 'السعودية',
                'address' => 'الرياض',
                'gender' => 'male',
                'city' => 'الرياض',
                'last_login' => now(),
                'deleted_by' => null,
                'utm' => 'source1',
            ],
            [
                'source_platform' => 'facebook',
                'email' => 'ex@example.com',
                'password' => bcrypt('password'),
                'avatar' => 'avatar1.jpg',
                'full_name' => 'المستخدم الثاني',
                'status' => 'active',
                'role' => 'user',
                'permissions' => 'all',
                'activated_at' => now(),
                'username' => 'ex',
                'country' => 'السعودية',
                'address' => 'الرياض',
                'gender' => 'male',
                'city' => 'الرياض',
                'last_login' => now(),
                'deleted_by' => null,
                'utm' => 'source1',
            ],
            [
                'source_platform' => 'facebook',
                'email' => 'exe2@example.com',
                'password' => bcrypt('password'),
                'avatar' => 'avatar1.jpg',
                'full_name' => 'المستخدم الثالث',
                'status' => 'active',
                'role' => 'company',
                'permissions' => 'all',
                'activated_at' => now(),
                'username' => 'user1',
                'country' => 'السعودية',
                'address' => 'الرياض',
                'gender' => 'male',
                'city' => 'الرياض',
                'last_login' => now(),
                'deleted_by' => null,
                'utm' => 'source1',
            ],
            [
                'source_platform' => 'facebook',
                'email' => 'asa@example.com',
                'password' => bcrypt('password'),
                'avatar' => 'avatar1.jpg',
                'full_name' => 'المستخدم الرابع',
                'status' => 'active',
                'role' => 'user',
                'permissions' => 'all',
                'activated_at' => now(),
                'username' => 'user4',
                'country' => 'السعودية',
                'address' => 'الرياض',
                'gender' => 'male',
                'city' => 'الرياض',
                'last_login' => now(),
                'deleted_by' => null,
                'utm' => 'source1',
            ],
        ]);
    }
}
