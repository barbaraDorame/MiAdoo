<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Fase2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email');
            $table->string('no_expediente');
            $table->string('folio');
            $table->foreign('email')->references('email')->on('users');
        });
        */

        Schema::create('convocatorias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_curso')->unsigned();
            $table->string('aula');
            $table->string('horario');
        });

        Schema::create('grupos_alumnos', function (Blueprint $table) {
            $table->integer('id_grupo')->unsigned();
            $table->integer('id_alumno')->unsigned();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->enum('tipo', ['Alumno', 'Instructor', 'Responsable', 'Division']);
            $table->string('apellido')->nullable();
            $table->string('no_expediente')->nullable();

      });

      Schema::table('convocatorias', function (Blueprint $table) {
        $table->foreign('id_curso')->references('id')->on('cursos');
      });

      Schema::table('grupos_alumnos', function (Blueprint $table) {
        $table->foreign('id_grupo')->references('id')->on('convocatorias');
        $table->foreign('id_alumno')->references('id')->on('users');
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
