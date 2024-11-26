<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemplatesFieldsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('templates_fields')->insert([
            [
                'name' => 'الحقل الأول',
                'template_id' =>  DB::table('templates')->inRandomOrder()->value('id'),
                'field_type' => 'text',
                'label' => 'الاسم الكامل',
            ],
            [
                'name' => 'الحقل الثاني',
                'template_id' =>DB::table('templates')->inRandomOrder()->value('id'),
                'field_type' => 'date',
                'label' => 'تاريخ الميلاد',
            ],
            [
                'name' => 'الحقل الثالث',
                'template_id' =>DB::table('templates')->inRandomOrder()->value('id'),
                'field_type' => 'location',
                'label' => 'مكان الفعالية',
            ],
        ]);
    }
}
