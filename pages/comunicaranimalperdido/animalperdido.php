
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>La Prote</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="../../css/estilo.css">
    <link rel="stylesheet" type="text/css" href="../../iconos/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/parallax.css">
    <link rel="stylesheet" type="text/css" href="../../css/links.css">
    <link rel="stylesheet" type="text/css" href="../../css/comoayudar.css">
    
    <!--ICON WEB PAGE-->
    <link rel="icon" type="image/gif" href="../../images/logo_osona.jpg">
    <!--FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet"> 
    <!--JQUERYS-->
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js' type='text/javascript'></script>
    <script src="../../js/menudesp.js"></script>
    <script src="../../js/formulario.js"></script>
    <style>
      .card{
        width: 30%;
        height: 100px;
        text-align: left;
        padding-bottom: 50px;
        margin-left: 100px;
        font-size: 16px;
        
      }
      .botton{
        text-align: center;
        width: 40px;
        height: 30px;
        padding: 20px 10px 10px 10px;
        margin-left: 50px;

      }
      
    </style>

</head>
<body>  
     <header>
		<div class="wrapper">
                <div class="logo">La Prote</div>
                <input type="checkbox" id="btn-menu"><label for="btn-menu"><span class="icon-navicon"></span> </label>
                <!-- Menu hamburguesa -->
                  <nav class="menu">
                   <ul>
                      <div id="close-btn">
                       <h3>Menú <label for="btn-menu"><span class="icon-close"></span> </label> </h3>
                       </div>
                     <li><a href="../../index.html">Inicio</a></li>
                      <li>
                           <div id="firstpane" class="menu_list">
                                <p class="menu_head">La Prote</p>
                                <div class="menu_body">
                                <a href="../../index.html" >Sobre nosotros</a>
                                <a href="../../index.html">Dónde encontrarnos</a>
                                <a href="../../index.html">Contacta</a>
                                </div>
                           </div>
                    </li>
                     <li>
                           <div id="firstpane" class="menu_list">
                                <p class="menu_head">Animales</p>
                                <div class="menu_body">
                                <a href="../animales/conoceanuestrosanimales.html">Conoce a nuestros animales</a>
                                <a href="../animales/finalesfelices.html">Finales Felices</a>
                                <a href="../animales/galeria.html">Galeria de Imágenes</a>
                                </div>
                           </div>
                    </li>
                     <li><a href="">¿Cómo puedo ayudar?</a></li>
                     <li><a href="pages/comunicaranimalperdido/animalperdido.php">Comunicar Animal Perdido</a></li>
                     <li><a href="../iniciarsesionRegistrarse/iniciarsesion.php">Inicia Sesión | Registrarse</a></li>
                   </ul>
                </nav>
        
		</div>
	</header>
	<!-- Parallax -->
	<div class="cuerpo">
        <section class="module parallax parallax-1">
              <div class="container">
                <h1></h1>
              </div>
        </section>
         <section class="module content">
              <div class="container">
                <a name=""> <h2>Animales perdidos</h2></a>
              </div>
         </section>

           <?php 
                include('../iniciarsesionRegistrarse/DB.php');
                $DataBase = new DB();
                $DataBase ->recuperarDadesAnimalsPerduts();
            ?>
   
    
    <div class="botton"><a href="insertarAnimalPerdido.php"><p>+</p></a></div>
  </div>
  <div class="footer">La Prote (c) 2017 diseñado por Judith Gutiérrez Campillo</div>
        

<!--Jquery-->
<script src=" http://code.jquery.com/jquery-latest.js"></script>
<script src="../../js/jquery.js"></script>

</body>
</html>