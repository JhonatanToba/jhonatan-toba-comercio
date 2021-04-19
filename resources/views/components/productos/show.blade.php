@extends("layouts.default")
@section("content")
<!--  Modal -->
<div class="modal fade" id="productView" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body p-0">
        <div class="row align-items-stretch">
          <div class="col-lg-6 p-lg-0"><a class="product-view d-block h-100 bg-cover bg-center" style="background: url(img/product-5.jpg)" href="img/product-5.jpg" data-lightbox="productview" title="Red digital smartwatch"></a><a class="d-none" href="img/product-5-alt-1.jpg" title="Red digital smartwatch" data-lightbox="productview"></a><a class="d-none" href="img/product-5-alt-2.jpg" title="Red digital smartwatch" data-lightbox="productview"></a></div>
          <div class="col-lg-6">
            <button class="close p-4" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <div class="p-5 my-md-4">
              <h2 class="h4">{{$producto->nombre}}</h2>
              <p class="text-muted">${{$producto->precio}}</p>
              <div class="row align-items-stretch mb-4">
                <div class="col-sm-7 pr-sm-0">
                  <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Cantidad</span>
                    <div class="quantity">
                      <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                      <input name="cantidad" class="form-control border-0 shadow-0 p-0" type="text" value="1">
                      <input name="producto" type="hidden" value={{$producto->id}}>
                      <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                    </div>
                  </div>
                </div>
                <div class="col-sm-5 pl-sm-0"><a class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" href="{{route('carrito.store')}}">Añadir al carro</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<section class="py-5">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-6">
        <!-- PRODUCT SLIDER-->
        <div class="row m-sm-0">
          <div class="col-sm-2 p-sm-0 order-2 order-sm-1 mt-2 mt-sm-0">
            <div class="owl-thumbs d-flex flex-row flex-sm-column" data-slider-id="1">
              @foreach ($producto->foto as $foto)
              <div class="owl-thumb-item flex-fill mb-2 mr-2 mr-sm-0">
                <img class="w-100" src="{{$foto->url}}" alt="...">
              </div>
              @endforeach

            </div>
          </div>
          <div class="col-sm-10 order-1 order-sm-2">
            <div class="owl-carousel product-slider" data-slider-id="1">

              @foreach ($producto->foto as $foto)
              <a class="d-block" href="img/product-detail-1.jpg" data-lightbox="product" title="Product item 1">
                <img class="img-fluid" src="{{$foto->url}}" alt="..."></a>
              @endforeach
            </div>


          </div>
        </div>
      </div>
      <!-- PRODUCT DETAILS-->
      <div class="col-lg-6">
        <h1>{{$producto->nombre}}</h1>
        <p class="text-muted lead">${{$producto->precio}}</p>
        @if($producto->activo == false)
        <p style="color: red;">El producto no se encuentra disponible</p>
        @else
        @if($producto->trending == true)
        <H4>El producto es un exito en ventas, no te pierdas esta oferta</H4>
        @endif
        <div>
          <form method="POST" class="row align-items-stretch mb-4" action="{{route('carrito.store')}}">
            @csrf
            <div class="col-sm-5 pr-sm-0">
              <div class="border d-flex align-items-center justify-content-between py-1 px-3 bg-white border-white">
                <span class="small text-uppercase text-gray mr-4 no-select">Cantidad</span>
                <div class="quantity">
                  <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                  <input name="cantidad" class="form-control border-0 shadow-0 p-0" value="1" />
                  <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                </div>
                <input name="producto" type="hidden" value="{{$producto->id}}" />
              </div>
            </div>
            <div class="col-sm-3 pl-sm-0">
              <input class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" value="Añadir al carro" type="submit" />
            </div>
          </form>
        </div><a class="btn btn-link text-dark p-0 mb-4" href="#"><i class="far fa-heart mr-2"></i>Add to wish list</a><br>
      </div>
    </div>
        @endif

        
    <!-- DETAILS TABS-->

    <!-- RELATED PRODUCTS-->

    <!-- PRODUCT-->

  </div>
  </div>
</section>
@stop