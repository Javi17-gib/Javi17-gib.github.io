<?php session_start();
include "./conexion.php";
// cachar datos
$email = $_POST['txtemail'];
$password = $_POST['txtpassword'];

echo "Bienvenido: $email tu password es:  $password";

 $SQL = "select * from USUARIOS where CORREO = '$email' and  CONTRASENA = '$password'";

 $res = $conexion -> query($SQL) or die($conexion-> error);
 if(mysqli_num_rows($res) > 0 ){
    echo "login correcto <br>";
    $fila = mysqli_fetch_row($res); // traer la primera fila 
    $IDUSUARIO = $fila[0];
    $NOMBRE = $fila[1] ;
    $CORREO = $fila [2];

    echo "HOLA: $NOMBRE TU ID ES: $IDUSUARIO";
    $_SESSION ['user_data'] = [
        'IDUSUARIO' => $IDUSUARIO,
        'NOMBRE' => $NOMBRE,
        'CORREO' => $CORREO,
    ];
    header('Location: ../../admin/Admin.php');


 }else{
    echo "datos no validos";
    header("Location: ../../LOGIN/login.php?error=1"); // redireccionar
 }



?>