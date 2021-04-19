<!DOCTYPE html>
<html lang="en">
    <head>
        @include("includes.head")
    </head>
    <body>
        <header class="section-header">
            @include("includes.header")

            @if (session()->has('status') == true)
    
            <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">¡ATENCIÓN!</h1>
                <p class="lead">{{ session()->get('status')}}</p>
            </div>
            </div>
            @endif
        </header>
        <main>
            @yield("content")
        </main>
        <footer class="text-muted py-5">
            @include("includes.footer")
        </footer>
        <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js">
        </script>
    </body>
</html>