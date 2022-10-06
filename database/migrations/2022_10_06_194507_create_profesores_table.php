<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesores', function (Blueprint $table) {
            $table->id();
            // $table->string("nombres");
            // $table->string("apellidos");
            // $table->string("direccion");
            // $table->string("dui");
            // $table->string("nip");
            // $table->string("nit");
            // $table->string("nup");
            // $table->string("");
            // $table->foreign("carrera_id")->references("id")->on("");
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
        Schema::dropIfExists('profesores');
    }
}
