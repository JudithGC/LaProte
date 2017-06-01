<?php
  include '../../DB.php';

$error = null;
if (isset($_POST['Inserir'])) {
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
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>La Prote</title>
   <!--ICON WEB PAGE-->
  <link rel="icon" type="image/gif" href="../../../../images/logo_osona.jpg">
  <style>
    p a{
      text-decoration: none;
      color: black;
    }
  </style>
</head>
<body>
  <fieldset>
      <legend> Insertar Usuario </legend>
  <form action="formularioinserirclientes.php" method="post">
    <label for="Nombre">Nombre</label> <br>
    <input type="text" name='Nombre' id='Nombre'> <br>
    
    <label for="Apellido">Apellido</label><br>
    <input type="text" name='Apellido' id='Apellido'><br>
    
    <label for="CP">CP</label> <br>
    <input type="text" name='CP' id='CP'><br>
    
    <label for="Email">Email</label> <br>
    <input type="text" name='Email' id='Email'><br>
    
    <label for="Telefono">Teléfono</label><br>
    <input type="text" name='Telefono' id='Telefono'><br>
    
    <label for="Usuario">Usuario</label><br>
    <input type="text" name='Usuario' id='Usuario'><br>
    
    <label for="Contraseña">Contraseña</label><br>
    <input type="text" name='Contraseña' id='Contraseña'><br>
 
  
   <input type="submit" name="Inserir" value="Inserir"> <br>

  
</form>
  </fieldset>
   <fieldset>
      <legend> Acciones a realizar </legend>
      <p> <a href="../admin/clientes.php">Volver atrás</a></p> 
  </fieldset>
</body>
</html>
