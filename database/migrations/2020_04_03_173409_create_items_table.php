<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->string('title', 100); //字串欄位，長度不超過100
            // $table->text('desc')->nullable(); //長字串欄位，可為空值
            $table->integer('pic')->default(0)->unsigned(); //整數欄位，預設為0，不得為負數
            $table->timestamp('sell_at')->nullable(); //時間戳記欄位，可為空值
            $table->boolean('enabled')->default(true); //布林值欄位，預設為true
            $table->timestamps();

            $table->string('title', 100)->comment('品名');
            // $table->string('pName')->comment('品名');

            $table->integer('price')->comment('價錢');
            //$table->integer('pPrice')->comment('價錢');

            $table->string('pPlace')->comment('產地');

            $table->text('desc')->nullable()->comment('簡介');
            //$table->text('pIntro')->comment('簡介');

            $table->text('pic_url', 255)->nullable()->comment('商品主圖');
            // $table->text('pBimg')->comment('商品主圖');

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
        // Schema::table('items', function (Blueprint $table) {
        //     $table->dropForeign(['cgy_id']);
        //     $table->removeColumn('cgy_id');
        // });
        Schema::dropIfExists('items');
    }
}
