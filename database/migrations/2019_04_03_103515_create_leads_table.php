<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('house_id');
            $table->bigInteger('user_id');
            $table->date('appoint_date');
            $table->time('appoint_time');
            $table->string('offer_price');
            $table->string('comment');
            $table->enum('buying_plan',['cash','loan']);
            $table->enum('toured',['yes','no']);
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
        Schema::dropIfExists('leads');
    }
}
