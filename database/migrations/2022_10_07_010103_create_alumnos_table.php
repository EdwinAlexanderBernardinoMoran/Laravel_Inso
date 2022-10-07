<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->unsignedBigInteger('nacionalidad_id');
            $table->unsignedBigInteger("departamento_nacimiento_id");
            $table->unsignedBigInteger("municipio_nacimiento_id");
            $table->unsignedBigInteger("especialidad_ingreso_id");
            $table->unsignedBigInteger("centro_providencia_id");
            $table->unsignedBigInteger("discapacidad_id");
            $table->unsignedBigInteger("zona_id");
            $table->unsignedBigInteger("departamento_residencia_id");
            $table->unsignedBigInteger("canton_id");
            $table->unsignedBigInteger("caserio_id");
            $table->unsignedBigInteger("tipo_calle_id");
            $table->unsignedBigInteger("zona_responsable_id");
            $table->unsignedBigInteger("departamento_responsable_id");
            $table->unsignedBigInteger("municipio_responsable_id");
            $table->unsignedBigInteger("canton_responsable_id");
            $table->unsignedBigInteger("caserio_responsable_id");
            $table->unsignedBigInteger("tipo_calle_responsable_id");
            $table->unsignedBigInteger("profesor_revision_id");

            



            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->date('fecha_nacimiento');
            $table->foreign("nacionalidad_id")->references("id")->on("nacionalidades");
            $table->foreign("departamento_nacimiento_id")->references("id")->on("departamentos");
            $table->foreign("municipio_nacimiento_id")->references("id")->on("municipios");
            $table->string('anio_bachillerato');
            $table->string('nie');
            $table->string('numero_partida');
            $table->string('folio_partida');
            $table->string('libro_partida');
            $table->string('otro_documento_identificacion');
            $table->string('salvadoreño_por');
            $table->foreign("especialidad_ingreso_id")->references("id")->on("especialidades");
            $table->boolean('estudio_parvularia');
            $table->boolean('repite_grado');
            $table->foreign("centro_providencia_id")->references("id")->on("centroescolares");
            $table->integer("anio_anterior");
            $table->string("tipo_sangre");
            $table->char("sexo");
            $table->char("estado_familiar");
            $table->foreign("discapacidad_id")->references("id")->on("discapacidades");
            $table->string("email");
            $table->string("telefeno");
            $table->foreign("zona_id")->references("id")->on("zonas");
            $table->foreign("departamento_residencia_id")->references("id")->on("departamentos");
            $table->foreign("canton_id")->references("id")->on("cantones");
            $table->foreign("caserio_id")->references("id")->on("caserios");
            $table->foreign("tipo_calle_id")->references("id")->on("calles");
            $table->string("direccion_completa");
            $table->string("medio_transporte");
            $table->decimal("distancia_desde_casa_y_centroeducativo");
            $table->string("factor_de_riesgo");
            $table->integer("numero_integrantes_familia");
            $table->boolean("integrados");
            $table->string("depende_economicamente_de");
            $table->boolean("tiene_hijos");
            $table->string("numero_hijos");
            $table->boolean("trabaja");
            $table->string("convive_con");
            $table->string("nombre_madre");
            $table->string("ocupacion_madre");
            $table->string("lugar_trabajo_madre");
            $table->string("telefono_madre");
            $table->string("nombre_padre");
            $table->string("ocupacion_padre");
            $table->string("lugar_trabjo_padre");
            $table->string("telefono_padre");
            $table->string("nombre_responsable");
            $table->string("apellidos_responsable");
            $table->string("dui_responsable");
            $table->string("email_responsable");
            $table->string("telefono_encargado");
            $table->foreign("zona_responsable_id")->references("id")->on("zonas");
            $table->foreign("departamento_responsable_id")->references("id")->on("departamentos");
            $table->foreign("municipio_responsable_id")->references("id")->on("municipios");
            $table->foreign("canton_responsable_id")->references("id")->on("cantones");
            $table->foreign("caserio_responsable_id")->references("id")->on("caserios");
            $table->foreign("tipo_calle_responsable_id")->references("id")->on("calles");
            $table->string("direccion_responsable");
            $table->string("profesion_responsable");
            $table->string("telefono_responsable");
            $table->string("nivel_academico_responsable");
            $table->string("factor_riesgo_responsable");
            $table->date("fecha_revision_formulario");
            $table->boolean("partida_naciemiento");
            $table->boolean("certicacion_notas");
            $table->boolean("certificado");
            $table->boolean("fotos");
            $table->boolean("foto_copia_dui");
            $table->boolean("constancia_conducta");
            $table->boolean("carnet_residente");
            $table->foreign("profesor_revision_id")->references("id")->on("profesores");
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
        Schema::dropIfExists('alumnos');
    }
}
