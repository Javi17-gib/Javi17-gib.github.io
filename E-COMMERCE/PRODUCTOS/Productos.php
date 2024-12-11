<?php  
include "../admin/php/conexion.php";
$sql = "select * from PRODUCTOS";
$res = $conexion -> query($sql) or die($conexion-> error);

?>

<?php session_start();
if (!isset ($_SESSION['user_data'])){
    header('Location: ../LOGIN/login.php');
}
$user_data = $_SESSION ['user_data'];
?>

<!DOCTYPE html>
<html lang="en">

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

<body class="d-flex">
    <!--sidebar-->
    <?php include "../layouds/aside.php"?>
    <!--End sidebar-->

    <!--Main Content-->
    <main class="flex-grow-1">
    <?php include "../layouds/header.php"?>

        <section class="container mt-4 p-4">


            <!--title section-->
            <div class="d-flex justify-content-between">
                <h4>Productos</h4>
                <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <i class="bi bi-bag-check-fill"></i>
                  Agregar
                </button>
              </div>
            <!--title section-->

            <!--data-->
            <div class="row px-4 w-100">
                 <?php 
              while($fila = mysqli_fetch_array($res)){

              
                ?>
                <div class="col-3  mt-2 px-2">
                    <div class="card" style="max-width: 615px; height: 420px">
                   
                        <img src="../img/productos/<?php echo $fila ['FOTO']?>" style="height: 200PX;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo $fila ['NOMBRE'] ?></h5>
                            <h4 class="card-title"> <?php echo $fila ['DESCRIPCION'] ?></h4>
                            <p class="card-text"> <?php echo $fila ['PRECIO'] ?></p>
                            <a href="#" class="btn btn-primary">VER</a>
                        </div>
                        
                    </div>
                </div>
                <?php 
                    }
                    ?>


                


            </div>
            <!--data-->







        </section>

    </main>
    <!--Main Content-->





    <div class="modal fade modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Producto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="../admin/php/add-product.php" enctype="multipart/form-data" method="post"  class="needs-validation" novalidate id="form">

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <label for="">Nombre</label>
                                <input name="txtnombre" required type="text" class="form-control" placeholder="Inserta el nombre">
                                <div class="valid-feedback">Correcto</div>
                                <div class="invalid-feedback">Nombre no valido</div>
                            </div>
                            <div class="col-6">
                                <label for="">Descripcion</label>
                                <input name="txtdescripcion" required type="text" class="form-control" placeholder="Inserta la descripcion">
                                <div class="valid-feedback">Correcto</div>
                                <div class="invalid-feedback">Favor de llenar este campo</div>
                            </div>
                            <div class="col-4">
                                <label for="">Precio</label>
                                <input  name="txtprecio"required type="number" class="form-control"
                                    placeholder="Inserta el precio">
                                <div class="valid-feedback">Correcto</div>
                                <div class="invalid-feedback">Precio no valido</div>
                            </div>
                            <div class="col-4">
                                <label for="">Foto</label>
                                <input accept="image/*" name="txtimg" required type="file" class="form-control" placeholder="Inserta la foto">
                                <div class="valid-feedback">Correcto</div>
                                <div class="invalid-feedback">Foto no valido</div>
                            </div>
                            <div class="col-4">
                                <label for="">Categoria</label>
                                    <select name="txtcategorias" class="form-control">
                                        <option value="1">LAPTOS</option>
                                        <option value="2">PHONES</option>
                                        <option value="3">SPEAKER´S</option>
                                        <option value="4">GAMES</option>
                                        <option value="5">SMART WATCHS</option>
                                    </select>
                                <div class="valid-feedback">Correcto</div>
                                <div class="invalid-feedback">Categoria no valido</div>
                            </div>
                        </div>

                        <div class="alert alert-danger mt-4 d-none" id="divAlerta" role="alert">
                            Favor de llenar los campos
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary" id="btnGuardar1">Agregar</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../JS/users.js"></script>

    <?php 
     if(isset($_GET['status'])){
        if($_GET['status' ]==1){
    ?>

            <script> Swal.fire({
                position: "top-end",
                icon: "success",
                title: "Producto Agregado Correctamente",
                showConfirmButton: false,
                timer: 1500
                });
            </script>

    <?php
    
        }else{
    ?>
    
    <script> Swal.fire({
                position: "top-end",
                icon: "error",
                title: "Ocurrio un Error",
                showConfirmButton: false,
                timer: 1500
                });
            </script>

    <?php

        }
     }
    
    ?>
</body>

</html>