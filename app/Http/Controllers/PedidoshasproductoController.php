<?php

namespace App\Http\Controllers;

use App\Models\pedidoshasproducto;
use App\Models\producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PedidoshasproductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $user= Auth::user();
        
        return view('components/su_pedido.index', ['user' => $user, "pedido" => session()->get('carrito.productos'), "id" => $request->id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productos = session()->get('carrito.productos');
        
        $ingreso= new pedidoshasproducto;
        foreach($productos as $producto){
            $ingreso->cantidad = $producto["cantidad"];
            $ingreso->productos_id = $producto["producto"]->id;
            $ingreso->pedidos_id = $request->pedido_id;
        }

        $ingreso->save();

        $this->destroy($request);
        
        
        return redirect()->route("producto.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pedidoshasproducto  $pedidoshasproducto
     * @return \Illuminate\Http\Response
     */
    public function show(pedidoshasproducto $pedidoshasproducto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pedidoshasproducto  $pedidoshasproducto
     * @return \Illuminate\Http\Response
     */
    public function edit(pedidoshasproducto $pedidoshasproducto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pedidoshasproducto  $pedidoshasproducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pedidoshasproducto $pedidoshasproducto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pedidoshasproducto  $pedidoshasproducto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $actual = $request->session()->get('carrito.productos');
        foreach ($actual as $producto) {

        $ProductoEnCarrito = producto::find($producto["producto"]->id);
        
            if($producto["producto"]->id == $ProductoEnCarrito->id){
                unset($producto["producto"]);
                session()->flash('status',"Tu pedido ya se ha tomado, muchas gracias por usar nuestra empresa, en los próximos días recibiras tu pedido, que tengas buen día");
            }
        }
     
        $request->session()->put('carrito.productos', $actual);
        
            
    }
}
