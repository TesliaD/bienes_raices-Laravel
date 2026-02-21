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

                    <a href="{{ route('anuncio') }}" class="boton-amarillo-block">
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

                    <a href="{{ route('anuncio') }}" class="boton-amarillo-block">
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

                    <a href="{{ route('anuncio') }}" class="boton-amarillo-block">
                        Ver propiedad
                    </a>
                </div><!--.contenido-anuncio-->
            </div><!--anuncio-->

            <div class="anuncio">
                <picture>
                    <source srcset="{{ asset('img/anuncio4.jpg') }}" type="image/jpeg">
                    <img loading="lazy" src="{{ asset('img/anuncio4.jpg') }}" alt="anuncio">
                </picture>

                <div class="contenido-anuncio"> <!--Anuncio 4-->
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

                    <a href="{{ route('anuncio') }}" class="boton-amarillo-block">
                        Ver propiedad
                    </a>
                </div><!--.contenido-anuncio-->
            </div><!--anuncio-->

            <div class="anuncio">
                <picture>
                    <source srcset="{{ asset('img/anuncio5.jpg') }}" type="image/jpeg">
                    <img loading="lazy" src="{{ asset('img/anuncio5.jpg') }}" alt="anuncio">
                </picture>

                <div class="contenido-anuncio"> <!--Anuncio 5-->
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

                    <a href="{{ route('anuncio') }}" class="boton-amarillo-block">
                        Ver propiedad
                    </a>
                </div><!--.contenido-anuncio-->
            </div><!--anuncio-->

            <div class="anuncio">
                <picture>
                    <source srcset="{{ asset('img/anuncio6.jpg') }}" type="image/jpeg">
                    <img loading="lazy" src="{{ asset('img/anuncio6.jpg') }}" alt="anuncio">
                </picture>

                <div class="contenido-anuncio"> <!--Anuncio 6-->
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

                    <a href="{{ route('anuncio') }}" class="boton-amarillo-block">
                        Ver propiedad
                    </a>
                </div><!--.contenido-anuncio-->
            </div><!--anuncio-->
            
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
