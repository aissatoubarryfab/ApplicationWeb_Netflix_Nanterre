<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <div align="center" class="P">
  <titre><font size="6" color=navy><marquee><b><b><i><i><span> Bienvenue sur netflix_barry</span></i></i></b></b></marquee></font></titre>
  <LINK rel="STYLESHEET" href="projet.css" type="text/css">
  </head>
<body class="html1">
<div align="center">
<h2> Veuillez remplir les champs</h2>
<form method="POST" action="insertion_serie.php" autocomplete="on">
  <table><tr>
     <td><label>Intitulé</label><br></td>
      <td><input name="intitule" size="14" type="text" required="required" placeholder="Nom de la serie" /></td></tr>
      <tr><td><label>Nombre d'épisode</label></td>
      <td><input name="nbepisode" size="14" type="text" required="required" placeholder="Nombre d'episode" /></td></tr>
      <tr><td><label>Acteur</label></td>
      <td><input name="acteur" size="14" type="text" required="required" placeholder="Nom de l'acteur" /></td></tr>
      <tr><td><label>Réalisateur</label></td>
      <td><input name="realisateur" size="14" type="text" required="required" placeholder="Nom du realisateur" /></td></tr>
      <tr><td><label>Année de sortie</label></td>
      <td><input name="anneesorti" size="14" type="text" required="required" placeholder="Année de sortie" /></td></tr>
      <tr><td></td>
     <td><input type="image" src="valid.jpg" width="80" height="40" name="envoyer"/></td></tr>
</form>
</table>
</body>
</html>