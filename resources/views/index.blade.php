<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
</head>
<body>
    <header class="header inicio">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="{{ asset('img/logo.svg') }}" alt="Logo">
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
    
    <main class="contenedor seccion">
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
    </main>

    <!--Seccion de Casas y Departamentos en Venta-->
    <section class="seccion">
        <div class="contenedor"> <!--Todo esto esta dentro de la clase contenedor-->
            <h2>Casas y Departamentos en Venta</h2>
            <div class="contenedor-anuncios">
                <div class="anuncio">
                <picture>
                    <source srcset="{{ asset('img/anuncio1.webp') }}" type="image/webp">
                    <source srcset="{{ asset('img/anuncio1.jpg') }}" type="image/jpeg">
                    <img loading="lazy" src="{{ asset('img/anuncio1.jpg') }}" alt="anuncio">
                </picture>

                <div class="contenido-anuncio"> <!--Anuncio 1-->
                    <h3>Casa de Lujo en el lago</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente</p>
                    <p class="precio">$3,0000,000</p>

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

                    <a href="{{ route('anuncios') }}" class="boton boton-amarillo">
                        Ver propiedad
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer seccion">
        <div class="contenedor contenerdor-footer">
               <nav class="navegacion">
                    <a href="nosotros.html">Nosotros</a>
                    <a href="anuncios.html">Anuncios</a>
                    <a href="blog.html">Blog</a>
                    <a href="contacto.html">Contacto</a>
                </nav>
        </div>
        <p class="copyright">Todos los derechos reservados 2021 &copy;</p>
    </footer>
    
    <!--<script src="{{ asset('js/bundle.min.js') }}" defer></script>-->

</body>
</html>
