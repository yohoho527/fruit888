<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('pName')->comment('品名');
            $table->string('pType')->comment('分類');
            $table->integer('pPrice')->comment('價錢');
            $table->string('pPlace')->comment('產地');
            $table->text('pIntro')->comment('簡介');
            $table->text('pBimg')->comment('商品主圖');
            $table->longText('pSimg')->comment('商品其他圖片');
            $table->string('pUnit', 20)->comment('單位');
            $table->text('pRemark')->comment('備註')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
