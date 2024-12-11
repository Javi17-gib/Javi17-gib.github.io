<?php 
include "./conexion.php";
if($_GET['id']){
    $consulta = "delete from USUARIOS where IDUSUARIO=".$_GET['id'];
    $conexion ->query($consulta) or die($conexion->error);
    echo"registro eliminado correctamente";
   

}
header("Location: ../../users/User.php?status=3");
//header("Location: ../../users/User.php");
?>