<script src="../js/sweetalert2@10.js"></script>
.
<?php
//Paso 1: Importar la libreria de la BD
require "../config/conexion.php";

//paso 2: Capturando variables
$cod = $_POST["cod"];
$valor_pagado = $_POST["valor_pagado"];
$valor_restante = $_POST["valor_restante"];


//Paso 3: Armo la sentencia sql que necesite
$sql = "UPDATE pago SET valor_pagado=".$valor_pagado.", valor_restante=".$valor_restante." WHERE cod=".$cod."";

//Paso 4: enviar la info al servidor

if ($conexion->query($sql))
{
    echo "<script>
            Swal.fire({
              title: 'ACTUALIZADO CORRECTAMENTE',
              icon: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Aceptar'
            }).then((result) => {
              if (result.isConfirmed) {
                window.location.href = '../index.html';
              }
            });
          </script>";

}else{
    echo "<script>
    Swal.fire({
      title: 'Error al actualizar',
      icon: 'error',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'Aceptar'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = '../index.html';
      }
    });
  </script>";
}
