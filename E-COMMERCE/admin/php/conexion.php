<?php 
$server = 'localhost';
$user ='root';
$pass ='';
$bd ='ProyectoEcommerce';
$conexion = new mysqli($server,$user,$pass,$bd);
if($conexion ->connect_error){
    die('NO SE PUEDE CONETAR A MYSQL PRENDELOOOOOO BURRO');
}
?>