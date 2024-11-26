<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call([
            UsersTableSeeder::class,
            PackageCategoriesTableSeeder::class,
            PackagesTableSeeder::class,
            PackageFeaturesTableSeeder::class,
            PackagesPackagesFeaturesTableSeeder::class,
            TemplatesTableSeeder::class,
            PackagesTemplatesTableSeeder::class,
            TemplatesFieldsTableSeeder::class,
            InvitationCategoriesTableSeeder::class,
            InvitationsTableSeeder::class,
            ContactsTableSeeder::class,
            InvitationsContactsTableSeeder::class,
            TemplateInvitationMetaTableSeeder::class,
            PaymentTableSeeder::class,
        ]);
    }
}
