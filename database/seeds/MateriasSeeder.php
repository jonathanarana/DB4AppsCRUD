<?php

use Illuminate\Database\Seeder;

class MateriasSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    DB::table('materias')->insert([
      [
        'maestro' => '2',
        'nombre' => 'programacion orientada a errores',
      ]
    ]);
  }
}
