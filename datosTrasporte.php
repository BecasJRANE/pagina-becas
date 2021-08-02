<?php

require("conexion.php"); 

try{
    $sql = "INSERT INTO transporte(nombret, apellidos, correo, curp, fechaa, nivel, grado, promedio, domicilio, ruta)VALUES('$_POST[nombret]','$_POST[apellidos]','$_POST[correo]','$_POST[curp]','$_POST[fechaa]','$_POST[nivel]','$_POST[grado]','$_POST[promedio]','$_POST[domicilio]','$_POST[ruta]')"; 
  
  $conn->exec($sql);
  #/echo "Registro creado";
} catch(PDOException $e) { 
  echo $sql . "<br>" . $e->getMessage(); 
}


?>
<?php
            
       $nombret=$_POST["nombret"];
       $apellidos=$_POST["apellidos"];
       $correo=$_POST["correo"];
       $curp=$_POST["curp"];
       $fechaa=$_POST["fechaa"];
       $Sexo=$_POST["Sexo"];
       $nivel=$_POST["nivel"];
       $grado=$_POST["grado"];
       $promedio=$_POST["promedio"];
       $domicilio=$_POST["domicilio"];
       $ruta=$_POST["ruta"];
        
        
        "<br>";
echo "<table border='3'";
echo "<tr><th> Nombre  </th><th> Apellidos </th><th>  Correo </th><th> Curp </th><th> Fecha </th><th> Sexo </th><th> Nivel </th><th> Grado</th><th> Promedio</th><th> Domicilio </th><th> Ruta</th></tr>";
echo "<tr><td>".$nombret."</td><td>".$apellidos."</td><td>".$correo."</td><td>".$curp."</td><td>".$fechaa."</td><td>".$Sexo."</td><td>".$nivel."</td><td>".$grado."</td><td>".$promedio."</td><td>".$domicilio."</td><td>".$ruta."</td></tr";
echo "</table>";

           if($promedio>=9){
               echo "<h1> FELICIDADES!! Fuiste seleccionado para la beca de tranporte<h1>";
           }else{
               echo "<h1> LO SENTIMOS.... No cumples con el promedio requerido para obtener la beca de tranporte<h1>";
           }
        
              
        
   ?>