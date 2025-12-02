<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;
class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Cliente::create([
            "nombres"=>"Meredith",
            "apellido_paterno"=>"Porcel",
            "apellido_materno"=>"Condori",
            "telefono"=>"71007339",
            "nacimiento"=>"2008-11-21",
            "direccion"=>"barrio sucre,calle 10 final",
            "genero"=>"femenino"
        ]); 
        Cliente::create([
            "nombres"=>"Zeze",
            "apellido_paterno"=>"Alvarez",
            "apellido_materno"=>"Bueno",
            "telefono"=>"63339394",
            "nacimiento"=>"2009-03-06",
            "direccion"=>"radial 10",
            "genero"=>"masculino"
        ]);
        Cliente::create([
            "nombres"=>"Mateo",
            "apellido_paterno"=>"Mendez",
            "apellido_materno"=>"Rodrigez",
            "telefono"=>"75820518",
            "nacimiento"=>"2009-11-11",
            "direccion"=>"avenida san francisco,calle 3",
            "genero"=>"masculino"
        ]);
        Cliente::create([
            "nombres"=>"Nayerli",
            "apellido_paterno"=>"Sanchez",
            "apellido_materno"=>"Menacho",
            "telefono"=>"58803752",
            "nacimiento"=>"2008-07-24",
            "direccion"=>"palmeras,40",
            "genero"=>"femenino"
        ]);
        Cliente::create([
            "nombres"=>"Daneyba",
            "apellido_paterno"=>"Gutierrez",
            "apellido_materno"=>"Zambrana",
            "telefono"=>"10034857",
            "nacimiento"=>"2015-12-25",
            "direccion"=>"los ceibos,23",
            "genero"=>"femenino"
        ]);
        Cliente::create([
            "nombres"=>"Julio",
            "apellido_paterno"=>"Escobar",
            "apellido_materno"=>"Cuellar",
            "telefono"=>"73854210",
            "nacimiento"=>"1998-03-05",
            "direccion"=>"avenida los pinos,95",
            "genero"=>"masculino"
        ]);
        Cliente::create([
            "nombres"=>"Rodrigo",
            "apellido_paterno"=>"Perez",
            "apellido_materno"=>"Flores",
            "telefono"=>"12846785",
            "nacimiento"=>"2016-10-28",
            "direccion"=>"villa 1ro de mayo,subdistrito 86",
            "genero"=>"masculino"
        ]);
    }
}
