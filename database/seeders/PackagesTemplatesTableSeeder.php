<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackagesTemplatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     DB::table('packages_templates')->insert([
            [
                'package_id' =>  DB::table('packages')->inRandomOrder()->value('id'),
                'template_id' => DB::table('templates')->inRandomOrder()->value('id'),
            ],
        ]);
    }
}
