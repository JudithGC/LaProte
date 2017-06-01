<?php

 /*CONEXIÓN BD -----------------------------------------*/
class DB{
   protected static function executaConsulta($sql) {
        $opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        $dsn = "mysql:host=localhost;dbname=laprote";
        $Usuario = 'judith';
        $Contraseña = 'root';
        $prote = new PDO ($dsn,$Usuario,$Contraseña,$opc);
        $resultat = null;
        if(isset($prote)) $resultat = $prote->query($sql);
          return $resultat;
    }
  /*Usuarios-----------------------------------------*/
    public static function verificaClient($Usuario, $Contraseña) {
        $sql = "SELECT Usuario FROM Usuarios ";
        $sql .= "WHERE Usuario='$Usuario' ";
        $sql .= "AND Contraseña='" . md5($Contraseña) . "';";
        $resultat = self::executaConsulta ($sql);
        $verificat = false;
        if(isset($resultat)) {
            $fila = $resultat->fetch();
            if($fila !== false)
                $verificat=true;
        }
        return $verificat;
    }
  public static function insertaClient($usuario,$contrasenya,$nombre,$apellidos,$cp,$email,$telefono){
     $sql = "INSERT INTO Usuarios(Usuario,Contraseña,Nombre,Apellidos,CP,Email,Telefono) VALUES ('$usuario',md5('$contrasenya'),'$nombre','$apellidos','$cp','$email','$telefono')";
     $resultat = self::executaConsulta ($sql);
    return $resultat;
  }
  public static function eliminarClient($usuario){
    $sql ="DELETE FROM Usuarios Where Usuario LIKE '$usuario'";
    $resultat = self::executaConsulta ($sql);
    return $resultat;
  }
  public static function actualizarClient($usuario,$contrasenya,$nombre,$apellidos,$cp,$email,$telefono){
    $sql = "UPDATE Usuarios SET Contraseña ='$contrasenya',Nombre='$nombre',Apellidos='$apellidos',CP='$cp',Email='$email',Telefono='$telefono' Where Usuario='$usuario'";
    $resultat = self::executaConsulta($sql);
    return $resultat;
  }
  
  public static function perfilUsuario($usuario){
    $sql= "SELECT Usuario,Nombre,Apellidos,CP,Email,Telefono FROM Usuarios where Usuario LIKE '$usuario'";
    $resultat = self::executaConsulta($sql);
    $usuario = null;
    if(isset($resultat)){
      $usuario = $resultat->fetch();
    }
    return $usuario;
  }
  public static function recuperarDadesClient(){
    $sql= "SELECT * FROM Usuarios";
    $resultat = self::executaConsulta($sql);
    foreach( $resultat as $row){
      echo "<table border=0>".
            "<tr>".
                    "<tr>"."______________________________________________________________________"."</tr>".
                    "<th>"."Id"."</th>".
                    "<th>"."Usuario"."</th>".
//                    "<th>"."Contraseña"."</th>".
                    "<th>"." Nombre "."</th>".
                    "<th>"." Apellidos "."</th>".
                    "<th>"." CP "."</th>".
                    "<th>"." Email "."</th>".
                    "<th>"." Teléfono "."</th>".
            "</tr>".
        
         
            "<tr>".
                    "<td>".$row['Id']."</td>".
                    "<td>".$row['Usuario']." </td>".
//                    "<td>".$row['Contraseña']."</td>".
                    "<td>"." ".$row['Nombre']." </td>".
                    "<td>"." ".$row['Apellidos']." </td>".
                    "<td>"." ".$row['CP']." </td>".
                    "<td>"." ".$row['Email']." </td>".
                    "<td>"." ".$row['Telefono']." </td>".
            "</tr>".
        "</table>";

    }
    return $resultat;
  }
   /*Socios -------------------------------------------*/
  public static function insertaSoci($nombre,$apellidos,$Edad,$direccion,$poblacion,$cp,$email,$telefono,$aportacion,$cuenta_bancaria){
     $sql = "INSERT INTO socios(Nombre,Apellidos,Edad,Direccion,Poblacion,CP,Email,Telefono,Aportacion,Cuenta_Bancaria) VALUES ('$nombre','$apellidos','$Edad','$direccion','$poblacion','$cp','$email','$telefono','$aportacion','$cuenta_bancaria')";
     $resultat = self::executaConsulta ($sql);
    return $resultat;
  }
  /*Hazte Voluntario ---------------------------------*/
  public static function insertaVoluntari($nombre,$apellidos,$Edad,$poblacion,$cp,$email,$telefono,$horario){
     $sql = "INSERT INTO haztevoluntario (Nombre,Apellidos,Edad,Poblacion,CP,Email,Telefono,Horario) VALUES ('$nombre','$apellidos','$Edad','$poblacion','$cp','$email','$telefono','$horario')";
     $resultat = self::executaConsulta ($sql);
    return $resultat;
  }
  /*Animales -----------------------------------------*/
public static function insertaAnimal($Nombre,$Edad,$Sexo,$Especie,$Raza,$Color,$Tipopelo,$Tamanyo,$Estado){
  $sql = "INSERT INTO animalesprote (Nombre,Edad,Sexo,Especie,Raza,Color,Tipo_de_pelo,Tamaño,Estado) VALUES ('$Nombre', '$Edad', '$Sexo', '$Especie', '$Raza', '$Color', '$Tipopelo', '$Tamanyo', '$Estado');";
     $resultat = self::executaConsulta ($sql);
    return $resultat;
}
public static function actualizarAnimal($Id,$Nombre,$Edad,$Sexo,$Especie,$Raza,$Color,$Tipopelo,$Tamanyo,$Estado){
    $sql = "UPDATE animalesprote SET Nombre ='$Nombre',Edad='$Edad',Sexo='$Sexo',Especie='$Especie',Raza='$Raza',Color='$Color',Tipo_de_Pelo='$TipoPelo', Tamaño='$Tamanyo',Estado='$Estado' Where Id='$Id'";
    $resultat = self::executaConsulta($sql);
    return $resultat;
  }
public static function recuperarDadesAnimal(){
    $sql= "SELECT * FROM animalesprote";
    $resultat = self::executaConsulta($sql);
    foreach( $resultat as $row){
      echo "<table border=0>".
            "<tr>".
                    "<tr>"."______________________________________________________________________"."</tr>".
                    "<th>"."Id"."</th>".
                    "<th>"."Nombre"."</th>".
                    "<th>"." Edad "."</th>".
                    "<th>"." Sexo "."</th>".
                    "<th>"." Especie "."</th>".
                    "<th>"." Raza "."</th>".
                    "<th>"." Color "."</th>".
                    "<th>"." Tipo de pelo "."</th>".
                    "<th>"." Tamaño "."</th>".
                    "<th>"." Estado "."</th>".
                  
            "</tr>".
        
         
            "<tr>".
                    "<td>".$row['Id']."</td>".
                    "<td>".$row['Nombre']." </td>".
                    "<td>"." ".$row['Edad']." </td>".
                    "<td>"." ".$row['Sexo']." </td>".
                    "<td>"." ".$row['Especie']." </td>".
                    "<td>"." ".$row['Raza']." </td>".
                    "<td>"." ".$row['Color']." </td>".
                    "<td>"." ".$row['Tipo_de_Pelo']." </td>".
                    "<td>"." ".$row['Tamaño']." </td>".
                    "<td>"." ".$row['Estado']." </td>".
                  
            "</tr>".
        "</table>";

    }
    return $resultat;
  }

  public static function eliminarAnimal($id){
    $sql ="DELETE FROM animalesprote Where Id LIKE '$id'";
    $resultat = self::executaConsulta ($sql);
    return $resultat;
  }
  public static function recuperarDadesAnimalsPerduts(){
    $sql = "SELECT * FROM comunicaAnimalPerdido";
    $resultat = self::executaConsulta($sql);
    foreach( $resultat as $row){
      
      echo "<div class='cartas'>".
                "<div class='card'>".
                      "<div class='arriba'>".
                          "<h2>Animal perdido</h2>".
                      "</div>".
        "<div class='container'>".
        "<p>"."<b>Poblacion:</b><br>".$row['Poblacion']."</p>".
        "<p>"."<b>Provincia:</b><br>".$row['Provincia']."</p>".
        "<p>"."<b>Calle:</b><br>".$row['Calle']."</p>".
        "<p>"."<b>Especie:</b><br>".$row['Especie']."</p>".
        "<p>"."<b>Descripcion:</b></br>".$row['Descripcion']."</p>".
        "<p>"."<b>Mensaje:</b><br>".$row['Mensaje']."</p>".
        "<p>"."<b>Usuario:</b><br>".$row['Usuario']."</p>".
              "</div>".
        "</div>";
    }
  }
  public static function insertaAnimalPerdut($Poblacion,$Provincia,$Especie,$Descripcion,$Mensaje,$Usuario){
  $sql = "INSERT INTO comunicaAnimalPerdido (Poblacion,Provincia,Especie,Descripcion,Mensaje,Usuario) VALUES ('$Poblacion', '$Provincia','$Especie', '$Descripcion', '$Mensaje', '$Usuario');";
     $resultat = self::executaConsulta ($sql);
    return $resultat;
}
 
}
?>