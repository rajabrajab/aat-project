<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageCategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('package_categories')->insert([
            ['name' => 'الفئة الأولى'],
            ['name' => 'الفئة الثانية'],
            ['name' => 'الفئة الثالثة'],
            ['name' => 'الفئة الرابعة'],
        ]);
    }
}
