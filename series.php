<html>
<head>
  <meta charset="utf-8" />
  <LINK rel="STYLESHEET" href="projet.css" type="text/css">
  <titre><font size='6' color=navy><marquee><b><b><i><i><span> Bienvenue sur netflix_barry </span></i></i></b></b></marquee></font></titre>
</head>
<body class="seri">
  <?php
  include("connexion.php");
  //pour la recherche de serie
  $seri = $conn->query('SELECT * FROM serie ORDER BY Id_serie ASC');
  if(isset($_GET['s']) AND !empty($_GET['s'])) {
     $s=($_GET['s']);
     $seri=$conn->query('SELECT * FROM serie WHERE Intitule LIKE "%'.$s.'%"');
  }
  //formulaire de recherche?>
  <form method="GET" class="F">
     <input type="search" size="25" name="s" placeholder="Rechercher serie par intitulé" />
     <input type="submit" value="Rechercher"/>
  </form>
  <h3 align='center'><b>Cliquez sur une serie pour visionner</b></h3>
<table BORDER='1' align='center'>
  <tr>
  <th> id_serie </th>
  <th> Intitulé </th>
  <th> nbepisode</th>
  <th> Acteur</th>
  <th> Realisateur</th>
  <th>Année de sortie</th>>
  </th>
  <?php while($a=$seri->fetch()) { 
    //recuperation des données dans un tableau cliquable?>
    <tr onclick="document.location.href='episode.php?ids=<?php echo $a['Id_serie']; ?>'">
    <td><?= $a['Id_serie'] ?></td>
    <td><?= $a['Intitule'] ?></td>
    <td><?= $a['nb_episode'] ?></td>
    <td><?= $a['Acteur'] ?></td>
    <td><?= $a['Realisateur'] ?></td>
    <td><?= $a['Annee_sortie'] ?></td>
    </tr>
  <?php } ?>
</table>
<?php //on verifie si le nom saisi ou si la lettre saisi correspond a une serie
 if($seri->rowCount()>0) { ?>
   <table>
    <?php while($b = $seri->fetch()) { ?>
    <tr>
    <td><?= $b['Intitule'] ?></td>
    </tr>
  </table>
<?php } ?>
<?php } else { ?>
  Aucune serie ne commence par: <?= $s ?>...
<?php } ?> 
<?php
echo"</table><br><br>";
echo"<div class='lien'>";
echo"<h3 class='m'><a href='deconnecter.php'><b><b>Se deconnecter</b></b></a></h3>"
?>
</div>
</body>
</html>