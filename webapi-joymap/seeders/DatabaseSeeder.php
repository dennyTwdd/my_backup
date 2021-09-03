<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        $this->call('Database\Seeders\StoreSeeder');
        $this->call('Database\Seeders\StoreImageSeeder');
        $this->call('Database\Seeders\StorePermissionSeeder');
        $this->call('Database\Seeders\StoreBusinessTimeSeeder');
        $this->call('Database\Seeders\OrderSettingSeeder');
        $this->call('Database\Seeders\OrderHourSettingSeeder');
        $this->call('Database\Seeders\GoalSeeder');
    }
}
