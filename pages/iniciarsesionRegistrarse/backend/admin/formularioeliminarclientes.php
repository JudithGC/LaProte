<?php
  include '../../DB.php';

$error = null;
if (isset($_POST['EliminarCliente'])) {
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

  if ($DataBase->eliminarClient($usuario)){
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
      <legend> Eliminar Usuario </legend>
  <form action="formularioeliminarclientes.php" method="post">
    
    <label for="text">Usuario</label> <br>
    <input type="text" name='Usuario' id='Usuario'> <br>

    <input type="submit" name="EliminarCliente" value="Eliminar"> <br>

  
</form>
  </fieldset>
   <fieldset>
      <legend> Acciones a realizar </legend>
      <p> <a href="../admin/clientes.php">Volver atrás</a></p> 
  </fieldset>
</body>
</html>
