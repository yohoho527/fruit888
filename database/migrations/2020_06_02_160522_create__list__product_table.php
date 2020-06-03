<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->unsignedBigInteger('list_id');
            $table->unsignedBigInteger('product_id');

            $table->foreign('list_id')->references('id')->on('lists')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('list_product', function (Blueprint $table) {
            $table->dropForeign(['list_id']);
            $table->dropForeign(['product_id']);
            $table->dropColumn('list_id');
            $table->dropColumn('product_id');
        });
        Schema::dropIfExists('list_product');
    }
}
