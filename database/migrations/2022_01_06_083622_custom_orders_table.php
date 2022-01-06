<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CustomOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_orders', function (Blueprint $table){
            $table->id();
            $table->bigInteger('user_id');
            $table->bigInteger('category_id');
            $table->string('size');
            $table->string('color');
            $table->string('crystal');
            $table->string('glitter');
            $table->longText('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
