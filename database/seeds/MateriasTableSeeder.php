<?php

use Illuminate\Database\Seeder;

class MateriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for($i=0;$i<10;$i++){
        DB::table('materias')->insert([
            'crn' => str_random(10),
            'seccion' => str_random(10),
            'calendario' => str_random(10),
            'materia' => str_random(10),
            'hora_inicio' => '15:00:00',
            'salon' => str_random(10),
            'user_id' => 1,
        ]);
      }
    }
}
