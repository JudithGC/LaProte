<?php
  include 'DB.php';

$error = null;
if (isset($_POST['Registrarse'])) {
  try {
    $DataBase = new DB();
  }catch (PDOException $e) {
    $error = $e->getCode();
    $missatge = $e->getMessage();
  }
  if (isset($error)) {
    die("Fatal ERROR! no conecta con la BD");
  }
  $usuario= ($_POST['Usuario']);
  $contrasenya= ($_POST['Contraseña']);
  $nombre= ($_POST['Nombre']);
  $apellidos= ($_POST['Apellido']);
  $cp= ($_POST['CP']);
  $email= ($_POST['Email']);
  $telefono= ($_POST['Telefono']);
  
  
  
  if ($DataBase->insertaClient($usuario,$contrasenya,$nombre,$apellidos,$cp,$email,$telefono)){
  } else {
    $error = "¡No se ha podido registrar!";
  }
}

?>


<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>La Prote</title>
    <!--CSS-->
  <link rel="stylesheet" href="../../css/iniciarsesion.css">
  <link rel="stylesheet" href="../../css/registrarse.css">
   <!--ICON WEB PAGE-->
  <link rel="icon" type="image/gif" href="../../images/logo_osona.jpg">

  
</head>

<body>

<form method="post">
  <?php echo "<p>$error</p>"; ?>
   <div class="group">
    <input type="text" name='Nombre' id='Nombre'><span class="highlight"></span><span class="bar"></span>
    <label for="Nombre">Nombre</label>
  </div>
    <div class="group">
    <input type="text" name='Apellido' id='Apellido'><span class="highlight"></span><span class="bar"></span>
    <label for="Apellido">Apellido</label>
  </div>
    <div class="group">
    <input type="text" name='CP' id='CP'><span class="highlight"></span><span class="bar"></span>
    <label for="CP">CP</label>
  </div>
    <div class="group">
    <input type="text" name='Email' id='Email'><span class="highlight"></span><span class="bar"></span>
    <label for="Email">Email</label>
  </div>
    <div class="group">
    <input type="text" name='Telefono' id='Telefono'><span class="highlight"></span><span class="bar"></span>
    <label for="Telefono">Teléfono</label>
  </div>
  <div class="group">
    <input type="text" name='Usuario' id='Usuario'><span class="highlight"></span><span class="bar"></span>
    <label for="Usuario">Usuario</label>
  </div>
    <div class="group">
    <input type="text" name='Contraseña' id='Contraseña'><span class="highlight"></span><span class="bar"></span>
    <label for="Contraseña">Contraseña</label>
  </div>
  <button type="button" class="button buttonBlue">
   <input type="submit" name="Registrarse" value="Registrarse">
  </button>
  <p><a href="iniciarsesion.php">Iniciar Sesion</a> || <a href="../../index.html">Volver atrás</a></p> 
</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="../../js/formularioiniciosession.js"></script>

</body>
</html>