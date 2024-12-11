<?php session_start();
if (!isset ($_SESSION['user_data'])){
    header('Location: ../LOGIN/login.php');
}
$user_data = $_SESSION ['user_data'];
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css">
</head>
<body  class="d-flex">

    <!--sidebar-->
    <?php include "../layouds/aside.php"?>
    <!--End sidebar-->

    <!--Main Content-->
    <main class="flex-grow-1">
    <?php include "../layouds/header.php"?>

        <section class="container mt-4 p-4">

            <!--title section-->
            <div class="d-flex justify-content-between">
                <h4>Area Proveedores</h4>
                <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <i class="bi bi-archive-fill"></i>
                  Agregar
                </button>
              </div>
            <!--title section-->

            <!--data-->
            
            <!--data-->

            <div class="modal fade modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Producto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="../admin/php/addCantidadProvedores.php" method="post"  class="needs-validation" novalidate id="form">

                    <div class="modal-body">
                        <div class="row">
                            
                            
                            <div class="col-6">
                                <label for="">Proveedor</label>
                                    <select name="txtProveedor" class="form-control">
                                        <option value="HP">HP</option>
                                        <option value="APPLE">APPLE</option>
                                        <option value="JBL">JBL</option>
                                        <option value="EA SPORT">EA SPORT</option>
                                    </select>
                                <div class="valid-feedback">Correcto</div>
                                <div class="invalid-feedback">Categoria no valido</div>
                            </div>
                            <div class="col-6">
                                <label for="">Cantidad</label>
                                <input name="txtCantidad" required type="text" class="form-control" placeholder="Inserta la Cantidad">
                                <div class="valid-feedback">Correcto</div>
                                <div class="invalid-feedback">Nombre no valido</div>
                            </div>
                        </div>

                        <div class="alert alert-danger mt-4 d-none" id="divAlerta" role="alert">
                            Favor de llenar los campos
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary" id="btnAdd">Agregar</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <img style="width: 1200px; height: 500px;" src="../img/logos proveedores.png" alt="">







        </section>
    </main>
    <!--Main Content-->
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../JS/users.js"></script>


    <?php 
  if(isset($_GET['status'])){
    $message="";
    if($_GET['status']==1){

      //insertado correctamente
      $message =" Registro Insertado corectamente";

    }else if ($_GET['status']==2){
      $message =" Registro actualizado corectamente";

    }else if ($_GET['status']==3){
      $message =" Registro Eliminado corectamente";
    }
    ?>



    <?php
  }
  
  
  ?>

    <script>
  Swal.fire({
  position: "top-end",
  icon: "success",
  title: "<?php echo $message ?>",
  showConfirmButton: false,
  timer: 1500
});

 </script>
 
</body>
</html>