<?php
include "./conexion.php";
$producto = $_POST['txtProducto'];
$cantidad = $_POST['txtCantidad'];
$proveedor = $_POST['txtProveedor'];

$consulta ="insert into inventario (IDINVENTARIO, PRODUCTO,CANTIDAD,PREVEEDOR)
values (0, '$producto', $cantidad, '$proveedor')";
$conexion -> query($consulta) or die ($conexion->error);
echo "registro insertado correctamente";
header("Location: ../../stock/stock.php?status=1");
?>