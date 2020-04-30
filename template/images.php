<?php

  $i = 0;

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
        $i++;
?>

<!-- El codigo HTML inicia aquí -->


<div class="item" style="">
    <div class="card shadow-sm border-0 ">
      <div class="card-body">
        <div class="all-product-ico-favoritos" style=""><button class="btn btn-sm btn-link p-0"><i class="material-icons md-18 md-18-a">favorite</i></button></div> 
        <a href="producto.php?img=<?=$path.$elemento?>" class="">
          <figure class="product-image">
          <img src="<?= $path.$elemento ?>" alt="" class="">
          </figure>
        </a>
        <a href="producto.php?img=<?=$path.$elemento?>" class="text-dark mb-1 mt-2 h6 d-block font-h6">Torta arequipe fresa y almendra</a>
        <h5 class="text-success font-weight-normal mb-0 font-h5">$125.000<sup></sup></h5>
        <p class="text-secondary small text-mute mb-0">2 Libra</p>
        <button id="addtocart" class="btn btn-b btn-default button-rounded-36 boton-buy shadow-sm float-bottom-right"><i class="material-icons material-icons-a md-18 md-18-a">shopping_cart</i>
        <span class="cart-item"></span>
        </button>
      </div>
    </div>
</div>


<!-- El codigo HTML termina aquí -->

<?php
      }
    }
  }
?>

<script>
document.getElementById('contador').innerHTML = "<?=$i?>";
</script>
