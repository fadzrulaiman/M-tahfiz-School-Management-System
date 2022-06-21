<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->delete();

        $data = [
            ['type' => 'current_session', 'description' => '2022-2023'],
            ['type' => 'system_title', 'description' => 'm-tahfiz'],
            ['type' => 'system_name', 'description' => 'm-tahfiz school system'],
            ['type' => 'term_ends', 'description' => '7/10/2023'],
            ['type' => 'term_begins', 'description' => '7/10/2022'],
            ['type' => 'phone', 'description' => '0123456789'],
            ['type' => 'address', 'description' => 'Jalan Kg.getah, Kg.Getah Rumah No.7 91207 Kunak, Sabah'],
            ['type' => 'system_email', 'description' => 'mtahfiz@mtahfiz.com'],
            ['type' => 'alt_email', 'description' => ''],
            ['type' => 'email_host', 'description' => ''],
            ['type' => 'email_pass', 'description' => ''],
            ['type' => 'lock_exam', 'description' => 0],
            ['type' => 'logo', 'description' => ''],
            ['type' => 'next_term_fees_j', 'description' => '-'],
            ['type' => 'next_term_fees_pn', 'description' => '-'],
            ['type' => 'next_term_fees_p', 'description' => '-'],
            ['type' => 'next_term_fees_n', 'description' => '-'],
            ['type' => 'next_term_fees_s', 'description' => '-'],
            ['type' => 'next_term_fees_c', 'description' => '-'],
        ];

        DB::table('settings')->insert($data);

    }
}
