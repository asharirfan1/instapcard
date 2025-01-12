<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuperAdminFatoorahKey extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $keys = [
            'fatoorah_api_key',
        ];

        foreach ($keys as $key) {
            $setting = \App\Models\Setting::where('key', '=', $key)->first();
            if ($setting) {
                continue;
            }
            \App\Models\Setting::Create([
                'key' => $key,
                'value' => '',
            ]);
        }
    }
}
