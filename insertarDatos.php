<?php



try{
    $sql = "INSERT INTO abandono(nombrea, apellidos, correo, curp, promedio, fecha, Sexo, Nivel, Direccion) VALUES('$_POST[nombrea]','$_POST[apellidos]','$_POST[correo]','$_POST[curp]','$_POST[promedio]','$_POST[fecha]','$_POST[Sexo]','$_POST[Nivel]','$_POST[Direccion]')";
  
  $conn->exec($sql);
  #/echo "Registro creado","<br>","<br>";
} catch(PDOException $e) { 
  echo $sql . "<br>" . $e->getMessage(); 
}


?>
<?php
            
       $nombrea=$_POST["nombrea"];
       $apellidos=$_POST["apellidos"];
       $correo=$_POST["correo"];
       $curp=$_POST["curp"];
        $promedio=$_POST["promedio"];
        $fecha=$_POST["fecha"];
       $Sexo=$_POST["Sexo"];
        $Nivel=$_POST["Nivel"];
        $Direccion=$_POST["Direccion"];
        
        "<br>";
echo "<table border='3'";
echo "<tr><th> Nombre  </th><th> Apellidos </th><th>  Correo </th><th> Curp </th><th> Promedio</th><th> Fecha </th><th> Sexo </th><th> Nivel </th><th> Direccion </th></tr>";
echo "<tr><td>".$nombrea."</td><td>".$apellidos."</td><td>".$correo."</td><td>".$curp."</td><td>".$promedio."</td><td>".$fecha."</td><td>".$Sexo."</td><td>".$Nivel."</td><td>".$Direccion."</td></tr";
echo "</table>";

           if($promedio>=9){
               echo "<h1> FELICIDADES!! Fuiste seleccionado para la beca de abandono<h1>";
           }else{
               echo "<h1> LO SENTIMOS.... No cumples con el promedio requerido para obtener la beca de abandono<h1>";
           }
        
              
        
   ?>