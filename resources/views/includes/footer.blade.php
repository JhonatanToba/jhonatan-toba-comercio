<div class="container">
   <!-- ========================= FOOTER ========================= -->
<footer class="section-footer border-top bg">
  <div class="container">
    <section class="footer-top  padding-y">
      <div class="row">
        <aside class="col-md col-6">
          <h6 class="title">Nuestros Productos</h6>
          <ul class="list-unstyled">
            <li> <a href="{{route("producto.index")}}">Todos</a></li>
          </ul>
        </aside>
        <aside class="col-md col-6">
          <h6 class="title">Compañia</h6>
          <ul class="list-unstyled">
            <li> <a href="#">Acerca de nosotros</a></li>
            <li> <a href="#">Documentos Legales</a></li>
            <li> <a href="#">Encuentra una tienda</a></li>
            <li> <a href="#">Terminos y condiciones</a></li>
          </ul>
        </aside>
        <aside class="col-md col-6">
          <h6 class="title">Ayuda</h6>
          <ul class="list-unstyled">
            <li> <a href="#">Contactanos</a></li>
            <li> <a href="#">Reembolso de dinero</a></li>
            <li> <a href="#">Estado de su pedido</a></li>
            <li> <a href="#">Datos de envío</a></li>
          </ul>
        </aside>
        <aside class="col-md col-6">
          <h6 class="title">Mi cuenta</h6>
          <ul class="list-unstyled">
            <li> <a href="#">Login de usuario</a></li>
            <li> <a href="#">Registro de usuario</a></li>
            <li> <a href="#">Configuración de cuenta</a></li>
            <li> <a href="#">Mis ordenes</a></li>
          </ul>
        </aside>
        <aside class="col-md">
          <h6 class="title">Redes Sociales</h6>
          <ul class="list-unstyled">
            <li><a href="https://www.facebook.com"> <i class="fab fa-facebook"></i> Facebook </a></li>
            <li><a href="https://www.twitter.com"> <i class="fab fa-twitter"></i> Twitter </a></li>
            <li><a href="https://www.instagram.com"> <i class="fab fa-instagram"></i> Instagram </a></li>
            <li><a href="https://www.youtube.com"> <i class="fab fa-youtube"></i> Youtube </a></li>
          </ul>
        </aside>
      </div> <!-- row.// -->
    </section>  <!-- footer-top.// -->
    <section class="footer-bottom row">
      <div class="col-md-2">
        <p class="text-muted">2021 Mi comercio </p>
      </div>
      <div class="col-md-8 text-md-center">
        <span  class="px-2">micomercio@micomercio.com</span>
        <span  class="px-2">+57 300 000 0000</span>
        <span  class="px-2">Bogotá, Colombia</span>
      </div>
      <div class="col-md-2 text-md-right text-muted">
        <i class="fab fa-lg fa-cc-visa"></i> 
        <i class="fab fa-lg fa-cc-paypal"></i> 
        <i class="fab fa-lg fa-cc-mastercard"></i>
      </div>
    </section>
  </div><!-- //container -->
</footer>
</div>

<script src="{{asset("vendor/jquery/jquery.min.js")}}"></script>
      <script src="{{asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
      <script src="{{asset("vendor/lightbox2/js/lightbox.min.js")}}"></script>
      <script src="{{asset("vendor/nouislider/nouislider.min.js")}}"></script>
      <script src="{{asset("vendor/bootstrap-select/js/bootstrap-select.min.js")}}"></script>
      <script src="{{asset("vendor/owl.carousel2/owl.carousel.min.js")}}"></script>
      <script src="{{asset("vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js")}}"></script>
      <script src="{{asset("js/front.js")}}"></script>
      <script>
        // ------------------------------------------------------- //
        //   Inject SVG Sprite - 
        //   see more here 
        //   https://css-tricks.com/ajaxing-svg-sprite/
        // ------------------------------------------------------ //
        function injectSvgSprite(path) {
        
            var ajax = new XMLHttpRequest();
            ajax.open("GET", path, true);
            ajax.send();
            ajax.onload = function(e) {
            var div = document.createElement("div");
            div.className = 'd-none';
            div.innerHTML = ajax.responseText;
            document.body.insertBefore(div, document.body.childNodes[0]);
            }
        }
        // this is set to BootstrapTemple website as you cannot 
        // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
        // while using file:// protocol
        // pls don't forget to change to your domain :)
        injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
        
      </script>
      <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">