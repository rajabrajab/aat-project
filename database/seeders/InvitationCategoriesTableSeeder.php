<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvitationCategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('invitation_categories')->insert([
            ['name' => 'تصنيف الدعوة الأول'],
            ['name' => 'تصنيف الدعوة الثاني'],
            ['name' => 'تصنيف الدعوة الثالثة'],
            ['name' => 'تصنيف الدعوة الرابعة'],
        ]);
    }
}
