<?php  
include "../admin/php/conexion.php";
$sql = "select * from USUARIOS";
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
  <?php include "../layouds/aside.php" ?>
  <!--End sidebar-->

  <!--Main Content-->
  <main class="flex-grow-1">
  <?php include "../layouds/header.php" ?>

    <section class="comtainer mt-4 p-4">


      <!--title section-->
      <div class="d-flex justify-content-between">
        <h4>Usuarios</h4>
        <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="bi bi-person-plus-fill"></i>
          Agregar
        </button>
      </div>
      <!--title section-->

      <!--data-->
      <div class="row mt-4">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Correo</th>
              <th scope="col">Contraseña</th>
              <th></th>
            </tr>
          </thead>
          <tbody>

            <?php 
              while($fila = mysqli_fetch_array($res)){

              
            ?>

                <tr>
                  <th scope="row"> <?php echo $fila ['IDUSUARIO'] ?> </th>
                  <td><?php echo $fila ['NOMBRE'] ?></td>
                  <td><?php echo $fila ['APELLIDO'] ?></td>
                  <td><?php echo $fila ['CORREO'] ?></td>
                  <td>*</td>
                  <td>
                    <button class="btn btn-outline-danger  btn-sm mx-1">
                      <i class="bi bi-trash-fill"></i>
                    </button>
                    <button class="btn btn-outline-warning btn-sm mx-1 ">
                      <i class="bi bi-pencil-square"></i>
                    </button>
                    <button class="btn btn-outline-dark btn-sm mx-1">
                      <i class="bi bi-arrow-90deg-right"></i>
                    </button>
                  </td>

                </tr>
            <?php 
            }
            ?>

            
          </tbody>
        </table>
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
          <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Cliente</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" class="needs-validation" novalidate id="form">

          <div class="modal-body">
            <div class="row">
              <div class="col-6">
                <label for="">Nombre</label>
                <input required type="text" class="form-control" placeholder="Inserta el nombre">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Nombre no valido</div>
              </div>
              <div class="col-6">
                <label for="">Apellido</label>
                <input required type="text" class="form-control" placeholder="Inserta el apellido">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Apellido no valido</div>
              </div>
              <div class="col-12">
                <label for="">Email</label>
                <input required type="email" class="form-control" placeholder="Inserta el Emal">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Email no valido</div>
              </div>
              <div class="col-6">
                <label for="">password</label>
                <input required type="password" class="form-control" placeholder="Inserta la comtraseña">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Password no valido</div>
              </div>
              <div class="col-6">
                <label for="">Confirmar Password</label>
                <input required type="password" class="form-control" placeholder="confirma la contraseña">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Password no valido</div>
              </div>
            </div>

            <div class="alert alert-danger mt-4 d-none" id="divAlerta" role="alert">
              Favor de llenar los campos
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary" id="btnGuardar">Agregar</button>
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
</body>

</html>