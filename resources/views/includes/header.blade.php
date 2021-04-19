<header>
<nav class="navbar navbar-dark navbar-expand p-0 bg-primary">
<div class="container">
    <ul class="navbar-nav d-none d-md-flex mr-auto">
    <li class="nav-item"><a class="nav-link" href="{{route("producto.index")}}">Página Principal</a></li>
    <li class="nav-item"><a class="nav-link" href="{{route('pedido.index')}}">Checkout</a></li>
    </ul>
    <ul class="navbar-nav">
    <li  class="nav-item"><a class="nav-link"> Call: +57 300 000 0000 </a></li>
  
</div> <!-- container //  -->
</nav> <!-- header-top-light.// -->
<section class="header-main border-bottom">
  <div class="container">
<div class="row align-items-center">
  <div class="col-lg-2 col-6">
    <a href="{{route("producto.index")}}" class="brand-wrap">
      Mi comercio
    </a> <!-- brand-wrap.// -->
  </div>
  <div class="col-lg-6 col-12 col-sm-12">
    <form action="{{route("producto.index")}}" class="search">
      <div class="input-group w-100">
          <input type="text" class="form-control" placeholder="Search">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
    </form> <!-- search-wrap .end// -->
  </div> <!-- col.// -->
  <div class="col-lg-4 col-sm-6 col-12">
    <div class="widgets-wrap float-md-right">
      <div class="widget-header  mr-3">
        <a href="{{route('carrito.index')}}" class="icon icon-sm rounded-circle border">
        <small class="text-gray">
        @if (session()->has('carrito.productos'))
          {{count(session()->get('carrito.productos'))}}
        @else 
          0
        @endif 
        </small> 
        <i class="fa fa-shopping-cart">
          
        </i></a>
        <span class="badge badge-pill badge-danger notify"></span>
      </div>
      <div>
        <div class="text">
          <span class="text-muted">¡Bienvenido!</span>
          <div> 
          @if(Auth::check() == false)
            <a href={{route("login")}}>Logueate</a> |  
            <a href="{{route("register")}}"> Registrate</a>
          @else
            <a href={{route("login")}}>Hola, {{$user->name}}</a>
          @endif
            
          </div>
        </div>
      </div>
    </div> <!-- widgets-wrap.// -->
  </div> <!-- col.// -->
</div> <!-- row.// -->
  </div> <!-- container.// -->
</section> <!-- header-main .// -->

