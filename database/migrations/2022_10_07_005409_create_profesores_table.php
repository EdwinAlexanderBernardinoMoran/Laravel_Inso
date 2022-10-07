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
            $table->unsignedBigInteger("carrera_id");
            $table->unsignedBigInteger("categoria_id");
            $table->unsignedBigInteger("cargo_id");


            $table->id();
            $table->string("nombres");
            $table->string("apellidos");
            $table->string("direccion");
            $table->string("dui");
            $table->string("nip");
            $table->string("nit");
            $table->string("nup");
            $table->foreign("carrera_id")->references("id")->on("carreras");
            $table->foreign("categoria_id")->references("id")->on("categorias");
            $table->foreign("cargo_id")->references("id")->on("cargos");
            $table->string("partida");
            $table->string("subnivel");
            $table->string("fecha_ingreso");
            $table->string("habilitado");
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
