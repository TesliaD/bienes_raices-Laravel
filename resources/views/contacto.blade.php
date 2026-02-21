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
        <h1>Contáctanos</h1>
        <picture>
             <source srcset="{{ asset('img/destacada3.jpg') }}" type="image/jpeg">
             <img loading="lazy" src="img/destacada3.jpg" alt="Imagen Contacto">
        </picture>

        <h2>LLene el formulario de Contacto</h2> <!--Primera formulario(Información Personal)-->

        <form class="formulario"> 
            <fieldset> <!--Primer Formulario-->
                <legend>Información Personal</legend>

                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tú Nombre" id="nombre">
            
                <label for="email">E-mail</label>
                <input type="email" placeholder="Tú E-mail" id="email">

                <label for="telefono">Teléfono</label>
                <input type="tel" placeholder="Tú Teléfono" id="telefono">

                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje"></textarea>
            </fieldset>

            <fieldset class="formulario"> <!--Segundo Formulario-->
                <legend>Información sobre la propiedad</legend>

                <label for="opciones">Vende o Compra</label>
                <select id="opciones">
                    <option value="" disabled selected>--Seleccione--</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>

                <label for="presupuesto">Cantidad:</label>
                <input type="number" placeholder="Tú Precio o Presupuesto" id="Presupuesto">
            </fieldset>

            <fieldset><!--Tercer Formulario-->
                <legend>Información sobre la propiedad</legend>
                <p>Como desea ser contactado</p>

                <div class="forma'contacto">
                    <label for="contactar-telefono">Teléfono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

                    
                    <label for="contactar-email">E-Mail</label>
                    <input name="contacto" type="radio" value="email" id="contactar-email">
                </div>

                <p>Si eligió teléfono, elija la fecha y la hora</p>

                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha">

                <label for="hora">Hora:</label>
                <input type="time" id="hora" min="9:00" max="18:00">
            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">

        </form>
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
