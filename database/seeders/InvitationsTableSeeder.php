<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvitationsTableSeeder extends Seeder
{
   public function run()
    {
        $invitations = [
            [
                'invitation_name' => 'دعوة الحفل الأول',
                'invitation_date' => '2024-12-01',
                'invitation_time' => '18:00:00',
                'city' => 'الرياض',
                'hood' => 'حي النخيل',
                'detailed_address' => 'العنوان المفصل للحفل الأول',
                'message_instructions_to_invitees' => 'تعليمات للحاضرين',
                'payment_method' => 'cash',
                'payment_status' => 'paid',
                'payment_response' => 'تم الدفع بنجاح',
                'payment_transaction_id' => 123456789,
                'payment_amount' => 100.0,
                'invitees_count' => 50,
                'present_count' => 30,
                'absent_count' => 20,
                'package_json' => '{}',
                'created_from' => 'app',
                'invitation_status' => 'open',
                'qr_code' => 'qr_code1.png',
            ],
            [
                'invitation_name' => 'دعوة الحفل الثاني',
                'invitation_date' => '2024-12-10',
                'invitation_time' => '19:00:00',
                'city' => 'جدة',
                'hood' => 'حي الشاطئ',
                'detailed_address' => 'العنوان المفصل للحفل الثاني',
                'message_instructions_to_invitees' => 'تعليمات أخرى للحاضرين',
                'payment_method' => 'paybal',
                'payment_status' => 'not_paid',
                'payment_response' => 'في انتظار الدفع',
                'payment_transaction_id' => 987654321,
                'payment_amount' => 200.0,
                'invitees_count' => 100,
                'present_count' => 70,
                'absent_count' => 30,
                'package_json' => '{}',
                'created_from' => 'web',
                'invitation_status' => 'closed',
                'qr_code' => 'qr_code2.png',
            ],
            [
                'invitation_name' => 'دعوة الحفل الثالث',
                'invitation_date' => '2024-12-15',
                'invitation_time' => '17:00:00',
                'city' => 'الدمام',
                'hood' => 'حي العزيزية',
                'detailed_address' => 'العنوان المفصل للحفل الثالث',
                'message_instructions_to_invitees' => 'تعليمات إضافية للحاضرين',
                'payment_method' => 'tamara',
                'payment_status' => 'paid',
                'payment_response' => 'تم الدفع بنجاح',
                'payment_transaction_id' => 1122334455,
                'payment_amount' => 150.0,
                'invitees_count' => 80,
                'present_count' => 60,
                'absent_count' => 20,
                'package_json' => '{}',
                'created_from' => 'web',
                'invitation_status' => 'active',
                'qr_code' => 'qr_code3.png',
            ],
            [
                'invitation_name' => 'دعوة الحفل الرابع',
                'invitation_date' => '2024-12-20',
                'invitation_time' => '20:00:00',
                'city' => 'مكة',
                'hood' => 'حي العوالي',
                'detailed_address' => 'العنوان المفصل للحفل الرابع',
                'message_instructions_to_invitees' => 'تعليمات عامة للحاضرين',
                'payment_method' => 'myfatoorah',
                'payment_status' => 'not_paid',
                'payment_response' => 'في انتظار الدفع',
                'payment_transaction_id' => 5566778899,
                'payment_amount' => 300.0,
                'invitees_count' => 120,
                'present_count' => 90,
                'absent_count' => 30,
                'package_json' => '{}',
                'created_from' => 'app',
                'invitation_status' => 'inactive',
                'qr_code' => 'qr_code4.png',
            ],
        ];

        foreach ($invitations as $invitation) {
            DB::table('invitations')->insert(array_merge($invitation, [
                'user_id' => DB::table('users')->inRandomOrder()->value('id'),
                'category_id' => DB::table('invitation_categories')->inRandomOrder()->value('id'),
                'package_id' => DB::table('packages')->inRandomOrder()->value('id'),
                'template_id' => DB::table('templates')->inRandomOrder()->value('id'),
                'date_type' => ['hijri', 'gregorian'][array_rand(['hijri', 'gregorian'])],
                'invitation_image' => 'image' . random_int(1, 4) . '.jpg',
                'invitation_video' => 'video' . random_int(1, 4) . '.mp4',
                'invitation_file' => 'file' . random_int(1, 4) . '.pdf',
                'map_latitude' => 24.7136 + (random_int(-100, 100) / 1000),
                'map_longitude' => 46.6753 + (random_int(-100, 100) / 1000),
            ]));
        }
}
}
