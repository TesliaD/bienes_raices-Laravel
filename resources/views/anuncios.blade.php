<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/bundle.min.js') }}" defer></script>

</head>
<body>
    <header class="header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="/img/logo.svg" alt="Logotipo de Bienes Raices">
                </a>
                <nav class="navegacion">
                    <a href="{{ route('nosotros') }}">Nosotros</a>
                    <a href="{{ route('anuncios') }}">Anuncios</a>
                    <a href="{{ route('blog') }}">Blog</a>
                    <a href="{{ route('contacto') }}">Contacto</a>
                </nav>
            </div> <!--.barra-->
            <h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>
        </div>
    </header>
    
    <main class="contenerdor seccion">
        <h1>Anuncios</h1>
    </main>

    <footer class="footer seccion">
        <div class="contenedor contenerdor-footer">
               <nav class="navegacion">
                    <a href="{{ route('nosotros') }}">Nosotros</a>
                    <a href="anuncios.html">Anuncios</a>
                    <a href="blog.html">Blog</a>
                    <a href="contacto.html">Contacto</a>
                </nav>
        </div>
        <p>Todos los derechos reservados 2021 &copy;</p>
    </footer>
    
    <script src="{{ asset('js/bundle.min.js') }}" defer></script>

</body>
</html>
