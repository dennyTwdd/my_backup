<?php

namespace Database\Seeders;

use App\Models\Store;
use App\Models\StoreRole;
use App\Models\FoodType;
use Joymap\Models\StoreFoodType;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //StoreRole Factory建立時會自動建立一個Store
        StoreRole::factory()->count(1)->create();

        //建立4個 StoreRole 並且 store_id 使用 Store 第一筆資料的ID
        StoreRole::factory()->count(4)->create(['store_id' => Store::first()->id]);

        $food = [
            "火鍋",
            "早午餐",
            "餐酒館/酒吧"
        ];

        for ($i = 0; $i < 3; $i++) {
            FoodType::create([
                'name' => $food[$i]
            ]);
        }

        for ($i = 1; $i < 4; $i++) {
            StoreFoodType::create([
                'store_id' => 1,
                'food_type_id' => $i
            ]);
        }

        Store::find(1)->update([
            'name' => 'JOYMAP FIRST STORE',
            'phone' => '0212345678',
            'summary' => '一個賣吃的餐廳一個賣吃的餐廳一個賣吃的餐廳一個賣吃的餐廳',
            'website' => 'https://www.facebook.com/twdd5209',
            'address' => '台北市內湖區瑞光路1號',
        ]);
    }
}
