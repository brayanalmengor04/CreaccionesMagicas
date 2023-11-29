<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creacciones Magicas Enviando Comentario!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            text-align: center;
            padding: 20px;
        }

        .success-message {
            color: green;
            font-weight: bold;
            border: 1px solid #00cc00;
            padding: 10px;
            margin: 20px;
            background-color: #e0ffe0;
        }

        .error-message {
            color: red;
            font-weight: bold;
            border: 1px solid #ff0000;
            padding: 10px;
            margin: 20px;
            background-color: #ffe0e0;
        }
        .custom-image {
            max-width: 40%; /* Asegura que la imagen no sea más ancha que su contenedor */
            height: auto; /* Hace que la altura de la imagen sea proporcional al ancho */ 
            
        }
        
    </style>
</head>
<body>

<?php
if (isset($_GET['mensaje'])) {
    $mensaje = $_GET['mensaje'];
    
    if ($mensaje == "Se ha realizado correctamente su comentario!") { 
        echo '<img class="custom-image" src="/resources/checkmessage.jpg" alt="Imagen de éxito" >';
        echo '<div class="success-message">' . $mensaje . '</div>'; 
        
    } else if ($mensaje == "Ya se ha realizado un comentario con estos datos!") {
        echo '<img class="custom-image" src="/resources/errormessage.jpg" alt="Imagen de error">';
        echo '<div class="error-message">' . $mensaje . '</div>'; 
        
    } else {
        echo '<div class="error-message">Ha ocurrido un error desconocido.</div>';
    }
}
?>

</body>
</html>
