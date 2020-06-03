<?php

use App\Cgy;
use Illuminate\Database\Seeder;

class CgiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cgy::truncate();
        //factory(App\Cgy::class,6)->create();
        Cgy::create(
            [
                'title' => '蘋果',
                'desc' => '蘋果分類',
                'pic' => 'https://e3.365dm.com/19/12/2048x1152/skynews-apples-istock_4867989.jpg',
                'enabled' => true,
            ]);
    }
}
