@extends("layouts.default")
@section("content")

<div class="container">
<h1>¡Gracias por su compra!</h1>
<h5>Has adquirido los siguientes productos</h5>
</div>

<div class="row">
    <div class="col-lg-8 mb-6 mb-lg-8">
        <div class="table-responsive mb-4">

            <table class="table">
                <thead class="bg-light">
                    <tr>
                        <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Producto</strong></th>
                        <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Precio</strong></th>
                        <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Cantidad</strong></th>
                        <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Total</strong></th>
                        <th class="border-0" scope="col"> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $total = 0 ?>

                    @foreach ($pedido as $producto)

                    <tr>
                        <th class="pl-0 border-0" scope="row">
                            <div class="media align-items-center"><a class="reset-anchor d-block animsition-link" href="detail.html">
                                    <img src="{{$producto["producto"]->foto[0]->url}}" alt="..." width="70" /></a>
                                <div class="media-body ml-3"><strong class="h6">
                                        <a class="reset-anchor animsition-link" href="detail.html">{{$producto["producto"]->nombre}}</a></strong>
                                </div>
                            </div>
                        </th>
                        <td class="align-middle border-0">
                            <p class="mb-0 small">{{$producto["producto"]->precio}}</p>
                        </td>
                        <td class="align-middle border-0">
                            <p class="mb-0 small">{{$producto["cantidad"]}}</p>

                        </td>
                        <td class="align-middle border-0">
                            <p class="mb-0 small">{{$producto["cantidad"] * $producto["producto"]->precio}}</p>
                        </td>


                    </tr>
                    <?php $total += $producto["producto"]->precio * $producto["cantidad"]; ?>
                    @endforeach

                    
                </tbody>
            </table>
            <form method="POST" action="{{route('su_pedido.store')}}">
            @csrf
            <div class="bg-light px-4 py-3">
                <div class="row align-items-center text-center">
                  <div class="col-md-6 text-md-right">
                    <input type="hidden" name="pedido_id" value="{{$id}}"  />
                    <input class="btn btn-outline-dark btn-sm fas fa-long-arrow-alt-right ml-2" type="submit" value="Continuar"/>
                </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@stop