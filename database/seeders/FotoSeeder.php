<?php

namespace Database\Seeders;

use App\Models\foto;
use Illuminate\Database\Seeder;
use App\Models\producto;

class FotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\foto::factory(100)->create();

        $reloj= producto::find(1);
        $celular= producto::find(2);
        $cubre= producto::find(3);
        $relojMujer= producto::find(4);
        $Bandas= producto::find(5);
        $Cama= producto::find(6);

        foto::create([
            "created_at"   => date("Y-m-d H:m:s"),
            "updated_at"   => date("Y-m-d H:m:s"),
            "url"          => "https://falabella.scene7.com/is/image/FalabellaCO/4980848_1?wid=1500&hei=1500&qlt=70",
            "productos_id" => $reloj->id
        ]);
        foto::create([
            "created_at"   => date("Y-m-d H:m:s"),
            "updated_at"   => date("Y-m-d H:m:s"),
            "url"          => "https://falabella.scene7.com/is/image/FalabellaCO/4980848_2?wid=1500&hei=1500&qlt=70",
            "productos_id" => $reloj->id
        ]);

        foto::create([
            "created_at"   => date("Y-m-d H:m:s"),
            "updated_at"   => date("Y-m-d H:m:s"),
            "url"          => "https://falabella.scene7.com/is/image/FalabellaCO/4919209_1?wid=1500&hei=1500&qlt=70",
            "productos_id" => $celular->id
        ]);
        foto::create([
            "created_at"   => date("Y-m-d H:m:s"),
            "updated_at"   => date("Y-m-d H:m:s"),
            "url"          => "https://falabella.scene7.com/is/image/FalabellaCO/4919209_3?wid=1500&hei=1500&qlt=70",
            "productos_id" => $celular->id
        ]);
        foto::create([
            "created_at"   => date("Y-m-d H:m:s"),
            "updated_at"   => date("Y-m-d H:m:s"),
            "url"          => "https://falabella.scene7.com/is/image/FalabellaCO/4919209_4?wid=1500&hei=1500&qlt=70",
            "productos_id" => $celular->id
        ]);

        foto::create([
            "created_at"   => date("Y-m-d H:m:s"),
            "updated_at"   => date("Y-m-d H:m:s"),
            "url"          => "https://falabella.scene7.com/is/image/FalabellaCO/881872009_1?wid=1500&hei=1500&qlt=70",
            "productos_id" => $cubre->id
        ]);
        foto::create([
            "created_at"   => date("Y-m-d H:m:s"),
            "updated_at"   => date("Y-m-d H:m:s"),
            "url"          => "https://falabella.scene7.com/is/image/FalabellaCO/881872009_2?wid=1500&hei=1500&qlt=70",
            "productos_id" => $cubre->id
        ]);
        foto::create([
            "created_at"   => date("Y-m-d H:m:s"),
            "updated_at"   => date("Y-m-d H:m:s"),
            "url"          => "https://falabella.scene7.com/is/image/FalabellaCO/881872009_2?wid=1500&hei=1500&qlt=70",
            "productos_id" => $cubre->id
        ]);

        foto::create([
            "created_at"   => date("Y-m-d H:m:s"),
            "updated_at"   => date("Y-m-d H:m:s"),
            "url"          => "https://falabella.scene7.com/is/image/FalabellaCO/881872009_3?wid=1500&hei=1500&qlt=70",
            "productos_id" => $cubre->id
        ]);
        foto::create([
            "created_at"   => date("Y-m-d H:m:s"),
            "updated_at"   => date("Y-m-d H:m:s"),
            "url"          => "https://falabella.scene7.com/is/image/FalabellaCO/881872009_4?wid=1500&hei=1500&qlt=70",
            "productos_id" => $cubre->id
        ]);
        foto::create([
            "created_at"   => date("Y-m-d H:m:s"),
            "updated_at"   => date("Y-m-d H:m:s"),
            "url"          => "https://falabella.scene7.com/is/image/FalabellaCO/881872009_5?wid=1500&hei=1500&qlt=70",
            "productos_id" => $cubre->id
        ]);
        foto::create([
            "created_at"   => date("Y-m-d H:m:s"),
            "updated_at"   => date("Y-m-d H:m:s"),
            "url"          => "https://falabella.scene7.com/is/image/FalabellaCO/3294118_1?wid=1500&hei=1500&qlt=70",
            "productos_id" => $relojMujer->id
        ]);
        foto::create([
            "created_at"   => date("Y-m-d H:m:s"),
            "updated_at"   => date("Y-m-d H:m:s"),
            "url"          => "https://falabella.scene7.com/is/image/FalabellaCO/3294118_2?wid=1500&hei=1500&qlt=70",
            "productos_id" => $relojMujer->id
        ]);
        foto::create([
            "created_at"   => date("Y-m-d H:m:s"),
            "updated_at"   => date("Y-m-d H:m:s"),
            "url"          => "https://falabella.scene7.com/is/image/FalabellaCO/3294118_3?wid=1500&hei=1500&qlt=70",
            "productos_id" => $relojMujer->id
        ]);
        foto::create([
            "created_at"   => date("Y-m-d H:m:s"),
            "updated_at"   => date("Y-m-d H:m:s"),
            "url"          => "https://fitshop.com.co//wp-content/uploads/2020/08/20566_Banda_elasticas_Tonificacion_cerrada_gym_-gimnasio_combo.jpg.jpg",
            "productos_id" => $Bandas->id
        ]);
        foto::create([
            "created_at"   => date("Y-m-d H:m:s"),
            "updated_at"   => date("Y-m-d H:m:s"),
            "url"          => "https://exitocol.vtexassets.com/arquivos/ids/262811-800-auto?width=800&height=auto&aspect=true",
            "productos_id" => $Bandas->id
        ]);
        foto::create([
            "created_at"   => date("Y-m-d H:m:s"),
            "updated_at"   => date("Y-m-d H:m:s"),
            "url"          => "https://falabella.scene7.com/is/image/FalabellaCO/3055223_1?wid=800&hei=800&qlt=70",
            "productos_id" => $Bandas->id
        ]);

        foto::create([
            "created_at"   => date("Y-m-d H:m:s"),
            "updated_at"   => date("Y-m-d H:m:s"),
            "url"          => "https://falabella.scene7.com/is/image/FalabellaCO/5688285_1?wid=1500&hei=1500&qlt=70",
            "productos_id" => $Cama->id
        ]);

        foto::create([
            "created_at" => date("Y-m-d H:m:s"),
            "updated_at" => date("Y-m-d H:m:s"),
            "url"        => "https://falabella.scene7.com/is/image/FalabellaCO/5688285_2?wid=1500&hei=1500&qlt=70",
            "productos_id" => $Cama->id
        ]);
        
        foto::create([
            "created_at" => date("Y-m-d H:m:s"),
            "updated_at" => date("Y-m-d H:m:s"),
            "url"        => "https://falabella.scene7.com/is/image/FalabellaCO/5688285_3?wid=1500&hei=1500&qlt=70",
            "productos_id" => $Cama->id
        ]);

    }
}