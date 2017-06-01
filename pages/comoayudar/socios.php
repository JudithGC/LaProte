<?php
  include '../iniciarsesionRegistrarse/DB.php';

$error = null;
if (isset($_POST['Enviar'])) {
  try {
    $DataBase = new DB();
    
  }catch (PDOException $e) {
    $error = $e->getCode();
    $missatge = $e->getMessage();
  }
  if (isset($error)) {
    die("Fatal ERROR! no conecta con la BD");
  }
 
  $nombre= ($_POST['Nombre']);
  $apellidos= ($_POST['Apellido']);
  $Edad= ($_POST['Edad']);
  $direccion= ($_POST['Direccion']);
  $poblacion= ($_POST['Poblacion']);
  $cp= ($_POST['CP']);
  $email= ($_POST['Email']);
  $telefono= ($_POST['Telefono']);
  $aportacion= ($_POST['Aportacion']);
  $cuenta_bancaria= ($_POST['Cuenta_Bancaria']);

  if ($DataBase->insertaSoci($nombre,$apellidos,$Edad,$direccion,$poblacion,$cp,$email,$telefono,$aportacion,$cuenta_bancaria)){
  } else {
    $error = "¡No se ha podido enviar!";
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>La Prote</title>
  <!--ICON WEB PAGE-->
  <link rel="icon" type="image/gif" href="../../images/logo_osona.jpg">
  <!--CSS-->
  <link rel="stylesheet" type="text/css" href="../../css/links.css">
  <link rel="stylesheet" type="text/css" href="../../css/iniciarsesion.css">
  <link rel="stylesheet" type="text/css" href="../../css/donaciones.css">
  
  <!--FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet"> 
    <style>
      body{
        background-color: white;
      }
      form{
        margin-top: 0;
        margin-bottom: 0;
      }
    </style>
</head>
<body>
 <header>
   <div class="atras">
     <a href="comoayudar.html"> Atrás</a>
   </div>
 </header>
 <div class="body">
      <div class="contenedor">
         <div class="texto">
           <h2>Hazte Socio</h2>

<form id="form1" method="post">
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
    <input type="text" name='Edad' id='Edad'><span class="highlight"></span><span class="bar"></span>
    <label for="Edad">Edad</label>
  </div>
  <div class="group">
    <input type="text" name='Direccion' id='Direccion'><span class="highlight"></span><span class="bar"></span>
    <label for="Direccion">Dirección</label>
  </div>
   <div class="group">
    <input type="text" name='Poblacion' id='Poblacion'><span class="highlight"></span><span class="bar"></span>
    <label for="Poblacion">Población</label>
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
    <label for="Email">Telefono</label>
  </div>
  <div class="group">
    <input type="text" name='Aportacion' id='Aportacion'><span class="highlight"></span><span class="bar"></span>
    <label for="Aportacion">Aportacion</label>
  </div>
 <div class="group">
    <input type="text" name='Cuenta_Bancaria' id='Cuenta_Bancaria'><span class="highlight"></span><span class="bar"></span>
    <label for="Cuenta_Bancaria">Cuenta Bancaria</label>
  </div>
  
 
  <button type="button" class="button buttonBlue">
   <input type="submit" name="Enviar" value="Enviar">
  </button>
 
</form>

         </div>
        
      </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="../../js/formularioiniciosession.js"></script>
</body>
</html>