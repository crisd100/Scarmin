<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Productos_salir</title>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <link rel="shortcut icon" href="img/scarmin1.jpg" type="image/x-icon">
  <link rel="stylesheet" href="./css/estilo.css">
  



<body>


  <nav>
    <div class="nav-wrapper" style="background-color:black;">
      <a href="#" class="brand-logo">Scarmin</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="./index.php">Inicio</a></li>
        <li><a href="./totalproductos.php">Total de Productos</a></li>
        <li><a href="./Ingresos.php">Agregar Productos</a></li>
        <li><a href="./productosalir.php">Productos A Salir</a></li>
        <li><a href="./productosdefectuosos.php">Productos Defectuosos</a></li>
        <li><a href="./Configuracion.php">Configuracion</a></li>
      </ul>
    </div>
  </nav>

  <header>
    <section class="texto-header">
      <form class="formulario2">
        <h1>Producto a Salir</h1>
        <div class="contenedor2">
          <div class="input-contenedor2">
            <div class="input-solicitud-producto">
              <label for="solicitud" class="col-sm-2 col-form-label">Solicitud del producto</label>

              <input type="number1" placeholder="producto">
            </div>
          </div>
          <div class="contenedor2">
            <div class="imput-contenedor2">
              <div class="input-Nombre-del-Producto">
                <label for="inputName" class="col-sm-2 col-form-label">Nombre del producto</label>
                <input type="text" placeholder="Nombre">
              </div>
            </div>
            <div class="contenedor2">
              <div class="input-contenedor2">
                <label> Cantidad de producto </label>
                <select class=" cantidad-producto">
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
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                  <option value="32">32</option>
                  <option value="33">33</option>
                  <option value="34">34</option>
                  <option value="35">35</option>
                  <option value="36">36</option>
                  <option value="37">37</option>
                  <option value="38">38</option>
                  <option value="39">39</option>
                  <option value="40">40</option>
                  <option value="41">41</option>
                  <option value="42">42</option>
                  <option value="43">43</option>
                  <option value="44">44</option>
                  <option value="45">45</option>
                  <option value="46">46</option>
                  <option value="47">47</option>
                  <option value="48">48</option>
                  <option value="49">49</option>
                  <option value="50">50</option>
                  <option value="51">51</option>
                  <option value="52">52</option>
                  <option value="53">53</option>
                  <option value="54">54</option>
                  <option value="55">55</option>
                  <option value="56">56</option>
                  <option value="57">57</option>
                  <option value="58">58</option>
                  <option value="59">59</option>
                  <option value="60">60</option>
                </select>
                <div class="contenedor2">
                  <div class="imput-contenedor2">
                    <div class="input-Cantidad-a-Quedar">
                      <label for="inputNumber" class="col-sm-2 col-form-label">Cantidad a quedar</label>
                      <input type="number1" placeholder="Cantidad">
                    </div>
                  </div>
                  <div>
                    <p></p>
                    <p></p>
                    <input type="submit" value="Ingresa Datos" class="button">

                  </div>
      </form>
  </header>


</body>

</html>