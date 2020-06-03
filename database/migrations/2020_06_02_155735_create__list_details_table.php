<?php

use Illuminate\Database\Migrations\Migration;

class CreateListDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('details', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->timestamps();
        //     $table->integer('pName')->comment('商品名稱');
        //     $table->integer('pNum')->comment('購買數量');
        //     $table->unsignedBigInteger('list_id');
        //     $table->foreign('list_id')->references('id')->on('lists')->onDelete('cascade');

        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('details', function (Blueprint $table) {
        //     $table->dropForeign(['list_id']);

        //     $table->dropColumn('list_id');
        // });
        // Schema::dropIfExists('details');
    }
}
