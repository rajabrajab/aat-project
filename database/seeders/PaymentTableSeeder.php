<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentTableSeeder extends Seeder
{
     public function run()
    {
        $methods = ['cash', 'paybal', 'tamara', 'myfatoorah'];
        $statuses = ['paid', 'not_paid'];

        for ($i = 1; $i <= 4; $i++) {
            DB::table('payments')->insert([
                'user_id' => DB::table('users')->inRandomOrder()->value('id'),
                'invitation_id' => DB::table('invitations')->inRandomOrder()->value('id'),
                'method' => $methods[array_rand($methods)],
                'provider_response' => 'تم الدفع بنجاح',
                'transaction_id' => random_int(100000000, 999999999),
                'amount' => random_int(50, 500) + (random_int(0, 99) / 100),
                'currency' => 'SAR',
                'deleted_by' => null,
                'reason' => null,
                'status' => $statuses[array_rand($statuses)],
            ]);
        }
    }
}
