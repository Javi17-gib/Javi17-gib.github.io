<?php 
include "./conexion.php";
if($_GET['id']){
    $consulta = "delete from INVENTARIO where IDINVENTARIO=".$_GET['id'];
    $conexion ->query($consulta) or die($conexion->error);
    header("Location: ../../stock/stock.php?status=3");

}
//header("Location: ../../stock/stock.php?status=3");
//header("Location: ../../users/User.php");
?>