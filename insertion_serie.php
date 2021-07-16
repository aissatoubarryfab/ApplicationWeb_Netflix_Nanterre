<html>
<head>
  <meta charset="utf-8" />
  <LINK rel="STYLESHEET" href="projet.css" type="text/css">
</head>
<body>
  <?php 
  include("connexion.php");
  //recuperation des données des formulaires
  $intitule=$_POST['intitule'];
  $nbepisode=$_POST['nbepisode']; 
  $acteur = $_POST['acteur'];
  $realisateur = $_POST['realisateur'];
  $anneesorti = $_POST['anneesorti'];
  //requete d'insertion dans la table utilisateur
  $insere="INSERT INTO serie(Intitule,nb_episode,Acteur,Realisateur,Annee_sortie) VALUES ('$intitule','$nbepisode','$acteur','$realisateur','$anneesorti')";
  $res=$conn->prepare($insere);
  $e=$res->execute(array(":Intitule"=>$intitule,":nb_episode"=>$nbepisode,":Acteur"=>$acteur,":Realisateur"=>$realisateur,":Annee_sortie"=>$anneesorti));
  if($e){
    echo "<h2 align='center'>Serie inserée </h2>";
    echo "<h2 align='center'>Pour vous connecter cliquez <a href='connecter.php'><b>ici</h2></b></a>";
  }
  else{
    echo "<font color=red> Echec lors de l'introduction dans la base</font>";
  }
  //requete d'affichage des serie existant dans la base
  $reponse = $conn->query('SELECT * FROM serie');
  ?>
  <table border="1" align="center">
    <caption> <b>Listes des series</b></caption>
    <tr>
    <th> id_serie </th>
    <th> Intitulé </th>
    <th> nbepisode</th>
    <th> Acteur</th>
    <th> Realisateur</th>
    <th>Année de sortie</th></tr>
    <?php
    //on recupere les données dans un tableau
    while ($donnees = $reponse->fetch()){
      echo "<tr>";
      echo "<td> $donnees[Id_serie] </td>";
      echo "<td> $donnees[Intitule] </td>";
      echo "<td> $donnees[nb_episode] </td>";
      echo "<td> $donnees[Acteur] </td>";
      echo "<td> $donnees[Realisateur] </td>";
      echo "<td> $donnees[Annee_sortie] </td>";
    }
    echo "</tr>"; ?>
  </table>
</body>
</html>