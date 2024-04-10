<?php include("../../templates/header.php"); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Krub:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="preload" href="css/style.css" as="style">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <h1 class="titulo">Juan Mancilla </h1>
    </header>

    <div class="nav-bg">
        <nav class="navegacion-principal contenedor">
            <a href="#">Inicio </a>
            <a href="#">Sobre nosotros </a>
            <a href="#">Clientes </a>
            <a href="#">Contacto </a>
        </nav>
    </div>

    <section class="hero">
        <div class="contenido-hero">
            <h2>Diseño y Desrrolllo Web</h2>
            <div class="ubicacion">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="88"
                    height="88" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffc107" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                </svg>
                <P>Veracruz, Xalapa</P>

            </div>

            

            <a class="boton" href="#">Contactar</a>

        </div>

    </section>

    <main class="contenedor sombra">
        <h2>Mis servicios</h2>
        <div class="servicios">
            <section class="servicio">
                <h3>Diseño Web</h3>
                <div class="iconos">
                    <!-- galleta -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-palette" width="44"
                        height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffc107" fill="none" g
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M12 21a9 9 0 0 1 0 -18c4.97 0 9 3.582 9 8c0 1.06 -.474 2.078 -1.318 2.828c-.844 .75 -1.989 1.172 -3.182 1.172h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25" />
                        <path d="M8.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                        <path d="M12.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                        <path d="M16.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                    </svg>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat maxime neque eligendi voluptatem
                </p>

            </section>

            <section class="servicio">
                <h3>Aplicaciones moviles</h3>
                <div class="iconos">
                    <!--androide-->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-android"
                        width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffc107" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 10l0 6" />
                        <path d="M20 10l0 6" />
                        <path d="M7 9h10v8a1 1 0 0 1 -1 1h-8a1 1 0 0 1 -1 -1v-8a5 5 0 0 1 10 0" />
                        <path d="M8 3l1 2" />
                        <path d="M16 3l-1 2" />
                        <path d="M9 18l0 3" />
                        <path d="M15 18l0 3" />
                    </svg>

                    <!--apple-->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-apple" width="44"
                        height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffc107" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M8.286 7.008c-3.216 0 -4.286 3.23 -4.286 5.92c0 3.229 2.143 8.072 4.286 8.072c1.165 -.05 1.799 -.538 3.214 -.538c1.406 0 1.607 .538 3.214 .538s4.286 -3.229 4.286 -5.381c-.03 -.011 -2.649 -.434 -2.679 -3.23c-.02 -2.335 2.589 -3.179 2.679 -3.228c-1.096 -1.606 -3.162 -2.113 -3.75 -2.153c-1.535 -.12 -3.032 1.077 -3.75 1.077c-.729 0 -2.036 -1.077 -3.214 -1.077z" />
                        <path d="M12 4a2 2 0 0 0 2 -2a2 2 0 0 0 -2 2" />
                    </svg>
                </div>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto enim dicta perferendis corporis
                </p>
            </section>

            <section class="servicio">
                <h3>E-comerce</h3>
                <div class="iconos">
                    <!--card-->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-credit-card" width="44"
                        height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffc107" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 5m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />
                        <path d="M3 10l18 0" />
                        <path d="M7 15l.01 0" />
                        <path d="M11 15l2 0" />
                    </svg>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi reprehenderit, veniam inventore
                    deleniti</p>
            </section>
        </div> <!--cierre de la clase de sevicios-->

        <section>
            <h2>Contacto</h2>
            <form class="formulario">
                <fieldset>
                    <legend>Contactanos llenando los campos</legend>

                    <div class="campos">
                        <div class="campo">
                            <label>Nombre</label>
                            <input class="input-text" type="text" placeholder="Escribe tu nombre">
                        </div>

                        <div class="campo">
                            <label>Telefono</label>
                            <input class="input-num" type="text" placeholder="Numero telefonico">
                        </div>

                            <div class="campo">
                                <label>Correos</label>
                                <input class="input-text" type="email" placeholder="Correo electronico">
                            </div<v>

                            <div class="campo">
                                <label>Mensaje</label>
                                <textarea class="input-text" placeholder="Escribe tu mensaje"></textarea>
                            </div>

                            <div class="alinear-derecha flex">
                                <input class="boton W-100" type="submit" value="Enviar">
                            </div>

                        </div> <!--Fin de formulario-->
                </fieldset>
            </form>
        </section>
    </main>
    <footer class="footer">
        <p>Todos los derechos reservados Juan Mancilla &copy;</p>
    </footer>



</body>

</html>
































    <?php include("../../templates/footer.php"); ?>