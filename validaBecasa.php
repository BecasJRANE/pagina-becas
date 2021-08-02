   <!DOCTYPE html>
<html lang="es">
<head>
  <title>Resultado de BECAS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" >
    <h1>Becas para Estudiantes</h1><br><br>
</head>
    <body>
       
    <?php
        require("insertarDatos.php");
            
       $nombrea=$_POST["nombrea"];
       $apellido=$_POST["apellidos"];
       $correo=$_POST["correo"];
       $curp=$_POST["curp"];
        $promedio=$_POST["promedio"];
        $fecha=$_POST["fecha"];
       $sexo=$_POST["sexo"];
        $nivel=$_POST["nivel"];
        $Direccion=$_POST["Direccion"];
        
        
        echo "Nombre: ".$nombrea."<br>";
        echo "Apellidos: ".$apellidos."<br>";
        echo "Correo: ".$correo."<br>";
        echo "Curp: ".$curp."<br>";
        echo "Promedio: ".$promedio."<br>";
        echo "Fecha: ".$fecha."<br>";
        echo "Sexo: ".$sexo."<br>";
        echo "Nivel: ".$nivel."<br>";
        echo "Direccion: ".$direccion."<br>";
        
        
           if($promedio>=9){
               echo "Felicidades!! fuiste seleccionado para la beca de abandono";
           }else{
               echo "Lo sentimos!! No cumples con el promedio requerido para obtener la beca de abandono";
           }
        
        echo "<h1> SELECCIONADOS </h1><br><br>";       
        
   ?>
        
    </body>
</html>