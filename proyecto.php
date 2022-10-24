<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Scarmin</title>

  <link rel="shortcut icon" href="img/scarmin1.jpg" type="image/x-icon">
  <link rel="stylesheet" href="css/estilos.css">

</head>

<body>

  <div style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
      <path d="M-5.36,24.00 C91.13,207.55 400.39,-50.00 514.39,126.63 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: rgba(255, 204, 0, 0.762);"></path>
    </svg></div>
  <header>

    <nav>
      <a href="#">inicio</a>
      <a href="#">acerca de</a>
      <a href="#">inventario</a>
      <a href="#">servicios</a>
      <a href="#">contacto</a>
    </nav>
    <section class="texto-header">
      <h1>INGRESA A SCARMIN</h1>

      <h2>Tu Controlador De Inventario y Garantias</h2>
      <nav>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
          <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
          <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
        </svg>
        <a href="registro.php">Registro</a>
        <i class icon="bi bi-person-plus-fill"></i>
      </nav>
      <form class="formulario" method="POST">
        <?

        if(isset($_POST['cedula'] )){
        $cedula = $_POST['cedula'];
        $password = $POST['password'];
        ?>

        <h1>Iniciar Sesion</h1>
        <div class="contenedor">
          <div class="input-contenedor">
            <input type="number" name="cedula" placeholder="Cedula">
          </div>
        </div>
        <div class="contenedor">
          <div class="imput-contenedor">
            <input type="password" name="password" placeholder="contraseña">
          </div>
        </div>
        <div>
          <input type="submit" value="iniciar" class="button">
          <p> Registarte, acepta nuestras condiciones de uso y politicas de privacidad</p>
          <p> ¿No tienes una cuenta? <a class="link" href="registro.php">Registrate</a>
          </p>
        </div>
      </form>
    </section>

  </header>
  <main>
    <section class="contenedor sobre-nosotros">
      <h2 class="titulo">Nuestro software</h2>
      <div class="contenedor-sobre-nosotros">
        <img src="img/inventario1.jpg" alt="" class="imagen-about-us">
        <div class="contenido-textos">
          <h3><span>1</span>Inventario</h3>
          <p>Con nuestro software no volvera a tener inconvenientes con su inventario, ya que con Scarmin tendra idea exactamente de los productos que tiene y los que le falta.</p>
          <h3><span>2</span>Garantias</h3>
          <p>Scarmin lo ayudarla a la hora de saber las garantias que aun siguen vigentes y las cuales ya se vencieron de los productos que haya vendido previamente.</p>
          <h3><span>3</span>Control</h3>
          <p>Con Scramin tendra bajo control la salidad y la entrada de sus productos, la verificacion de sus garantias y la cantidad de productos que haya vendido durante el dia.</p>
        </div>
      </div>
    </section>
  </main>
  <div style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
      <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgba(255, 204, 0, 0.762);"></path>
    </svg></div>

</body>

</html>

</body>

</html>