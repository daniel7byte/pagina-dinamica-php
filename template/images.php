<?php

  $path = "images/";
  // Abrimos la carpeta que nos pasan como parámetro
  $dir = opendir($path);
  // Leo todos los ficheros de la carpeta
  while ($elemento = readdir($dir)){
    // Tratamos los elementos . y .. que tienen todas las carpetas
    if( $elemento != "." && $elemento != ".."){
      // Si es un archivo lo muestra
      if( !is_dir($path.$elemento) ){
        // Muestro el fichero
?>

<!-- El codigo HTML inicia aquí -->


<img src="<?= $path.$elemento ?>" width="300"><br>


<!-- El codigo HTML termina aquí -->

<?php
      }
    }
  }
?>
