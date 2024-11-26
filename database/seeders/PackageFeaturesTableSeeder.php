<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageFeaturesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('package_features')->insert([
            ['name' => 'الميزة الأولى'],
            ['name' => 'الميزة الثانية'],
            ['name' => 'الميزة الثالثة'],
            ['name' => 'الميزة الرابعة'],
        ]);
    }
}
