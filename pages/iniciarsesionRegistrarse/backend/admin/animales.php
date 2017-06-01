<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>La Prote</title>
 <style>
    form{
      display: inline-block;
      padding: 5px;
      margin-left: 4px;
      text-align: center;
    }
     p a{
      text-decoration: none;
      color: black;
      margin-left: 10px; 
    }
  </style>
</head>
<body>
  <div>
    <fieldset>
      <legend> Datos de los animales </legend>
      <div>
        <?php
         include('../../DB.php');
        if(isset($_POST['Ver'])){
         $DataBase = new DB();
         $DataBase -> recuperarDadesAnimal();
        }
        
        ?>
      </div>
    </fieldset>
    <fieldset>
      <legend> Acciones a realizar </legend>
      <div>
       <form action="animales.php" method="post">
              <input type="submit" name="Ver" value="Ver Animales">
        </form>
        <form action="insertarAnimal.php" method="post">
              <input type="submit" name="InsertarAnimal" value="Insertar Animal">
        </form>
         <form action="editarAnimal.php" method="post">
              <input type="submit" name="EditarAnimal" value="Editar Animal">
        </form>
        <form action="eliminarAnimal.php" method="post">
              <input type="submit" name="EliminarAnimal" value="Eliminar Animal">
        </form>
         <p> <a href="../admin/indexadmin.html">Volver atrás</a></p> 
      </div>
    </fieldset>
  </div>
</body>
</html>