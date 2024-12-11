<?php  
include "./conexion.php";

$ID = $_POST['id'];
$nombre = $_POST['txtName'];
$apellido = $_POST['txtApellido'];
$email = $_POST['txtEmail'];

$consulta = "UPDATE USUARIOS SET 
NOMBRE='$nombre', 
APELLIDO='$apellido', 
CORREO='$email' WHERE IDUSUARIO =$ID";

echo $consulta;

$conexion ->query($consulta) or die($conexion->error);
header("Location: ../../users/User.php?status=2");
?>