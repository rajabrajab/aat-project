<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('contacts')->insert([
            [
                'last_name' => 'الاسم الأخير',
                'first_name' => 'الاسم الأول',
                'position' => 'مدير',
                'birthdate' => '1990-01-01',
                'gender' => 'male',
                'phone_number' => '0555555555',
                'whatsapp_number' => '0555555555',
                'email' => 'example1@email.com',
                'created_from' => 'web',
            ],
            [
                'last_name' => 'الاسم الأخير',
                'first_name' => 'الاسم الأول',
                'position' => 'موظف',
                'birthdate' => '1995-02-02',
                'gender' => 'female',
                'phone_number' => '0566666666',
                'whatsapp_number' => '0566666666',
                'email' => 'example2@email.com',
                'created_from' => 'mobile',
            ],
        ]);
    }
}
