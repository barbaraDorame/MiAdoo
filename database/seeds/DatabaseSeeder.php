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
        'name' => 'instructor1',
        'email' => "instructor@uson.mx",
        'password' => bcrypt('password'),
        'tipo' => 'Instructor',
      ]);

      DB::table('users')->insert([
        'name' => 'responsable1',
        'email' => "responsable@uson.mx",
        'password' => bcrypt('password'),
        'tipo' => 'Responsable',
      ]);
      DB::table('users')->insert([
        'name' => 'Jefferson',
        'apellido'=>'Gutierritos'
        'email' => "a214202562@uson.mx",
        'password' => bcrypt('password'),
        'tipo' => 'Alumno',
      ]);

      DB::table('propuestas')->insert([
        'correo_instructor'=> "instructor@uson.mx",
        'nombre' =>"Teoria del Caos",
        'departamento'=> "Matematicas",
        'division'=> "Ciencias exactas y Naturales",
        'tipo_curso'=> "Optativa",
        'contenido'=>"Contenido 1, 2, 3",
        'contenido_sintetico'=>"contenido sintetico",
        'modulos'=>"modulo1, modulo 2 , modulo 3.",
        'evaluacion'=>"Asistencia",
        'documentacion'=>"la documentacion se encuentra en",
        'financiamiento'=>"El financiamiento es propio",
        'objetivo_general'=>"Que el alumno tenga un conocimiento basico acerca de lo que es el caos",
        'objetivo_especifico'=>"dar las bases para que pueda grafcar y entender las ecuaciones basicas de la teoria del caos",
        'utilidad'=>"utilidad",
        'experiencia_instructor'=>"Doctorado en ..., 8 semestres de profesor en la Unversidad de ...",
        'curriculum'=>"text.txt", //NO LO PUSE
        'perfil_instructor'=>"Doctorado en metematicas",
        'curriculum_sintetico'=>"...",
        'operacion_curso'=>"Fisico",
        'unidad'=>"Unidad Centro",
        'infraestructura'=>"Salon con computadoras con sistema operativo Ubuntu y herramientas basicas coomo gnuplot y compilador de python",
        'requisitos_alumnos'=>"Conocimientos de calculo y ecuaciones diferenciales",
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
        /*
      DB::table('alumnos')->insert([
        'nombre'=>"pepe",
        'apellido'=>"jajaj",
        'email'=>"ctmwnqliaolawea@correo.org",
        'no_expediente'=>"2543685",
        'folio'=>"201907pj23",
      ]);
        */
      DB::table('convocatorias')->insert([
          'id_curso'=>1,
          'aula'=>"3K-203",
          'horario'=>"Lunes 11:00 a.m - 15:00 a.m",
      ]);

      DB::table('grupos_alumnos')->insert([
          'id_grupo'=>1,
          'id_alumno'=>3,
      ]);
    }
}
