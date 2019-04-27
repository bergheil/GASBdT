<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            Schema::dropIfExists('products');
            $table->bigIncrements('id');
            $table->string('nome', 255);
            $table->text('descrizione')->nullable();
            $table->float('quantita')->nullable();
            $table->enum('unita_di_misura', ['pezzi','kg', 'ml', 'lt', 'gr'])->nullable();
            $table->double('prezzo')->nullable();
            $table->unsignedInteger('fornitore_id');
            $table->foreign('fornitore_id')->references('id')->on('users');
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
        Schema::dropIfExists('products');
    }
}
