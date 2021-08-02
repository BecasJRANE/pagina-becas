<?php

require("conexion.php"); 
try{
    $sql = "INSERT INTO conclucion(nombreec, apellido, correo, promedio, fecha, Sexo) VALUES('$_POST[nombreec]','$_POST[apellido]','$_POST[correo]','$_POST[promedio]','$_POST[fecha]','$_POST[Sexo]')";
  
  $conn->exec($sql);
  #/echo "Registro creado";
} catch(PDOException $e) { 
  echo $sql . "<br>" . $e->getMessage(); 
}


?>
<?php
            
       $nombreec=$_POST["nombreec"];
       $apellido=$_POST["apellido"];
       $correo=$_POST["correo"];
       $curp=$_POST["curp"];
       $fecha=$_POST["fecha"];
       $Sexo=$_POST["Sexo"];
       $promedio=$_POST["promedio"];
        
        
        "<br>";
echo "<table border='3'";
echo "<tr><th> Nombre  </th><th> Apellidos </th><th>  Correo </th><th> Curp </th><th> Fecha </th><th> Sexo </th><th> Promedio</th></tr>";
echo "<tr><td>".$nombreec."</td><td>".$apellido."</td><td>".$correo."</td><td>".$curp."</td><td>".$fecha."</td><td>".$Sexo."</td><td>".$promedio."</td></tr";
echo "</table>";

           if($promedio>=9){
               echo "<h1> FELICIDADES!! Fuiste seleccionado para la beca de conclucion<h1>";
           }else{
               echo "<h1> LO SENTIMOS.... No cumples con el promedio requerido para obtener la beca de conclucion<h1>";
           }
        
              
        
   ?>