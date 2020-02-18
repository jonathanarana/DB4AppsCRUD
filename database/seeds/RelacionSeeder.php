<?php

use Illuminate\Database\Seeder;

class RelacionSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    DB::table('relacion')->insert([
      [
        'materia' => '1',
        'alumno' => '3',
        'calificacion' => '10'
      ]
    ]);
  }
}
