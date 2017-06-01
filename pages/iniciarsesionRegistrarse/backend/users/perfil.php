<?php 
include '../../DB.php';
session_start();
if(isset($_SESSION['Usuario'])){
  $DataBase = new DB();
  $usuario = $_SESSION['Usuario'];
  $elemento = $DataBase->perfilUsuario($usuario);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>La Prote</title>
    <!--ICON WEB PAGE-->
    <link rel="icon" type="image/gif" href="../../../../images/logo_osona.jpg">
    <!--CSS-->
     <link rel="stylesheet" type="text/css" href="../css/admin.css">
     <link rel="stylesheet" type="text/css" href="../../../../iconos/style.css">
     <link rel="stylesheet" type="text/css" href="../css/perfilusuario.css">
    <!--FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
</head>
<body>
 <div class="cartas">
      <div class="card">
          <div class="arriba">
             <span class="icon-camera"></span>
          </div>
           <div class="container">
    
               <p>Usuario: <?php echo $elemento['Usuario']; ?></p> 
               <p>Nombre: <?php echo $elemento['Nombre']; ?></p>
               <p>Apellidos: <?php echo $elemento['Apellidos']; ?></p>
               <p>CP: <?php echo $elemento['CP']; ?></p>
               <p>Email: <?php echo $elemento['Email']; ?></p>
               <p>Teléfono: <?php echo $elemento['Telefono']; ?></p>
           </div>
          <div class="boton-editar" name="editarferfil">
               <a class="boton" name="botoneditar" id="botoneditar" href="#"><span class="icon-edit"></span></a>
          </div>
       </div> 

</div>
 
 <div class="atras">
   <p><a class="boton" href="indexusers.html">Atrás</a></p>
</div>
  
</body>
</html>