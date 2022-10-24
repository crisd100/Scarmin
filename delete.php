<?php

include("conexion.php");
$con=conectar();

$Codigo=$_GET['id'];

$sql="DELETE FROM ingresos  WHERE Codigo='$Codigo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Ingresos.php");
    }
?>
