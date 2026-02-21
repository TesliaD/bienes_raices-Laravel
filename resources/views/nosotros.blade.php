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
    <!--HEADER-->
    <header class="header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="/img/logo.svg" alt="Logotipo de Bienes Raices">
                </a>

                <!--Barra de Navegación y rutas header-->
                <div class="mobile-menu"> <!--Menu de Barras-->
                    <img src="{{ asset('img/barras.svg') }}" alt="icono menu responsive">
                </div>
                
                <div class="derecha">
                    <img class="dark-mode-boton" src="{{ asset('img/dark-mode.svg') }}" alt="Dark Mode"> <!--Boton de Dark Mode-->
                    <nav class="navegacion">
                        <a href="{{ route('nosotros') }}">Nosotros</a>
                        <a href="{{ route('anuncios') }}">Anuncios</a>
                        <a href="{{ route('blog') }}">Blog</a>
                        <a href="{{ route('contacto') }}">Contacto</a>
                    </nav>
                </div>
            </div> <!--.barra-->
        </div>
    </header>
    
    <main class="contenedor seccion">
        <h1>Conoce Sobre Nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen"> <!--Imagen de Nosotros-->
                <picture>
                    <source srcset="{{ asset('img/nosotros.jpg') }}" type="image/jpeg">
                    <img loading="lazy" src="{{ asset('img/nosotros.jpg') }}" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencia
                </blockquote>
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

        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <!--ICONO 1-->
            <div class="icono">
                <img src="{{ asset('img/icono1.svg') }}" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Tenetur beatae corporis repellendus? Nobis doloribus soluta est quasi, 
                    incidunt magni eveniet aliquid, totam, optio illum adipisci. 
                    Assumenda laboriosam cupiditate eum libero?
                </p>
            </div>

            <!--ICONO 2-->
            <div class="icono">
                <img src="{{ asset('img/icono2.svg') }}" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Tenetur beatae corporis repellendus? Nobis doloribus soluta est quasi, 
                    incidunt magni eveniet aliquid, totam, optio illum adipisci. 
                    Assumenda laboriosam cupiditate eum libero?
                </p>
            </div>
            
            <!--ICONO 3-->
            <div class="icono">
                <img src="{{ asset('img/icono3.svg') }}" alt="Icono Tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Tenetur beatae corporis repellendus? Nobis doloribus soluta est quasi, 
                    incidunt magni eveniet aliquid, totam, optio illum adipisci. 
                    Assumenda laboriosam cupiditate eum libero?
                </p>
            </div>
        </div>
    </section>

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
    
    <script src="{{ asset('js/bundle.min.js') }}" defer></script>

</body>
</html>
