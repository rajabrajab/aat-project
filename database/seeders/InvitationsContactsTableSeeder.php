<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvitationsContactsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('invitations_contacts')->insert([
            [
                'invitation_id' =>  DB::table('invitations')->inRandomOrder()->value('id'),
                'contact_id' => 1,
                'qrcode' => 'qrcode1.png',
                'invitation_received' => now(),
                'invitation_failed' => null,
                'invitation_accepted' => null,
                'invitation_rejected' => null,
                'is_present_on_event' => null,
            ],
        ]);
    }
}
