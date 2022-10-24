<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>productosdefectuosos</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="shortcut icon" href="img/scarmin1.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<nav>
    <div class="nav-wrapper" style="background-color: black;">
      <a href="#" class="brand-logo">Scarmin</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
       <li><a href="./index.php">Inicio</a></li>
        <li><a href="./totalproductos.php">Total De Productos</a></li>
        <li><a href="./Ingresos.php">Agregar Productos</a></li>
        <li><a href="./productosalir.php">Productos A Salir</a></li>
        <li><a href="./productosdefectuosos.php">Productos Defectuosos</a></li>
        <li><a href="./Configuracion.php" >Configuracion</a></li>
      </ul>
    </div>
</nav>

   
    <header>
    <form class="formulario4">
        <h1>Producto Dañados o Defectuosos</h1>
        <div class="contenedor2">
            <div class="input-contenedor2">
                
          <label> Productos </label>
    <select class=" Producto">
    
        <option value="" disabled selected>Producto</option>
        <option value="Licuadora">Licuadora</option>
        <option value="Olla a Presion">Olla a Presion</option>
        <option value="Sandwichera">Sandwichera</option>
        <option value="Extractor">Extractor</option>
        <option value="Olla">Olla</option>
        <option value="Vajilla">Vajilla</option>
        <option value="Vasos de Cristal">Vasos de Cristal</option>
        <option value="Cubiertos">Cubiertos</option>
    </select>

    
    <div class="contenedor2">
        <div class="input-contenedor2">
            
      <label> Cantidad </label>
<select class="Cantidad"> 
            <option value="" disabled selected>Cantidad</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
         
    </select>   
        <div class="contenedor2">
            <div class="input-contenedor2">
          <label> Marca </label>
    <select class=" Marca">

        <option value="" disabled selected>Marca</option>
        <option value="LG">LG</option>
        <option value="Challenger">Challenger</option>
        <option value="Oster">Oster</option>
        <option value="Samurai">Samurai</option>
        <option value="Caleb">Caleb</option>
        <option value="Samsung">Samsung</option>
        <option value="Black Decker">Black Decker</option>
        <option value="Aceb">Aceb</option>
        <option value="Corona">Corona</option>
        <option value="Cristal">Cristal</option>
        <option value="Bali">Bali</option>
        <option value="Churchill">Churchill</option>
        <option value="Imusa">Imusa</option>
    </select> 

    <div class="slider">
        <ul>
            <li>
             <img src="img/cubiertos.jpg" alt="">
            </li>
            <li>
             <img src="img/Extractor.jpg" alt="">
            </li>
            <li>
             <img src="img/licuadora.jpg" alt="">
            </li>
            <li>
             <img src="img/olla a presion.jpg" alt="">
            </li>
            <li>
             <img src="img/olla.jpg" alt="">
            </li>
            <li>
             <img src="img/sandwichera.jpg" alt="">
            </li>
            <li>
             <img src="img/vajilla.jpg" alt="">
            </li>
            <li>
                <img src="img/Vaso.jpg" alt="">
            </li>
        </ul>
    </div>

    <div>
        <input type="submit" value="Registrar Datos" class="button">
       
        </div>
   

    </header>
    
</body>
</html>