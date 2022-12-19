<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
 
    $imagen= $_POST['foto'];
    $nombre = $_POST['nombre'];

    // RUTA DONDE SE GUARDARAN LAS IMAGENES
    $path = "uploads/$nombre.png";
   //Configurar la ruta de acuerdo a tu servidor 
    $actualpath = "https://localhost/prueba/$path";

    file_put_contents($actualpath, base64_decode($imagen));

    echo "SE SUBIO EXITOSAMENTE";
}
