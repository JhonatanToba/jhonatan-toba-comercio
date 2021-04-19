<?php

namespace App\Http\Controllers;

use App\Models\pago;
use App\Models\pedido;
use App\Models\producto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check() == false){
            return redirect()->route('login');
        }

        if(session()->get('carrito.productos') == false){
            session()->flash('status',"No cuentas con productos en este momento, aun tenemos muchos productos para ti");
            return redirect()->route('producto.index');
        }

        $user= Auth::user();

        $pedido = session()->get('carrito.productos');

        return view('components/pedido.index', compact('pedido'), ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user= Auth::user();
        $usuario = User::where("name", $user->name)->first();
        
        $productos = session()->get('carrito.productos');
        
        $pago = pago::where("id", 1)->first();

        $pedido = New pedido;
        $pedido->fecha= now();
        $pedido->precio_total = $request->precio_total;
        $pedido->users_id = $usuario->id;
        $pedido->pagos_id = $pago->id;
        
        $pedido->save();
        $pedido = $pedido->id;

        return redirect()->route("su_pedido.index", compact("pedido") );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(pedido $pedido)
    {
        //
    }
}
