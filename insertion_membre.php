<html>
<head>
   <meta charset="utf-8" />
   <LINK rel="STYLESHEET" href="projet.css" type="text/css">
</head>
<body>
  <?php 
  include("connexion.php");
  //recuperation des données des formulaires
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom']; 
    $sexe = $_POST['sexe'];
    $annee = $_POST['annee'];
    $phone = $_POST['phone'];
    $mail = $_POST['mail'];
    //cryptage du mot_passe
    $modpass =sha1($_POST['modpass']);
    //requete d'insertion dans la table utilisateur
  $inserer="INSERT INTO utilisateur(Nom,Prenom,Sexe,Date_naissance,Telephone,Email,Mot_passe) VALUES ('$nom','$prenom','$sexe','$annee','$phone','$mail','$modpass')";
  $res=$conn->prepare($inserer);
  $e=$res->execute(array(":Nom"=>$nom,":Prenom"=>$prenom,":Sexe"=>$sexe,":Date_naissance"=>$annee,":Telephone"=>$phone,":Email"=>$mail,":Mot_passe"=>$modpass));
  //verification de la requete
  if($e){
       echo "<h3 align='center'> $nom $prenom vous etes bien inscrit! </h3><br>";
       echo "<h3 align='center'>Pour vous connecter cliquez<a href=' connecter.php'><b>ici</h3></b></a>";
      }
  else{
      echo "<font color=red> Echec lors de l'introduction dans la base</font>";
  }?>
</body>
</html>