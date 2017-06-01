<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>La Prote</title>
   <!--ICON WEB PAGE-->
  <link rel="icon" type="image/gif" href="../../../../images/logo_osona.jpg">
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
      <legend> Datos de los usuarios </legend>
      <div>
        <?php
         include('../../DB.php');
        if(isset($_POST['Ver'])){
         $DataBase = new DB();
         $DataBase -> recuperarDadesClient();
        }
        
        ?>
      </div>
    </fieldset>
    <fieldset>
      <legend> Acciones a realizar </legend>
      <div>
       <form action="clientes.php" method="post">
              <input type="submit" name="Ver" value="Ver Usuarios">
        </form>
        <form action="formularioinserirclientes.php" method="post">
              <input type="submit" name="Insertar" value="Insertar Usuario">
        </form>
        <form action="formularioeditarclientes.php" method="post">
              <input type="submit" name="Editar" value="Editar Usuario">
        </form>
        <form action="formularioeliminarclientes.php" method="post">
              <input type="submit" name="Eliminar" value="Eliminar Usuario">
        </form>
         <p> <a href="../admin/indexadmin.html">Volver atrás</a></p> 
      </div>
    </fieldset>
  </div>
</body>
</html>