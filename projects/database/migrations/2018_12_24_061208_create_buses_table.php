<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buses', function (Blueprint $table) {
           $table->increments('id');
$table->string('bus_type');
$table->string('status');
$table->integer('total_seat');
$table->integer('seat_left');
$table->time('depart_time');
$table->time('arrival_time');
$table->integer('route_id')->unsigned(); 
$table->foreign('route_id')->references('id')->on('ways');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buses');
    }
}
