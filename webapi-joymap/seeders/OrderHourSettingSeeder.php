<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Joymap\Models\OrderHourSetting;

class OrderHourSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 7; $i++) {
            OrderHourSetting::create([
                'store_id' => 1,
                'week' => $i,
                'begin_time' => '07:00',
                'end_time' => '18:00',
                'is_open' => 1,
            ]);
        }
    }
}
