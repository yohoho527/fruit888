<?php

use Illuminate\Database\Migrations\Migration;

class CreateListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('lists', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->unsignedBigInteger('user_id');
        //     $table->Integer('iTotalPrice')->comment("總價");
        //     $table->timestamps();

        //     $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('lists', function (Blueprint $table) {
        //     $table->dropForeign(['user_id']);
        //     $table->dropColumn('user_id');
        // });
        // Schema::dropIfExists('lists');
    }
}
