<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Joymap\Models\OrderSetting;

class OrderSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order = OrderSetting::factory()->create();
        $order->update([
            'order_unit_minute' => 30,
            'can_order_day' => 7,
            'same_time_order_total' => 10,
            'single_time_order_total' => 10,
            'final_order_minute' => 30,
            'final_cancel_minute' => 15,
            'hold_order_minute' => 20
        ]);
    }
}
