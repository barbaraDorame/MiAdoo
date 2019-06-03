<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name' => 'instructormcinstructor',
        'email' => "xXxPimientaxXx@correo.org",
        'password' => bcrypt('password'),
        'tipo' => 'Instructor',
      ]);

      DB::table('users')->insert([
        'name' => 'responsablemcresponsable',
        'email' => "xXxTuJefaxXx@correo.org",
        'password' => bcrypt('password'),
        'tipo' => 'Responsable',
      ]);
      DB::table('users')->insert([
        'name' => 'alumnoreprobADO',
        'email' => "ctmwnqliaolawea@correo.org",
        'password' => bcrypt('password'),
        'tipo' => 'Alumno',
      ]);

      DB::table('propuestas')->insert([
        'correo_instructor'=> "xXxPimientaxXx@correo.org",
        'nombre' =>"Curso 1",
        'departamento'=> "Matematicas",
        'division'=> "Ciencias exactas y Naturales",
        'tipo_curso'=> "Optativa",
        'contenido'=>"dasnldasn",
        'contenido_sintetico'=>"nfdslnfsd",
        'modulos'=>"FDSFdsfa",
        'evaluacion'=>"dsafda",
        'documentacion'=>"csafdas",
        'financiamiento'=>"fdsadf",
        'objetivo_general'=>"fdsfsfgds",
        'objetivo_especifico'=>"fdsgfsdg",
        'utilidad'=>"bvbgdsdfg",
        'experiencia_instructor'=>"nada",
        'curriculum'=>"text.txt", //NO LO PUSE
        'perfil_instructor'=>"ya quisieras",
        'curriculum_sintetico'=>"no hay",
        'operacion_curso'=>"Fisico",
        'unidad'=>"Unidad Centro",
        'infraestructura'=>"LA que quietes",
        'requisitos_alumnos'=>"existir",
        'duracion_horas'=>20, //
        'exclusividad'=> 'Abierto',
        'idioma'=>'es',
        'cupo_maximo'=>1,
        'cupo_minimo'=>10,
        'fecha_inicio'=>Carbon::parse('2019-07-07'),
        'fecha_final'=>Carbon::parse('2019-07-10'),
        'estado'=> "Aprobado",
        'user_id'=>"1",
      ]);

      DB::table('cursos')->insert([
        'id_propuesta'=>1,
        'estado'=> 'Aprobado',
      ]);

      DB::table('alumnos')->insert([
        'nombre'=>"pepe",
        'apellido'=>"jajaj",
        'email'=>"ctmwnqliaolawea@correo.org",
        'no_expediente'=>"2543685",
        'folio'=>"201907pj23",
      ]);

      DB::table('convocatorias')->insert([
          'id_curso'=>1,
          'aula'=>"3K-203",
          'horario'=>"Lunes 11:00 a.m - 15:00 a.m",
      ]);

      DB::table('grupos_alumnos')->insert([
          'id_grupo'=>1,
          'id_alumno'=>1,
      ]);
    }
}
