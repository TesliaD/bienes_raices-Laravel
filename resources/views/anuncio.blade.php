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
        </div>
    </header>
    
    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>

        <picture>
            <source srcset="/img/destacada.jpg" type="image/jpg">
            <img src="/img/destacada.jpg" alt="imagen de la propiedad">    
        </picture>
        
        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">      
                <li>
                    <img loading="lazy" src="img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>

                <li>
                    <img loading="lazy" src="img/icono_estacionamiento.svg" alt="icono wc">
                    <p>3</p>
                </li>

                <li>
                    <img loading="lazy" src="img/icono_dormitorio.svg" alt="icono wc">
                    <p>3</p>
                </li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Culpa, iusto. Odit praesentium tempora, expedita eos tempore blanditiis itaque eveniet. 
                    Delectus a perspiciatis ad cum consequuntur ut similique consequatur ab in.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Ipsam, quidem! Eveniet quidem eligendi doloribus distinctio, 
                    fuga porro aut omnis minus modi aliquid sequi id inventore sed provident, 
                    commodi aspernatur vitae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Culpa, iusto. 
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Culpa, iusto. Odit praesentium tempora, expedita eos tempore blanditiis itaque eveniet. 
                    Delectus a perspiciatis ad cum consequuntur ut similique consequatur ab in.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Ipsam, quidem! Eveniet quidem eligendi doloribus distinctio, 
                    fuga porro aut omnis minus modi aliquid sequi id inventore sed provident, 
                    commodi aspernatur vitae.
                </p>
        </div>
    </main>

    <footer class="footer seccion">
        <div class="contenedor contenerdor-footer">
               <nav class="navegacion">
                    <a href="{{ route('nosotros') }}">Nosotros</a>
                    <a href="{{ route('anuncios') }}">Anuncios</a>
                    <a href="{{ route('blog') }}">Blog</a>
                    <a href="{{ route('contacto') }}">Contacto</a>
                </nav>
        </div>
        <p class="copyright">Todos los derechos reservados 2021 &copy;</p>
    </footer>
    
</body>
</html>
