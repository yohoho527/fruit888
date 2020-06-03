<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::truncate();
        //第一個商品
        Product::create([
            'pName' => '富士蘋果',
            'pType' => '蘋果',
            'pPrice' => 8,
            'pPlace' => '日本',
            'pIntro' => '日本產的蘋果',
            'pBimg' => '主圖網址',
            'pSimg' => '圖片1網址,圖片2網址,圖片3網址',
            'pUnit' => '顆',
            'pRemark' => '備註',
        ]);
        //第一個商品結尾
    }
}
