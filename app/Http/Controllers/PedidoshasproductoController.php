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
    public function index()
    {
        $user= Auth::user();
        $pedido = session()->get('carrito.productos');
        return view('components/su_pedido.index', compact('pedido'), ['user' => $user]);
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
        $pedido = $request->pedido_id;
        $ingreso= new pedidoshasproducto;
        foreach($productos as $producto){
            $ingreso->cantidad = $producto["cantidad"];
            $ingreso->productos_id = $producto["producto"]->id;
            $ingreso->pedidos_id = 10;
        }
        session()->flash('status',"Tu pedido ya se ha tomado, muchas gracias por usar nuestra empresa, en los próximos días recibiras tu pedido, que tengas buen día");
        return redirect()->route("su_pedido.destroy");
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
        $ProductoEnCarrito = producto::find($request->producto);

        $actual = $request->session()->get('carrito.productos');

        $eliminar = $this->indice($actual, $ProductoEnCarrito);

        if ($eliminar != -1) {
            
            if($actual[$eliminar]["productos"]->id = $ProductoEnCarrito->id){
                unset($actual[$eliminar]);
                $request->session()->put('carrito.productos', $actual);
                session()->flash('status',"Tu pedido ya se ha tomado, muchas gracias por usar nuestra empresa, en los próximos días recibiras tu pedido, que tengas buen día");
                return redirect()->route('producto.index');
            }
        }
    }
}
