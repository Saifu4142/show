<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
          $table->increments('id');
$table->string('ticket_type');
$table->integer('ticket_price');
$table->integer('pass_id')->unsigned(); 
$table->foreign('pass_id')->references('id')->on('passengers');
$table->integer('bus_id')->unsigned(); 
$table->foreign('bus_id')->references('id')->on('buses');
$table->integer('aid')->unsigned(); 
$table->foreign('aid')->references('id')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
