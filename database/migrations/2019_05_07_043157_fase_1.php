<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Fase1 extends Migration
{
    public function up()
    {
        Schema::create('propuestas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('correo_instructor')->unique();
            $table->string('nombre');
            $table->string('departamento');
            $table->string('division');
            $table->enum('tipo_curso', ['Obligatoria', 'Optativa']);
            $table->string('contenido');
            $table->string('contenido_sintetico');
            $table->string('modulos');
            $table->string('evaluacion');
            $table->string('documentacion');
            $table->string('financiamiento');
            $table->string('objetivo_general');
            $table->string('objetivo_especifico');
            $table->string('utilidad');
            $table->string('experiencia_instructor');
            $table->string('curriculum'); //NO LO PUSE
            $table->string('perfil_instructor');
            $table->string('curriculum_sintetico');
            $table->string('operacion_curso');
            $table->string('unidad'); //what
            $table->string('infraestructura');
            $table->string('requisitos_alumnos');
            $table->integer('duracion_horas'); //
            $table->enum('exclusividad', ['Abierto', 'Exclusivo']);
            $table->enum('idioma', ['Espanol', 'Ingles']);
            $table->integer('cupo_maximo');
            $table->integer('cupo_minimo');
            $table->date('fecha_inicio');
            $table->date('fecha_final');
            $table->timestamps();

            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
        });

      Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_propuesta')->unsigned();
            $table->enum('estado', ['Aprobado', 'Desaprobado', 'En espera'])->default('En espera');
            $table->timestamps();
      });
      Schema::table('cursos', function (Blueprint $table) {
            $table->foreign('id_propuesta')->references('id')->on('propuestas');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
