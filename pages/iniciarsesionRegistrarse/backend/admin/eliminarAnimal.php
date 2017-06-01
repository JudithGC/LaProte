<?php
  include '../../DB.php';

$error = null;
if (isset($_POST['EliminarAnimal'])) {
  try {
    $DataBase = new DB();
  }catch (PDOException $e) {
    $error = $e->getCode();
    $missatge = $e->getMessage();
  }
  if (isset($error)) {
    die("Fatal ERROR! no conecta con la BD");
  }
  $Id= ($_POST['Id']);

  if ($DataBase->eliminarAnimal($Id)){
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
  <style>
    p a{
      text-decoration: none;
      color: black;
    }
  </style>
</head>
<body>
  <fieldset>
      <legend> Eliminar Animal </legend>
  <form action="eliminarAnimal.php" method="post">
    
    <label for="text">Id</label> <br>
    <input type="text" name='Id' id='Id'> <br>

    <input type="submit" name="EliminarAnimal" value="Eliminar"> <br>

  
</form>
  </fieldset>
   <fieldset>
      <legend> Acciones a realizar </legend>
      <p> <a href="../admin/animales.php">Volver atrás</a></p> 
  </fieldset>
</body>
</html>
