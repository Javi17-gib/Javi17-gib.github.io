<?php
include "./conexion.php";
$name = $_POST['txtnombre'];
$descripcion = $_POST['txtdescripcion'];
$precio = $_POST['txtprecio'];
$categoria = $_POST['txtcategorias'];
$file = $_FILES['txtimg']['name'];
$temp = explode(".",$file);
$ext = end($temp);
$destino = "../../img/productos/";
$file_name = date('Y_m_d_h_i_s')."_".rand(10000,99999).".".$ext;
if(move_uploaded_file($_FILES['txtimg']['tmp_name'], $destino.$file_name)){
    echo "archivo subido correctamente";

    $consulta ="INSERT INTO PRODUCTOS (IDPRODUCTO, NOMBRE, DESCRIPCION, PRECIO, FOTO, CATEGORIA) 
VALUES (0, '$name','$descripcion', $precio, '$file_name', '$categoria')";

//$fecha=date('Y-m-d');

$conexion -> query($consulta) or die ($conexion->error);
echo "registro insertado correctamente";
header("Location: ../../PRODUCTOS/Productos.php?status=1");

}else {
    echo " algo fallo ";
    header("Location: ../../PRODUCTOS/Productos.php?status=0");
}
echo $file;

die();

?>