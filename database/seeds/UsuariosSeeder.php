<?php

use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    DB::table('users')->insert([
      [
        'name' => 'admin',
        'email' => 'admin@utzin.edu.mx',
        'password' => bcrypt('admin'),
        'roll' => '1',
      ],
      [
        'name' => 'Jonathan Arana',
        'email' => 'jonathan@primermaster.net',
        'password' => bcrypt('admin'),
        'roll' => '2',
      ],
      [
        'name' => 'Eduardo Diaz',
        'email' => 'eduardo@utzin.edu.mx',
        'password' => bcrypt('admin'),
        'roll' => '3',
      ]
    ]);
  }
}
