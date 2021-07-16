<?php
//ouverture se la session
session_start();
$_SESSION=array();
//fermeture de la session
session_destroy();
//redirection vers la page de connexion
header("Location:connecter.php");
?>