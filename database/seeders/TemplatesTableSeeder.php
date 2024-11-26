<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemplatesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('templates')->insert([
            [
                'name' => 'القالب الأول',
                'category_id' => DB::table('package_categories')->inRandomOrder()->value('id'),
                'status' => 'active',
                'created_by' =>  DB::table('users')->inRandomOrder()->value('id'),
            ],
            [
                'name' => 'القالب الثاني',
                'category_id' => DB::table('package_categories')->inRandomOrder()->value('id'),
                'status' => 'inactive',
                'created_by' =>  DB::table('users')->inRandomOrder()->value('id'),
            ],
            [
                'name' => 'القالب الثالث',
                'category_id' => DB::table('package_categories')->inRandomOrder()->value('id'),
                'status' => 'inactive',
                'created_by' =>  DB::table('users')->inRandomOrder()->value('id'),
            ],
            [
                'name' => 'القالب الرابع',
                'category_id' => DB::table('package_categories')->inRandomOrder()->value('id'),
                'status' => 'inactive',
                'created_by' =>  DB::table('users')->inRandomOrder()->value('id'),
            ],
        ]);
    }
}
