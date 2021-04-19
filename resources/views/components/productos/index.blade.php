@extends("layouts.default")
@section("content")

<!-- ========================= SECTION FEATURE ========================= -->
<section class="section-content padding-y-sm">
  <div class="container">
    <article class="card card-body">
      <div class="row">
        <div class="col-md-4">
          <figure class="item-feature">
            <span class="text-primary"><i class="fa fa-2x fa-truck"></i></span>
            <figcaption class="pt-3">
              <h5 class="title">Entrega Rapida</h5>
              <p>Por medio de nuestra empresa te ayudamos a que la entrega te llegue lo más pronto posible </p>
            </figcaption>
          </figure> <!-- iconbox // -->
        </div><!-- col // -->
        <div class="col-md-4">
          <figure class="item-feature">
            <span class="text-primary"><i class="fa fa-2x fa-landmark"></i></span>
            <figcaption class="pt-3">
              <h5 class="title">Calidad Certificada</h5>
              <p>Te brindamos los mejores productos a mejor precio
              </p>
            </figcaption>
          </figure> <!-- iconbox // -->
        </div><!-- col // -->
        <div class="col-md-4">
          <figure class="item-feature">
            <span class="text-primary"><i class="fa fa-2x fa-lock"></i></span>
            <figcaption class="pt-3">
              <h5 class="title">Alta seguridad</h5>
              <p>Te brindamos nuestra mejor seguridad para que se hagan las comprar que desees sin ningun tipo de problema
              </p>
            </figcaption>
          </figure> <!-- iconbox // -->
        </div> <!-- col // -->
      </div>
    </article>
  </div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content">
  <div class="container">
    <header class="section-heading">
      <h3 class="section-title">Nuestros Productos</h3>
    </header><!-- sect-heading -->

    <div class="row">
      @foreach ($productos as $producto)
      <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="product text-center">
          <div class="position-relative mb-3">
            <div class="badge text-white badge-"></div><a class="d-block" href="{{route('producto.show', ['producto' => $producto->id])}}"><img class="img-fluid w-100" src="{{$producto->foto[0]->url}}" alt="..."></a>
            <div class="product-overlay">
              <ul class="mb-0 list-inline">
                <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="{{route('producto.show', ['producto' => $producto->id])}}">Add to cart</a></li>
                <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="{{route('producto.show', ['producto' => $producto->id])}}"><i class="fas fa-expand"></i></a></li>
              </ul>
            </div>
          </div>
          <h6> <a class="reset-anchor" href="detail.html">{{$producto->nombre}}</a></h6>
          <p class="small text-muted">{{$producto->precio}}</p>
        </div>
      </div>
      @endforeach
    </div>



    </body>

    </html>
    @stop