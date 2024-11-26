<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemplateInvitationMetaTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('template_invitation_meta')->insert([
            [
                'invitation_id' => DB::table('invitations')->inRandomOrder()->value('id'),
                'key' => 'العنوان الرئيسي',
                'value' => 'عنوان الحدث',
            ],
            [
                'invitation_id' => DB::table('invitations')->inRandomOrder()->value('id'),
                'key' => 'المكان',
                'value' => 'قاعة الاحتفالات',
            ],
        ]);
    }
}
