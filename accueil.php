<!DOCTYPE html>
<html>
<div class="b">
<head>
  <meta charset="utf-8" />
  <title>Page Title</title>
  <LINK rel="STYLESHEET" href="projet.css" type="text/css">
</head>
<body class="html2">
  <?php
  include("connexion.php");
  //ouverture de la session pour se souvenir d'un utilisateur
  session_start();
  //recuperation email et mot_passe
  $email=$_POST['mail'];
  $password=sha1($_POST['modpass']);
  if (empty($_POST['mail']) | empty(sha1($_POST['modpass']))){
    echo 'Email et password ne sont pas inscrits du tout';
  }
  else{
    //preparation de la requete
  $stmt=$conn->prepare("SELECT * from utilisateur where Email = ? AND Mot_passe= ? OR Prenom=? OR Nom=?");
  $stmt->execute(array($email, $password, 'Nom', 'Prenom'));
  $userexist= $stmt->rowCount() ;
  //on verifie si cet utilisateur ayant entré son email et mot_passe existe dans la base
  if($userexist==1){
    $userinfo=$stmt->fetch();
    $_SESSION['Email']=$userinfo['Email'];
    $_SESSION['Mot_passe']=$userinfo['Mot_passe'];
    $_SESSION['Prenom']=$userinfo['Prenom'];
    $_SESSION['Nom']=$userinfo['Nom'];
    echo "<titre><font size='8' color=white><marquee><b><b><i><i><span> Bienvenue sur netflix_barry </span></i></i></b></b></marquee></font></titre>";
    //on recupere le nom et le prenom de l'utilisateur qui s'est connecté
    echo '<h2 align=center><font color=white>Bonjour '.$_SESSION['Nom'].' '.$_SESSION['Prenom'].'! </font></h2><br>';
  }
  else{
    echo"<h2  align='center'> Vous n'etes pas inscrit! </h2><br>";
    echo "<h3 align='center'>Pour vous inscrire cliquez <a href='inscription.php'><b> ici</h3></b></a>";
    }          
  } ?> 
  <ul class="A">
    <li class="c"><a href="accueil.php"><b>| Accueil |</b></a></li>
    <li class="c"><a href="series.php"><b>Liste des series |</b></a></li>
    <li class="c"><a href="inscription.php"><b>S'inscrire |</b></a></li>
    <li class="c"><a href="connecter.php"><b>Connexion |</b></a></li>
    <li class="c"><a href="deconnecter.php"><b>Se déconnecter |</b></a></li>
  </ul>
</body>
</div>
</html>