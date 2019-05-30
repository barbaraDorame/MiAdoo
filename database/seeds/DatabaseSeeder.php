<?php

use Illuminate\Database\Seeder;

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
    }
}
