<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('becas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('num_control');
            $table->string('genero');
            $table->integer('semestre');
            $table->string('carrera');
            $table->date('fecha_nacimiento');
            $table->string('domicilio');
            $table->string('tipo_beca');
            $table->string('archivo_motivos');
            $table->string('archivo_identificacion');
            $table->string('archivo_comprobante');
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
        Schema::dropIfExists('becas');
    }
}
