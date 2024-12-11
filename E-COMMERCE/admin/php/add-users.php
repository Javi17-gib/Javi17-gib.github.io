<?php
include "./conexion.php";
$name = $_POST['txtname1'];
$apellido = $_POST['txtap1'];
$email = $_POST['txtemail1'];
$password = $_POST['txtpass1'];
//$password2 = $_POST['txtpass2'];

$consulta ="INSERT INTO USUARIOS (IDUSUARIO, NOMBRE, APELLIDO, CORREO, CONTRASENA) 
VALUES (0, '$name', '$apellido', '$email', '$password')";
$conexion -> query($consulta) or die ($conexion->error);
echo "registro insertado correctamente";
header("Location: ../../users/User.php?status=1");
?>