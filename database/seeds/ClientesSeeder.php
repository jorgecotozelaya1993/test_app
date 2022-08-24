<?php
use App\Clientes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    Clientes::create(
    [
     'nombre' => 'Emilton',
     'apellido' => 'Barahona',
     'nombre_completo' => 'Emilton Barahona',
     'dui' => '00333222-2',
     'fecha_nacimiento' => '1993-11-20'
    ]);

    }
}
