<?php

namespace App\Http\Controllers;

use App\Models\producto; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{

    /* middleware
        $product = $request;

        if ($product->available == false){
            $request->session()->flash("status","El producto no está disponible");
            return redirect()->route("product.index");
        }
    
    */


    //Se puede hacer el uso del pedidoshasproducto para guardar la información del carrito y evitar crear un nuevo controlador
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user= Auth::user();

        if (session()->has('carrito') == false) {
            
            session()->flash('status',"No cuentas con productos en este momento, aun tenemos muchos productos para ti");
            return redirect()->route('producto.index');
        } else {

            $productos = session()->get('carrito.productos');

            if ($productos == false){
                session()->flash('status',"No cuentas con productos en este momento, aun tenemos muchos productos para ti");
                return redirect()->route('producto.index');
                
            }else{
                return view('components/carrito.index', compact('productos'), ['user' => $user]);
            }
        }

        
    }

    public function indice($actual, $seleccionado)
    {
        $encontrado = -1;
        foreach ($actual as $llave => $producto) {
            if ($producto['producto']->id ==  $seleccionado->id) {
                $encontrado = $llave;
                break;
            }
        }

        return $encontrado;
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
        $seleccion = producto::find($request->producto);
        $cantidad = $request->cantidad;
        
        if ($request->session()->has('carrito') == false) {
            $request->session()->put('carrito', ['productos' => []]);
        }
        
        $actual = $request->session()->get('carrito.productos');

        $doble = $this->indice($actual, $seleccion);

        if ($doble != -1) {
            $actual[$doble]['cantidad'] += $cantidad;
            $request->session()->put('carrito.productos', $actual);
            $request->session()->flash('status',"Se ha actualizado el carrito de compra");
        } else {
            $request->session()->push('carrito.productos', ['producto' => $seleccion, 'cantidad' => $cantidad]);
            $request->session()->flash('status',"Se a agregado un nuevo producto al carrito");
        }

        return redirect()->route('producto.index');
        //$request->session()->get("carrito");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(producto $producto)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        
        $seleccion = producto::find($request->producto);
        $cantidad = $request->cantidad;

        $actual = $request->session()->get('carrito.productos');

        $eliminar = $this->indice($actual, $seleccion);

        if ($eliminar != -1) {
            $actual[$eliminar]['cantidad'] -= $cantidad;
            if($actual[$eliminar]['cantidad'] <= 0){
                unset($actual[$eliminar]);
                $request->session()->put('carrito.productos', $actual);
                $request->session()->flash('status',"Se ha eliminado de forma correcta el producto del carrito");
                return redirect()->route('producto.index');
            }else{
                $request->session()->put('carrito.productos', $actual);
                $request->session()->flash('status',"Se actualizo el carrito, recuerda que se elimina de a un producto");
                return redirect()->route('producto.index');
            }
        }
    }
}
