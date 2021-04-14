<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('titulo')</title>

    </head>
    <body >

        <nav>
            <ul>
                <li ><a href="/">Home</a></li>
                <li><a  href="/acerca">Acerca de </a></li>
                <li ><a href="/portafolio">Portafolio</a></li>
                <li ><a href="/contacto">Contacto</a></li>

            </ul>
        </nav>
          @yield('contenido')
    </body>
</html>
