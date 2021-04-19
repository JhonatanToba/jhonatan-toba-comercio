<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\producto::factory(30)->create();

        $NuevosProductos = [
            1 => array(
                "created_at"        => date('Y-m-d H:i:s'),
                "updated_at"        => date('Y-m-d H:i:s'),
                "nombre"            => "Reloj Hombre Tommy Hilfiger Decker",
                "precio"            => 741900,
                "activo"            => 1,
                "trending"          => 1,
                "fecha_lanzamiento" => date('Y-m-d H:i:s')
            ),
            2 => array(
                "created_at"        => date('Y-m-d H:i:s'),
                "updated_at"        => date('Y-m-d H:i:s'),
                "nombre"            => "Celular Xiaomi Redmi Note 8 128GB",
                "precio"            => 649900,
                "activo"            => 1,
                "trending"          => 1,
                "fecha_lanzamiento" => date('Y-m-d H:i:s')
            ),
            3 => array(
                "created_at"        => date('Y-m-d H:i:s'),
                "updated_at"        => date('Y-m-d H:i:s'),
                "nombre"            => "Cubrelecho Poliéster Paisley",
                "precio"            =>  71990,
                "activo"            => 1,
                "trending"          => 1,
                "fecha_lanzamiento" => date('Y-m-d H:i:s')
            ),
            4 => array(
                "created_at"        => date('Y-m-d H:i:s'),
                "updated_at"        => date('Y-m-d H:i:s'),
                "nombre"            => "Reloj Mujer Guess Limelight",
                "precio"            => 391990,
                "activo"            => 1,
                "trending"          => 1,
                "fecha_lanzamiento" => date('Y-m-d H:i:s')
            ),
            5 => array(
                "created_at"        => date('Y-m-d H:i:s'),
                "updated_at"        => date('Y-m-d H:i:s'),
                "nombre"            => "Bandas Elásticas Poder 71281",
                "precio"            => 14900,
                "activo"            => 1,
                "trending"          => 0,
                "fecha_lanzamiento" => date('Y-m-d H:i:s')
            ),
            6 => array(
                "created_at"        => date('Y-m-d H:i:s'),
                "updated_at"        => date('Y-m-d H:i:s'),
                "nombre"            => "Cama nido doble dúplex en ecocuero",
                "precio"            => 939900,
                "activo"            => 0,
                "trending"          => 0,
                "fecha_lanzamiento" => date('Y-m-d H:i:s')
            )
        ];

        foreach ($NuevosProductos as $producto){
            $añadir = new producto();
            foreach ($producto as $llave => $valor){
                $añadir -> $llave = $valor; 
            } 
            $añadir -> save();
        }
    }
}
