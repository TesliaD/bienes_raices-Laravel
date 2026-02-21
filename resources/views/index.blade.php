<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body>
    <header class="header inicio">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="{{ asset('img/logo.svg') }}" alt="Logo">
                </a>

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
            <h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>
        </div>
    </header>
    
    <main class="contenedor-nosotros">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <!--ICONO 1-->
            <div class="icono">
                <img class="icono" src="{{ asset('img/icono1.svg') }}" alt="Icono seguridad" loading="lazy">
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
                            <img class="icono" loading="lazy" src="img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        
                        <li>
                            <img class="icono" loading="lazy" src="img/icono_estacionamiento.svg" alt="icono wc">
                            <p>3</p>
                        </li>

                        <li>
                            <img class="icono" loading="lazy" src="img/icono_dormitorio.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                    </ul>

                    <a href="{{ route('anuncios') }}" class="boton-amarillo-block">
                        Ver propiedad
                    </a>
                </div><!--.contenido-anuncio-->
            </div><!--anuncio-->

                <div class="anuncio">
                <picture>
                    <source srcset="{{ asset('img/anuncio2.jpg') }}" type="image/jpeg">
                    <img loading="lazy" src="{{ asset('img/anuncio2.jpg') }}" alt="anuncio">
                </picture>

                <div class="contenido-anuncio"> <!--Anuncio 2-->
                    <h3>Casa de Lujo en el lago</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente</p>
                    <p class="precio">$3,0000,000</p>

                    <ul class="iconos-caracteristicas">
                        
                        <li>
                            <img class="icono" loading="lazy" src="img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        
                        <li>
                            <img class="icono" loading="lazy" src="img/icono_estacionamiento.svg" alt="icono wc">
                            <p>3</p>
                        </li>

                        <li>
                            <img class="icono" loading="lazy" src="img/icono_dormitorio.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                    </ul>

                    <a href="{{ route('anuncios') }}" class="boton-amarillo-block">
                        Ver propiedad
                    </a>
                </div><!--.contenido-anuncio-->
            </div><!--anuncio-->
            
            <div class="anuncio">
                <picture>
                    <source srcset="{{ asset('img/anuncio3.jpg') }}" type="image/jpeg">
                    <img loading="lazy" src="{{ asset('img/anuncio3.jpg') }}" alt="anuncio">
                </picture>

                <div class="contenido-anuncio"> <!--Anuncio 3-->
                    <h3>Casa de Lujo en el lago</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente</p>
                    <p class="precio">$3,0000,000</p>

                    <ul class="iconos-caracteristicas">
                        
                        <li>
                            <img class="icono" loading="lazy" src="img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        
                        <li>
                            <img class="icono" loading="lazy" src="img/icono_estacionamiento.svg" alt="icono wc">
                            <p>3</p>
                        </li>

                        <li>
                            <img class="icono" loading="lazy" src="img/icono_dormitorio.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                    </ul>

                    <a href="{{ route('anuncios') }}" class="boton-amarillo-block">
                        Ver propiedad
                    </a>
                </div><!--.contenido-anuncio-->
            </div><!--anuncio-->

        </div><!--.contenedor-anuncios-->

        <div class="alinear-derecha">
            <a href="{{ route('anuncios') }}" class="boton-verde">Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Lena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
        <a href="{{ route('contacto') }}" class="boton-amarillo">Contactános</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="{{ asset('img/blog1.jpg') }}" type="image/jpeg">
                        <img loading="lazy" src="img/blog1.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="{{ route('entrada') }}">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito en el: <span>20/10/2021</span> por: <span>Admin</span></p>
                        <p>
                            Consejos para contruir una terraza en el techo de tu casa con los mejores
                            materiales y ahorrando dunero
                        </p>
                    </a>
                </div>   
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="{{ asset('img/blog2.jpg') }}" type="image/jpeg">
                        <img loading="lazy" src="img/blog2.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="{{ route('entrada') }}">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito en el: <span>20/10/2021</span> por: <span>Admin</span></p>
                        <p>
                            Consejos para contruir una terraza en el techo de tu casa con los mejores
                            materiales y ahorrando dinero
                        </p>
                    </a>
                </div>                
            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                        El personal se comportó de una excelente forma, muy buena atención y la casa que me 
                        ofrecieron cumple con todas mis expectativas.
                </blockquote>
                <p>Ian Felix</p>
            </div>
        </section>
    </div>

    <footer class="footer seccion">
        <div class="contenedor  contenido-footer">
               <nav class="navegacion-footer">
                    <a href="{{ route('nosotros') }}">Nosotros</a>
                    <a href="{{ route('anuncios') }}">Anuncios</a>
                    <a href="{{ route('blog') }}">Blog</a>
                    <a href="{{ route('contacto') }}">Contacto</a>
                </nav>
        </div>
        <p class="copyright">Todos los derechos reservados 2021 &copy;</p>
    </footer>
    
    <!--<script src="{{ asset('js/bundle.min.js') }}" defer></script>-->

</body>
</html>
