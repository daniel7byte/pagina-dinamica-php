<?php

  function listarArchivos( $path ){
    // Abrimos la carpeta que nos pasan como parámetro
    $dir = opendir($path);
    // Leo todos los ficheros de la carpeta
    while ($elemento = readdir($dir)){
        // Tratamos los elementos . y .. que tienen todas las carpetas
        if( $elemento != "." && $elemento != ".."){
            // Si es un archivo lo muestra
            if( !is_dir($path.$elemento) ){
                // Muestro el fichero
                echo '<img src="' . $path . $elemento . '" width="300px">';
                echo '<br>';
            }
        }
    }
  }

  // Llamamos a la función para que nos muestre el contenido de la carpeta gallery
  listarArchivos("images/");
