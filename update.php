<?php

include("conexion.php");
$con=conectar();

$Codigo=$_POST['Codigo'];
$Nombre=$_POST['Nombre'];
$Cantidad=$_POST['Cantidad'];
$Costos=$_POST['Costos'];
$Marca=$_POST['Marca'];

$sql="UPDATE ingresos SET  Nombre='$Nombre',Cantidad='$nombres',Costos='$Costos' , Marca='$Marca' WHERE Codigo='$Codigo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Ingresos.php");
    }
?>