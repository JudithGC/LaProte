<?php
  include '../../DB.php';

$error = null;
if (isset($_POST['EditarAnimal'])) {
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
  $Nombre=($_POST['Nombre']);
  $Edad=($_POST['Edad']);
  $Sexo=($_POST['Sexo']);
  $Especie=($_POST['Especie']);
  $Raza=($_POST['Raza']);
  $Color=($_POST['Color']);
  $Tipopelo=($_POST['Tipo']);
  $Tamanyo=($_POST['Tamaño']);
  $Estado=($_POST['Estado']);
  
  
  
  if ($DataBase->actualizarAnimal($Id,$Nombre,$Edad,$Sexo,$Especie,$Raza,$Color,$Tipopelo,$Tamanyo,$Estado)){
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
      <legend> Editar Animal </legend>
  <form action="editarAnimal.php" method="post">
    
    <label for="Id">Id</label> <br>
    <input type="text" name='Id' id='Id'> <br>
    
    <label for="Nombre">Nombre</label> <br>
    <input type="text" name='Nombre' id='Nombre'> <br>
    
    <label for="Edad">Edad</label><br>
    <input type="text" name='Edad' id='Edad'><br>
    
    <label for="Sexo">Sexo</label> <br>
    <input type="text" name='Sexo' id='Sexo'><br>
    
    <label for="Especie">Especie</label> <br>
    <input type="text" name='Especie' id='Especie'><br>
    
    <label for="Raza">Raza</label><br>
    <input type="text" name='Raza' id='Raza'><br>
    
    <label for="Color">Color</label><br>
    <input type="text" name='Color' id='Color'><br>
    
    <label for="Tipo">Tipo de pelo</label><br>
    <input type="text" name='Tipo' id='Tipo'><br>
    
    <label for="Tamaño">Tamaño</label><br>
    <input type="text" name='Tamaño' id='Tamaño'><br>
    
    <label for="Estado">Estado</label><br>
    <input type="text" name='Estado' id='Estado'><br>
  
   <input type="submit" name="EditarAnimal" value="Editar"> <br>

  
</form>
  </fieldset>
   <fieldset>
      <legend> Acciones a realizar </legend>
      <p> <a href="../admin/animales.php">Volver atrás</a></p> 
  </fieldset>
</body>
</html>
