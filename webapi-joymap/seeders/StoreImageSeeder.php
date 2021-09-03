<?php

namespace Database\Seeders;

use App\Models\StoreImage;
use Illuminate\Database\Seeder;

class StoreImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StoreImage::factory(5)->create();
        StoreImage::find(1)->update([
            'type' => 0,
            'url' => 'https://upload.cc/i1/2021/06/18/vbYafd.jpg',
            'sort' => 0
        ]);
        StoreImage::find(2)->update([
            'type' => 0,
            'url' => 'https://upload.cc/i1/2021/06/18/vbYafd.jpg',
            'sort' => 1
        ]);
        StoreImage::find(3)->update([
            'type' => 1,
            'url' => 'https://upload.cc/i1/2021/06/18/gLUPEk.jpg',
            'sort' => 0
        ]);
        StoreImage::find(4)->update([
            'type' => 2,
            'url' => 'https://upload.cc/i1/2021/06/18/gLUPEk.jpg',
            'sort' => 0
        ]);
        StoreImage::find(5)->update([
            'type' => 3,
            'url' => 'https://upload.cc/i1/2021/06/18/gLUPEk.jpg',
            'sort' => 0
        ]);
    }
}
