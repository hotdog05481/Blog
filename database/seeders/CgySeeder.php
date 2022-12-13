<?php

namespace Database\Seeders;

use App\Models\Cgy;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CgySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cgy::truncate(); //把所有資料清空,並重置主鍵
        $faker = Factory::create('zh_TW');

        // //建立資料
        // for ($i = 1; $i <= 100; $i++) {
        //     // Cgy::create(['subject' => '分類', 'enabled' => true, 'enabled_at' => Carbon::now()->addDays(rand(0, 10))]);
        //     Cgy::create(['subject' => $faker->realText(15), 'enabled' => $faker->randomElement([true, false]), 'enabled_at' => Carbon::createFromFormat('Y-m-d', $faker->date)]);
        // }
        Cgy::factory()->times(100)->create();
    }
}