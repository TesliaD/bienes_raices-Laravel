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
        <h1>Nuestro Blog</h1>
        <article class="entrada-blog">
                    <div class="imagen">
                        <picture>
                            <source srcset="{{ asset('img/blog1.jpg') }}" type="image/jpeg"> <!--Imagen Blog 1-->
                            <img loading="lazy" src="img/blog1.jpg" alt="Texto Entrada Blog">
                        </picture>
                    </div>

                    <div class="texto-entrada">
                        <a href="{{ route('entrada') }}">
                            <h4>Terraza en el techo de tu casa</h4>
                            <p>Escrito en el: <span>20/10/2021</span>por: <span>Admin</span></p>
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
                            <source srcset="{{ asset('img/blog2.jpg') }}" type="image/jpeg"> <!--Imagen Blog 2-->
                            <img loading="lazy" src="img/blog2.jpg" alt="Texto Entrada Blog">
                        </picture>
                    </div>

                    <div class="texto-entrada">
                        <a href="{{ route('entrada') }}">
                            <h4>Terraza en el techo de tu casa</h4>
                            <p>Escrito en el: <span>20/10/2021</span>por: <span>Admin</span></p>
                            <p>
                                Consejos para contruir una terraza en el techo de tu casa con los mejores
                                materiales y ahorrando dinero
                            </p>
                        </a>
                    </div>                
            </article>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="{{ asset('img/blog3.jpg') }}" type="image/jpeg"><!--Imagen Blog 3-->
                        <img loading="lazy" src="img/blog3.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="{{ route('entrada') }}">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p>Escrito en el: <span>20/10/2021</span>por: <span>Admin</span></p>
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
                        <source srcset="{{ asset('img/blog4.jpg') }}" type="image/jpeg"><!--Imagen Blog 4-->
                        <img loading="lazy" src="img/blog4.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="{{ route('entrada') }}">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p>Escrito en el: <span>20/10/2021</span>por: <span>Admin</span></p>
                        <p>
                            Consejos para contruir una terraza en el techo de tu casa con los mejores
                            materiales y ahorrando dinero
                        </p>
                    </a>
                </div>                
            </article>
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
    
    <script src="{{ asset('js/bundle.min.js') }}" defer></script>

</body>
</html>
