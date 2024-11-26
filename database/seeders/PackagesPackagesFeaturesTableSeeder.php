<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackagesPackagesFeaturesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('packages_packages_features')->insert([
            [
             'package_id' => DB::table('packages')->inRandomOrder()->value('id'),
             'feature_id' => DB::table('package_features')->inRandomOrder()->value('id')
            ],
            [
             'package_id' => DB::table('packages')->inRandomOrder()->value('id'),
             'feature_id' => DB::table('package_features')->inRandomOrder()->value('id')
            ],
            [
             'package_id' => DB::table('packages')->inRandomOrder()->value('id'),
             'feature_id' => DB::table('package_features')->inRandomOrder()->value('id')
            ],
            [
             'package_id' => DB::table('packages')->inRandomOrder()->value('id'),
             'feature_id' => DB::table('package_features')->inRandomOrder()->value('id')
            ],
        ]);
    }
}
