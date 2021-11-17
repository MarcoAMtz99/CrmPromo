<?php

use Illuminate\Database\Seeder;
use App\Paciente;
class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Paciente::factory(50)->create();
        factory(Paciente::class,50)->create();
    }
}
