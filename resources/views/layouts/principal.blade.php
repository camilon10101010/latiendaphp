<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('materialize/css/materialize.css') }}">
</head>
<body>
    <nav>
        <div class="nav-wrapper  cyan accent-4">
            <a href="#" class="brand-logo">LaTiendaPHP</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="badges.html">Productos</a></li>
                <li><a href="collapsible.html">Pedidos</a></li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        @yield('contenido')
    </div>
    
    
    <script src="{{asset('materialize/js/materialize.js')}}"></script>
    <script >
        document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('select');
                var instances = M.FormSelect.init(elems, []);
        });
    </script>
</body>
</html>