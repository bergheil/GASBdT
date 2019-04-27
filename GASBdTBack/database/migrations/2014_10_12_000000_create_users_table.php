<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nominativo');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('indirizzo', 255)->nullable();
            $table->string('cap', 5)->nullable();
            $table->string('localita', 50)->nullable();
            $table->string('provincia', 2)->nullable();
            $table->string('piva', 11)->nullable();
            $table->string('cf', 18)->nullable();
            $table->string('telefono', 50)->nullable();
            $table->enum('ruolo', ['admin','coordinatore','referente', 'socio', 'fornitore'])->default('socio');
            
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
