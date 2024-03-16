<?php

namespace Database\Seeders;

use App\Models\Application;
use App\Models\Customer;
use App\Models\Tender;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Customer::factory(3000)->create();
        Tender::factory(3000)->create();
        Application::factory(500)->create();



        /*
        DB::table('customers')->insert([
            'name' => 'Eugene Stoner',
            'user_name' => 'AR-15',
        ]);

        DB::table('customers')->insert([
            'name' => 'Mikhail Kalashnikov',
            'user_name' => 'AK-47',
        ]);

        DB::table('customers')->insert([
            'name' => 'Samuel Colt',
            'user_name' => '1911',
        ]);

        DB::table('tenders')->insert([
            'text' => '20 tons',
            'road' => 'Odesa - Kyiv',
        ]);

        DB::table('tenders')->insert([
            'text' => 'Fragile cargo',
            'road' => 'NY - LA',
        ]);

        DB::table('applications')->insert([
            'customer_id' => 1,
            'tender_id' => 1,
            'payment_type' => 2,
            'price' => 99.99,
            'phone' => '+1 (555) 175-37-11'
        ]);

        DB::table('applications')->insert([
            'customer_id' => 2,
            'tender_id' => 1,
            'payment_type' => 3,
            'price' => 50000,
            'phone' => '+8 (050) 175-37-11'

        ]);

        DB::table('applications')->insert([
            'customer_id' => 3,
            'tender_id' => 2,
            'payment_type' => 1,
            'price' => 7000,
        ]);*/
    }
}
