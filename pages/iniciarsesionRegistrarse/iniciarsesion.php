<?php
  include 'DB.php';


if (isset($_POST['Entrar'])) {
  try {
    $DataBase = new DB();
  }catch (PDOException $e) {
    $error = $e->getCode();
    $missatge = $e->getMessage();
  }
  if (isset($error)) {
    die("Fatal ERROR! no conecta con la BD");
  }
    $Usuario = $_POST['Usuario'];
    $Contraseña = $_POST['Contraseña'];
    if (empty($Usuario) || empty($Contraseña)) {
        $error = "Tienes que introducir un usuario y una contraseña";
    } else {
      
        if ($DataBase->verificaClient($Usuario,$Contraseña)) {
            session_start();
            $_SESSION['Usuario'] = $Usuario;
           
          if($Usuario != 'Juu'){
            header("Location: backend/users/indexusers.html");
          }else{
            header("Location: backend/admin/indexadmin.html");
          }
            
        } else {
            $error = "¡Usuario o contraseña no validos!";
        }
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
   <!--ICON WEB PAGE-->
  <link rel="icon" type="image/gif" href="../../images/logo_osona.jpg">

</head>

<body>
 
<form action="iniciarsesion.php" method="post">
  <div class="group">
    <input type="text" name='Usuario' id='Usuario'><span class="highlight"></span><span class="bar"></span>
    <label for='Usuario'>Usuario</label>
  </div>
  <div class="group">
    <input type="password" name="Contraseña" id="Contraseña"><span class="highlight"></span><span class="bar"></span>
    <label for='Contraseña'>Contraseña</label>
  </div>
  <button type="button" class="button buttonBlue"> 
       <input type="submit" name="Entrar" value="Entrar">
          
  </button>
  <p><a href="registrarse.php">Regístrarse</a> || <a href="../../index.html">Volver atrás</a></p> 
</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="../../js/formularioiniciosession.js"></script>

</body>
</html>