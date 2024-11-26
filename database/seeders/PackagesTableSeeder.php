<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackagesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('packages')->insert([
            [
                'category_id' => DB::table('package_categories')->inRandomOrder()->value('id'),
                'name' => 'الباقة الأولى',
                'price' => 150.0,
                'invitees_count' => 50,
                'accept_coupon' => 1,
                'status' => 'active',
                'description' => 'وصف الباقة الأولى',
                'recommended' => 1,
            ],
            [
                'category_id' => DB::table('package_categories')->inRandomOrder()->value('id'),
                'name' => 'الباقة الثانية',
                'price' => 150.0,
                'invitees_count' => 22,
                'accept_coupon' => 0,
                'status' => 'unactive',
                'description' => 'وصف الباقة الثانية',
                'recommended' => 0,
            ],
            [
                'category_id' => DB::table('package_categories')->inRandomOrder()->value('id'),
                'name' => 'الباقة الثالثة',
                'price' => 100.0,
                'invitees_count' => 1231,
                'accept_coupon' => 0,
                'status' => 'unactive',
                'description' => 'وصف الباقة الثالثة',
                'recommended' => 0,
            ],
            [
                'category_id' => DB::table('package_categories')->inRandomOrder()->value('id'),
                'name' => 'الباقة الرابعة',
                'price' => 200.0,
                'invitees_count' => 56,
                'accept_coupon' => 0,
                'status' => 'unactive',
                'description' => 'وصف الباقة الرابعة',
                'recommended' => 0,
            ],
        ]);
    }
}
