<?php
include("conexion.php");
$con=conectar();

$Codigo=$_POST['Codigo'];
$Nombre=$_POST['Nombre'];
$Cantidad=$_POST['Cantidad'];
$Costos=$_POST['Costos'];
$Marca=$_POST['Marca'];


$sql="INSERT INTO ingresos VALUES('$Codigo','$Nombre','$Cantidad','$Costos','$Marca')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: Ingresos.php");
    
}else {
}
?>