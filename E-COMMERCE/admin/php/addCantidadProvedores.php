<?php
include "./conexion.php";
$cantidad = $_POST['txtCantidad'];

$consulta ="UPDATE INVENTARIO SET CANTIDAD = $cantidad WHERE IDINVENTARIO =5";
//$fecha=date('Y-m-d');
$conexion -> query($consulta) or die ($conexion->error);
echo "registro insertado correctamente";
header("Location: ../../Proveedor/proveedor.php?status=1");
?>