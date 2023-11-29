<?php 
 $conexion = new mysqli("localhost", "root", "root123", "creaccionesmagicas");

 if ($conexion->connect_error) {
     die("Conexion Fallida: " . $conexion->connect_error);
 }
    $consulta = "CALL p_selectAll_resenia ()";  
    if($declaracion = $conexion->prepare($consulta)){ 
        $declaracion->execute();
        $resultado = $declaracion->get_result();
        $declaracion->close();
    }


 if (isset($_POST['register'])) {
     if (isset($_POST['correo']) && isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['experiencia'])) {
         $correo = $_POST['correo'];
         $nombre = $_POST['nombre'];
         $apellido = $_POST['apellido'];
         $experiencia = $_POST['experiencia'];
 
         $sql = "INSERT INTO resenia (correoelectronico, nombre, apellido, resenia) 
                 VALUES ('$correo', '$nombre', '$apellido', '$experiencia')";
        
         try {
             if ($conexion->query($sql)) { 
                header("Location: mensage.php?mensaje=Se ha realizado correctamente su comentario!");
                exit(); // Asegúrate de detener la ejecución del script después de redirigir.
             }
         } catch (Exception $e) {
               // Redirige a una nueva página con un mensaje de error personalizado.
               header("Location: mensage.php?mensaje=Ya se ha realizado un comentario con estos datos!");
               exit(); // Asegúrate de detener la ejecución del script después de redirigir.
         }
     }
 }
 
 $conexion->close();
 
  
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creacciones Magicas | Arreglo Florales, Decoraciones </title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/src/style.css">
    <link rel="shortcut icon" href="/resources/lily-logo-solo-PNG.ico" type="image/x-icon"> 
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>

<body>
    <header>
        <nav class="container__nav">
            <ion-icon id="menuResponsive" name="menu-outline"></ion-icon>
        </nav>
        <div class="container__logotipo">
            <img src="/resources/lily-logo-solo-PNG.webp" alt="CreacionesMagicas">
        </div>
        <div id="menuoculto" class="container__menuResponsive">
            <div class="container__menuResponsive-icon">
                <ion-icon id="iconOcultar" name="close-outline"></ion-icon>
            </div>
            <div class="container__menuResponsive-logotipo">
                <img src="/resources/lily-logo-solo-PNG.webp" alt="logotipo">
            </div>
            <div class="container__menuResponsive-links">
                <a href="#inicio" onclick="closeMenu()">INICIO</a>
            </div>
            <div class="container__menuResponsive-links">
                <a href="#destacado" onclick="closeMenu()">DESTACADOS</a>
            </div>
            <div class="container__menuResponsive-links">
                <a href="/src/tiendaonly.php" onclick="closeMenu()">TIENDA DE CREACIONES MAGICAS</a>
            </div>
            <div class="container__menuResponsive-links">
                <a href="#sobrenosotros" onclick="closeMenu()">SOBRE NOSOTROS</a>
            </div> 
            <div class="container__menuResponsive-links">
                <a href="#testimonios" onclick="closeMenu()">TESTIMONIOS</a>
            </div>

        </div>
        <!--Inicio etiqueta fondo padre-->
        <div id="inicio" class="container__background">
            <img src="/resources/fondoInicio.webp" alt="backgroundPrincipal">

            <!--Etiqueta Main-->
            <div class="container__presentacion">

                <div class="container__imagen">
                    <img src="/resources/undraw_logic_re_nyb4.svg" alt="serviciosInicio">
                </div>

                <div class="container__presentacion-componentes">
                    <div class="container__presentacion-titulo" data-aos="fade-right" data-aos-duration="1300">
                        <h1>Optimizando tu Visión Online: De Ideas a Momentos Mágicos con Decoraciones, 
                            Arreglos Florales y Sorpresas Especiales.</h1>
                        <div class="container__presentacion-subtitulo">
                            <h2>
"Transforma tus Eventos: Arreglos Florales, Decoraciones y Más. Celebra con Nosotros. ¡Reserva Ya!"</h2>
                        </div>
                        <div class="container__presentacion-boton" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
                            <button type="button">Contactenos Aqui!</button>
                        </div>
                        <div class="container__presentacion-icon"> 
                            <div class="container__presentacion__icon-whatsapp">
                               <ion-icon name="logo-whatsapp"></ion-icon> 
                            </div>
                            <div class="container__presentacion__icon-instagram">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </div>
                            <div class="container__presentacion__icon-tiktok">
                                <ion-icon name="logo-tiktok"></ion-icon>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Fin de la etiqueta padre-->
        </div>
        <div class="container__wavedown">
            <img src="/resources/waveDown_.svg" alt="waveDown">
        </div>
    </header>
    <section id="destacado" class="container__destacados">
        <div class="container__destacados-title" data-aos="fade-right" data-aos-duration="2000">
            <h2>!Descubre lo Servicios y Productos Mas Solicitados por Nuestro Clientes!</h2>
            <p>!En Nuestro serivicio, estamos comprometidos a atender todas tus necesidades, Nos Esforzamos por
                brindarte una experiencia personalizada y unica, adaptarnos a tus deseos y requisitos
                para hacer realidad tus sueños y necesidades!</p>
        </div>
        <div class="container__destacado-cards">
            <div class="container__destacado-carrucel">
                <!--GENERAR ESTE DIV EN PHP CON LOS PRODUCTOS DESTACADOS-->
                <div class="container__destacado-items" data-aos="fade-up" data-aos-duration="1000">
                    <img src="/resources/IMG-20230928-WA0047.jpg" alt="prueba">
                    <h3>Titulo Prueba - Mas detalle asjkjak jdkjd kasj dk</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias similique incidunt debitis minima
                        soluta ipsum dolore quasi molestiae ex quis assumenda, magni et </p>
                </div>
                <div class="container__destacado-items" data-aos="fade-up" data-aos-duration="1000">
                    <img src="/resources/IMG-20230928-WA0047.jpg" alt="prueba">
                    <h3>Titulo Prueba - Mas detalle asjkjak jdkjd kasj dk</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias similique incidunt debitis minima
                        soluta ipsum dolore quasi molestiae ex quis assumenda, magni et </p>
                </div>
                <div class="container__destacado-items" data-aos="fade-up" data-aos-duration="1000">
                    <img src="/resources/IMG-20230928-WA0047.jpg" alt="prueba">
                    <h3>Titulo Prueba - Mas detalle asjkjak jdkjd kasj dk</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias similique incidunt debitis minima
                        soluta ipsum dolore quasi molestiae ex quis assumenda, magni et </p>
                </div>

            </div>
        </div>
        <div class="container__destacados-boton" data-aos="zoom-in" data-aos-duration="1000">
            <button id="redireccionar" type="button">!Descubre Nuestra Tienda en linea Aqui!</button>
        </div>
    </section>

    <section id="sobrenosotros" class="container__sobrenosotros">

        <div class="container__sobrenosotros-title" data-aos="fade-left data-aos-duration=" 2000">
            <h3>Sobre Nosotros</h3>
        </div>

        <div class="container__sobrenosotros--main" data-aos="fade-right" data-aos-duration="1300">
            <div class="container__sobrenosotros-img">
                <img src="/resources/undraw_deconstructed_alud.svg" alt="">
            </div>

            <div class="container__sobrenosotros-componentes"  >
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia harum dolorum at accusantium culpa,
                    qui
                    quasi itaque in aspernatur quaerat vitae vel cum iusto a neque quae ducimus ad quo.
                    Eum saepe quam veniam similique quisquam, provident quasi quia facilis suscipit cum? Mollitia quod
                    labore voluptatum eius quisquam soluta fuga molestias, dicta placeat fugit eligendi aut voluptate
                    provident quia tempora.
                </p>
            </div>
        </div>
        <div class="container__sobrenosotros-wavedown">
            <img src="/resources/wavesobrenosotros.svg" alt="wave">
        </div>
    </section>
    <section class="container__testimonios">
        <div  class="container__testimonio-waveup">
            <img src="/resources/waveup.svg" alt="waveup">
        </div>
        <!--Justifice-center-->
        <div class="container__testimonios-main"  id="testimonios" >
            <div class="container__testimonios__main-title" >
                <h4 data-aos="fade-right" data-aos-duration="2000">Cuentanos Tu Experiencia Ayudanos a Mejorar  !Comparte Tu Opinion con Nosotros!</h4>
                <div class="container__testimonios__main-boton">
                    <button id="btnBoxModel">!Cuentanos Vuestra Experiencia!</button>
                </div>
            </div>
            <div class="container__testimonios__main-resenia" >
                <div class="container__testimonios__main-slider" >
                    <ion-icon id="btn-izquierda"  name="chevron-back-outline"></ion-icon> 
                    <ion-icon id="btn-derecha" name="chevron-forward-outline"></ion-icon>
                </div>  
 

            <div class="container__testimonios__carrucel" >
                <?php
                     while ($fila = $resultado->fetch_assoc()) {
                        echo '
                        <div class="container__testimonios__main-textrenia" data-aos="fade-right" data-aos-delay="400"  data-aos-duration="1000">
                        <p>'.$fila['resenia'].'</p> 
                        <div class="container__testimonios__main-perfil">
                            <img src="/resources/undraw_female_avatar_efig (1).svg" alt="prueba"> 
                            <h5>'.$fila['nombre'].','.$fila['apellido'] .'</h5> 
                            <p>La Chorrera , Panama</p>
                        </div> 
                        </div>
                        ';
                     }   
                ?>              
            </div>        
        </div>
        <div id="idModalBox" class="container__testimonios__main-modalbox" > 
            <div class="container__modelbox-icon">
                <ion-icon id="ocultarPopModel" style="cursor: pointer;" name="close-outline" onclick="closeModelBox()" ></ion-icon>
            </div>
            <div class="container__resenia-form" >
                <form action="/src/index.php" method="POST">
                    <label >Correo Electronico <span style="color:red;">*</span></label>
                    <br>

                    <input type="email" name="correo"  placeholder="Ingrese su correo electronico*">

                    <div class="container__resenia-informacion">
                        <label >Informacion de Contacto</label>
                        <br>
                        <br>
                        <label >Nombre  <span style="color:red;">*</span></label><br>

                        <input type="text" name="nombre"  placeholder="Ingrese su Nombre*">
                        <br>
                        <br>
                        <label >Apellido <span style="color:red;">*</span></label> <br>
                        <input type="text" name="apellido" placeholder="Ingrese su Apellido*">
                        <br>
                        <br> 
                        <label> Califique Nuestro Servicio!</label>   
                        <label >!Comparte tu Experiencia con Nosotros! <span style="color:red;">*</span></label>
                        <br>
                        <textarea name="experiencia" placeholder="Cuentanos vuestra experiencia. Te Escuchamos!"></textarea>
                    </div>
                        <input type="submit" name="register" value="Enviar Reseña">
                        <input type="reset" value="Eliminar Datos">
                </form>     
                <div class="container__resenia-image" >
                    <img src="/resources/undraw_my_documents_re_13dc.svg.svg" alt="">
                </div>
        </div>
    </section>
    <footer class="container__footer">
        <div class="container__footerwavedown">
            <img src="/resources/Vector (4).svg" alt="">
        </div>     
        <div class="container__footer-main">
            <div class="container__footer__main-informacion">
                <div class="container__footer-main__info-item">
                    <h5> Que Podemos Hacer por Ti?</h5> 
                    <li>Inicio</li>
                    <li>Sobre Nosotros</li>
                    <li>Destacados</li>
                    <li>Mas Informacion</li>
                </div>
                <div class="container__footer-main__info-item">
                    <h5>Nombre Persona</h5> 
                    <li></li>
                    <li></li>
                    <li></li>
                </div>
                <div class="container__footer-main__info-item">
                    <h5>Trabajamos Juntos</h5> 
                    <h6>Escribeme!</h6> 
                    <i>Contactos</i>
                </div>
                <div class="container__footer-main__info-item">
                    <h5>Enlaces</h5> 
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </div>
            </div> 
            <div class="container__footer__main-copyright">
                <h6>Año CopyRight -Todos los Derechos Reservados!</h6>
            </div>
        </div>   
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();    
    </script>
    <script src="/src/app.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>