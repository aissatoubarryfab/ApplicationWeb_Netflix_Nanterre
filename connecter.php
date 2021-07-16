<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <div align="center" class="P">
  <titre><font size="6" color=navy><marquee><b><b><i><i><span> Bienvenue sur mon site </span></i></i></b></b></marquee></font></titre>
  <LINK rel="STYLESHEET" href="projet.css" type="text/css">
</head>
<body class="html1">
  <h2>Veuillez saisir vos informations</h2>
	<form method="POST" action="accueil.php">
  <table><tr>
    <td><label>Adresse mail</label></td>
    <td><input name="mail" size="17" type="text" required="required" autocomplete="on" placeholder="votre email" /></td></tr>
    <tr><td> <label>Mot de passe</label></td>
		<td><input name="modpass" size="17" type="password" required="required"
               pattern="(?=^.{4,8}$)(?=.*\d)(?=.*[A-Z])(?=.*[a-z]).*\W.*$"
               title="le mot de passe doit contenir entre 4 et 8 caractères
    et avoir au moins un chiffre, une lettre majuscule,
    une lettre minuscule et un autre caractère" placeholder="votre mot de passe" /></td></tr>
    <tr><td></td>
    <td><input type="image" src="connect.jpg" width="80" height="40" name="envoyer"/></label></td></tr>
    <tr><td></td>
    <td><br><b>Si vous n'êtes pas inscrit cliquez </b><a href='inscription.php'><b> ici </b></a></td></tr>
	</form>
  </table>
</div>
</body>
</html>