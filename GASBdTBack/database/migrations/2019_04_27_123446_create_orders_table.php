<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            Schema::dropIfExists('orders');
            $table->bigIncrements('id');
            $table->string('nome', 255);
            $table->text('descrizione')->nullable();
            $table->dateTime('data_apertura')->nullable();
            $table->dateTime('data_chiusura')->nullable();
            $table->enum('stato', ['aperto','chiuso'])->nullable();
            $table->unsignedInteger('fornitore_id');
            $table->unsignedInteger('referente_id');
            $table->foreign('fornitore_id')->references('id')->on('users');
            $table->foreign('referente_id')->references('id')->on('users');
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
        Schema::dropIfExists('orders');
    }
}
