<?php
$servername = "localhost:81";
$username = "root";
$password = "";
$myDB="becas";

try { 
  $conn = new PDO("mysql:host:81=$servername;dbname=$myDB", $username, $password); 
    

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  #/echo "Conexión exitosa","<br>";
} catch(PDOException $e) { 
  echo "Conexión fallida: " . $e->getMessage(); 
}
?>