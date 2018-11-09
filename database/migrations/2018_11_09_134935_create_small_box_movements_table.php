<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmallBoxMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('small_box_movements', function (Blueprint $table) {
            $table->increments('id');

            $table->double('amount', 2);
            $table->string('ticket');
            $table->enum('type', ['factura', 'boleta', 'n/a']);
            $table->text('observation');

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
        Schema::dropIfExists('small_box_movements');
    }
}
