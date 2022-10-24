<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM ingresos";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ingresos</title>
        <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="css/ingresos.css" rel="stylesheet" type="text/css">
    </head>
    <body>

    <nav>
    <div class="nav-wrapper" style="background-color: black;">
      <a href="#" class="brand-logo">Scarmin</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
       <li><a href="./index.php">Inicio</a></li>
        <li><a href="./totalproductos.php">Total de Productos</a></li>
        <li><a href="./Ingresos.php">Agregar Productos</a></li>
        <li><a href="./productosalir.php">Productos A Salir</a></li>
        <li><a href="./productosdefectuosos.php">Productos Defectuosos</a></li>
        <li><a href="./Configuracion.php" >Configuracion</a></li>
      </ul>
    </div>
</nav>

    <nav style= "background-color: yellow; height: 10vh"></nav>
            <div class="Padre">
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese el producto</h1>
                            <h1><br></h1>
                                <form action="insertar.php" method="POST">
                                    
                                    <input type="text" class="form-control mb-3" name="Codigo" placeholder="Codigo">
                                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="Cantidad" placeholder="Cantidad">
                                    <input type="text" class="form-control mb-3" name="Costos" placeholder="Costo Unitario">
                                    <input type="text" class="form-control mb-3" name="Marca" placeholder="Marca">
                                    
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombre</th>
                                        <th>Cantidad</th>
                                        <th>Costo Unitario</th>
                                        <th>Marca</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['Codigo']?></th>
                                                <th><?php  echo $row['Nombre']?></th>
                                                <th><?php  echo $row['Cantidad']?></th>
                                                <th><?php  echo $row['Costos']?></th>
                                                <th><?php  echo $row['Marca']?></th>     
                                                <th><a href="actualizar.php?id=<?php echo $row['Codigo'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['Codigo'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
            </div>

            <footer style= "background-color: yellow; height: 20vh"></footer>
    </body>
</html>