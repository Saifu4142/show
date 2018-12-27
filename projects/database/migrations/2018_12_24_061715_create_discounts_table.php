<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disocunts', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('discounted_price');
			$table->integer('ticket_id')->unsigned(); 
			$table->foreign('ticket_id')->references('id')->on('tickets');
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
        Schema::dropIfExists('disocunts');
    }
}
