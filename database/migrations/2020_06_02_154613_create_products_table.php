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
            $table->string('pType');
            $table->integer('pPrice');
            $table->string('pPlace');
            $table->text('pIntro');
            $table->text('pBimg');
            $table->longText('pSimg');
            $table->string('pUnit', 20);
            $table->text('pRemark');
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
