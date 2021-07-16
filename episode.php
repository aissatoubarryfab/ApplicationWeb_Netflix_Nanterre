<?php 
include("connexion.php");
//on recupere l'ids dans serie.php et on le fait correspondre a id_serie
if(isset($_GET['ids']) AND !empty($_GET['ids'])){
    $id=($_GET['ids']);
    $serie=$conn->query('SELECT * from serie where Id_serie='.$id);
  }
$donnees=$serie->fetch()?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <titre><font size="6" color=navy><marquee><b><b><i><i><span> Bienvenue sur netflix_barry </span></i></i></b></b></marquee></font></titre>
  <LINK rel="STYLESHEET" href="projet.css" type="text/css">
</head>
<body class="htm">
   <h2>Vous avez choisi la serie "<?php echo $donnees['Intitule']; ?>".<br><br> Choisir un épisode ci-dessous pour visionner: </h2><br>
   <table align='center'>
   <?php //on recupere les episode de chaque serie
   for($i=1;$i<=$donnees['nb_episode'];$i++){?>
   <tr><td><h3><a href="visionner.php?ide=<?php echo $i; ?>" class="v"><li class="m"> Episode <?php echo $i ?></li></h3><?php }?>
   </td></tr></table>
</body>
</html>
