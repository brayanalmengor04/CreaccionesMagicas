<?php  
     session_start(); 
     $conexion = new mysqli("localhost", "root", "root123", "creaccionesmagicas");
     // Verificar la conexión
     if ($conexion->connect_error) {
         die("Error de conexión: " . $conexion->connect_error);
     }

    if (isset($_POST['ValorSesion'])) {
        # code...
        $valordesesion = $_POST[ 'ValorSesion'];
        $_SESSION['string'] = $valordesesion; 
        $sql = $_SESSION['string']; 
        
        // Ejemplo de consulta SELECT sin parámetros
        $consulta = "CALL p_selectcategoria__producto (?)"; 
        
        $parametro1 = "".$sql;
        if ($declaracion = $conexion->prepare($consulta)) {

            $declaracion->bind_param("s", $parametro1);
            $declaracion->execute();
            $resultado = $declaracion->get_result();
            $declaracion->close();
            
        }
    }
    else {
        $consulta = "CALL p_selectAll_producto ()";
        $resultado = $conexion->query($consulta);
    }
?> 
<!DOCTYPE html>
</html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creacciones Magicas -Tienda Online!</title>
    <link rel="stylesheet" type="text/css" href= "styleTienda.css">  
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
     
    <div class="container__menuresponsive-menu">
        <span class="container__menuresponsive__menu-icon">
            <ion-icon name="close-outline"></ion-icon>
        </span>

        <div class="container__menuresponsive__menu-mainfiltrer">
            <img src="/resources/lily-logo-solo-PNG.webp" alt="logotipo">

            <form id="formulario" method="POST" action ="/src/tiendaonly.php">
                    <a href="javascript:{}" onclick ="EstablecerSesion(this)">Arreglos Florales</a> 
                        <a href="javascript:{}" onclick ="EstablecerSesion(this)">Arreglos de Cajas</a>
                        <a href="javascript:{}" onclick ="EstablecerSesion(this)">Arreglo de cajas con fresas</a> 
                        <a href="javascript:{}" onclick ="EstablecerSesion(this)">Arreglo de desayuno</a> 
                        <a href="javascript:{}" onclick ="EstablecerSesion(this)">Arreglo de Graduacion</a> 
                        <a href="javascript:{}" onclick ="EstablecerSesion(this)">Arreglo Diferrentes</a> 
                        <a href="javascript:{}" onclick ="EstablecerSesion(this)">Cumpleaños</a>
                        <a href="javascript:{}" onclick ="EstablecerSesion(this)">Dia de las Madres</a>
                        <a href="javascript:{}" onclick ="EstablecerSesion(this)">Dia del Padre</a>
                        <a href="javascript:{}" onclick ="EstablecerSesion(this)">Dia de San valentin</a> 
                        <a href="javascript:{}" onclick ="EstablecerSesion(this)">Navidad</a>
                        <a href="javascript:{}" onclick ="EstablecerSesion(this)">Halloween</a> 
                        <a href="javascript:{}" onclick ="EstablecerSesion(this)" >Toppers</a>
            </form>
        </div>
    </div>

    <header>
        <nav class="container__nav">
            <div class="container__nav-logotipo">
                <img onclick="home()" id="redireccionar" src="/resources/lily-logo-solo-PNG.webp"
                    alt="logotipo-creaciones-magicas">
            </div>
            <div class="container__nav-search">
                <input type="search" name="buscador" id="buscar" placeholder="Escribe el producto que necesitas!"
                    autocomplete="on">
                <span class="container__icon-search"><ion-icon name="search-outline"></ion-icon></span>
            </div>

            <span class="container__card">
                <ion-icon style="cursor: pointer;" name="cart-outline"></ion-icon>
                <span class="container__card-count">1</span>
            </span>
            <span class="container__menuresponsive">
                <ion-icon name="menu-outline"></ion-icon>
            </span>

        </nav>
    </header>

    <section class="container__eventosCarrucel">
                        <span class="container__tapp_slider-left">
                            <ion-icon name="arrow-back-outline"></ion-icon>
                        </span> 
                        
                        <span class="container__tap_slider-right">
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </span>

                <div class="container_carrucel-evento"> 
                    <div class="container__evenetosCarrucel__slider__componentes">
                        <h4>Transforma tus Ideas en Realidad: Personalización a tu Medida, Imaginación sin Límites.</h4> 

                        <a href="">Encuentre Aqui!</a>   
                        
                    </div>
                </div>
    </section>
    <section class="container__servicios">
        <div class="container__servicios-menuvar">
            <div class="container__servicios__menuvar-categoria">
                <i>Arreglos</i>
                <ion-icon name="chevron-down-outline"></ion-icon>
                <ul  class="container__servicios__menuvar__categoria-list"> 
                    <form id="formulario" method="POST" action ="/src/tiendaonly.php">
                    <a href="javascript:{}" onclick ="EstablecerSesion(this)">Arreglos Florales</a> 
                        <a href="javascript:{}" onclick ="EstablecerSesion(this)">Arreglos de Cajas</a>
                        <a href="javascript:{}" onclick ="EstablecerSesion(this)">Arreglo de cajas con fresas</a> 
                        <a href="javascript:{}" onclick ="EstablecerSesion(this)">Arreglo de desayuno</a> 
                        <a href="javascript:{}" onclick ="EstablecerSesion(this)">Arreglo de Graduacion</a> 
                        <a href="javascript:{}" onclick ="EstablecerSesion(this)">Arreglo Diferrentes</a> 
                    </form>

                </ul>
            </div>
            <div class="container__servicios__menuvar-categoria">
                <i>Eventuales</i>
                <ion-icon name="chevron-down-outline"></ion-icon>
                <ul class="container__servicios__menuvar__categoria-list">
                <form id="formulario" method="POST" action ="/src/tiendaonly.php"> 
                    <a href="javascript:{}" onclick ="EstablecerSesion(this)">Cumpleaños</a>
                    <a href="javascript:{}" onclick ="EstablecerSesion(this)">Dia de las Madres</a>
                    <a href="javascript:{}" onclick ="EstablecerSesion(this)">Dia del Padre</a>
                    <a href="javascript:{}" onclick ="EstablecerSesion(this)">Dia de San valentin</a> 
                    <a href="javascript:{}" onclick ="EstablecerSesion(this)">Navidad</a>
                    <a href="javascript:{}" onclick ="EstablecerSesion(this)">Halloween</a> 
                </form>    
                </ul>
            </div>
            <div class="container__servicios__menuvar-categoria">
                <i>Bouquetes Globos</i>
                <ion-icon name="chevron-down-outline"></ion-icon>
                <ul class="container__servicios__menuvar__categoria-list">
                <form id="formulario" method="POST" action ="/src/tiendaonly.php"> 
                    <a href="javascript:{}" onclick ="EstablecerSesion(this)" >Bouquetes de Globos</a>
                </form>    
                
                </ul>
            </div>
            <div class="container__servicios__menuvar-categoria">
                <i>Personalizado</i>
                <ion-icon name="chevron-down-outline"></ion-icon>
                <ul class="container__servicios__menuvar__categoria-list">
                <form id="formulario" method="POST" action ="/src/tiendaonly.php"> 
                    <a href="javascript:{}" onclick ="EstablecerSesion(this)" >Personalizado</a>
                </form>    

                </ul>
            </div>
            <div class="container__servicios__menuvar-categoria">
                <i>Bar & Boutique</i>
                <ion-icon name="chevron-down-outline"></ion-icon>
                <ul class="container__servicios__menuvar__categoria-list"> 
                <form id="formulario" method="POST" action ="/src/tiendaonly.php"> 
                    <a href="javascript:{}" onclick ="EstablecerSesion(this)">Tazas</a>
                    <a href="javascript:{}" onclick ="EstablecerSesion(this)">Licores</a>
                    <a>Elemento 3</a>
                    <a>Elemento 4</a> 
                </form>    
                </ul>
            </div>
            <div class="container__servicios__menuvar-categoria">
                <i>Topers</i>
                <ion-icon name="chevron-down-outline"></ion-icon>
                <ul class="container__servicios__menuvar__categoria-list"> 
                <form id="formulario" method="POST" action ="/src/tiendaonly.php"> 
                    <a href="javascript:{}" onclick ="EstablecerSesion(this)" >Toppers</a>
                </form>    
                </ul>
            </div>
            <div class="container__servicios__menuvar-categoria">
                <i>Accesorios Escolares</i>
                <ion-icon name="chevron-down-outline"></ion-icon>
                <ul class="container__servicios__menuvar__categoria-list">
                <form id="formulario" method="POST" action ="/src/tiendaonly.php"> 
                    <a href="javascript:{}" onclick ="EstablecerSesion(this)">Etiquetas Escolares</a>
                </ul>
            </div>
        </div>
        <div class="container__servicios__main">
            <div class="container__servicios__main__title">
                Arreglos Creacciones Magicas
            </div>
            <div class="container__servicios__main__filtrer">
                <div class="container__servicios__main__filtrer-todos">Todos los Productos</div>
                <div class="container__servicios__main__filtrer-recomendados">Recomendados</div>
                <div class="container__servicios__main__filtrer-precioBajo">Precio Altos</div>
                <div class="container__servicios__main__filtrer-precioAlto">Precio Bajos</div>
            </div>



            <div class="container__servicios__main-collectionCards">
            
            <?php  
               while ($fila = $resultado->fetch_assoc()) {  

                  // Obtén los datos binarios de la imagen
                   $imagenBinaria = $fila['imagenProducto'];
                  // Convierte los datos binarios a una cadena base64         
                 $imagenCodificada = base64_encode($imagenBinaria); 
                echo '<div class="container__servicios__main__cards" data-aos="fade-up"
                data-aos-duration="1500"> 
                <div class="container__servicios__main__items">
                    <img src="data:image/jpeg;base64,' . $imagenCodificada . '" alt="pruebaimg"> 
                </div>
                <div class="container__servicios__main__items-descripcion">
                    <h4>'. $fila['nombreProducto'] . '</h4>
                    <div class="container__servicios__main__items__descripcion-info">
                        <div class="container__servicios__main__items__descripcion__info-precio">B/.' . $fila['precioDelProducto'] . '</div>
                        <button type="button">Ver información <ion-icon name="information-circle-outline"></ion-icon></button>
                    </div>
                </div> 
                <div class="container__servicios__main__items-info"> 
                    <span><ion-icon name="close-outline"></ion-icon></span> 
                    <p>' . $fila['descripcion'] . '</p> 
                    <button>Agregar al Carrito<ion-icon name="cart-outline"></ion-icon></button>
                </div>
            </div>';
               }
              ?>
            </div>
    </section>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();    
    </script>
    <script src="/src/tienda.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>