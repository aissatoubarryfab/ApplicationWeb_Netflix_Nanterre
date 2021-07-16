<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "netflix_barry";
  try {
  // se connecter à mysql
  $conn=new PDO("mysql:host=$servername;dbname=$dbname","$username","$password");
  } 
  catch (PDOException $e) {
    echo "erreur" .$e->getMessage();
    exit();
  }
  // echo"connexion reussite <br>";
  ?>