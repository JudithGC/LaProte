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
 
  $Poblacion= ($_POST['Poblacion']);
  $Provincia= ($_POST['Provincia']);
  $Especie= ($_POST['Especie']);
  $Descripcion= ($_POST['Descripcion']);
  $Mensaje= ($_POST['Mensaje']);
  $Usuario= ($_POST['Usuario']);
  
  if ($DataBase->insertaAnimalPerdut($Poblacion,$Provincia,$Especie,$Descripcion,$Mensaje,$Usuario)){
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
     <a href="animalperdido.php"> Atrás</a>
   </div>
 </header>
 <div class="body">
      <div class="contenedor">
         <div class="texto">
           <h2>Insertar Comunicado de Animal Perdido</h2>

<form id="form1" method="post">
  <?php echo "<p>$error</p>"; ?>
   <div class="group">
    <input type="text" name='Poblacion' id='Poblacion'><span class="highlight"></span><span class="bar"></span>
    <label for="Poblacion">Poblacion</label>
  </div>
    <div class="group">
    <input type="text" name='Provincia' id='Provincia'><span class="highlight"></span><span class="bar"></span>
    <label for="Provincia">Provincia</label>
  </div>
   <div class="group">
    <input type="text" name='Especie' id='Especie'><span class="highlight"></span><span class="bar"></span>
    <label for="Especie">Especie</label>
  </div>
  <div class="group">
    <input type="text" name='Descripcion' id='Descripcion'><span class="highlight"></span><span class="bar"></span>
    <label for="Descripcion">Descripcion</label>
  </div>
   <div class="group">
    <input type="text" name='Mensaje' id='Mensaje'><span class="highlight"></span><span class="bar"></span>
    <label for="Mensaje">Mensaje</label>
  </div>
    <div class="group">
    <input type="text" name='Usuario' id='Usuario'><span class="highlight"></span><span class="bar"></span>
    <label for="Usuario">Usuario</label>
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