<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <LINK rel="STYLESHEET" href="projet.css" type="text/css">
    <div align="center" class="P">
    <titre><font size="6" color=navy><marquee><b><b><i><i><span> Bienvenue sur mon site </span></i></i></b></b></marquee></font></titre>
</head>
<body class="html1">
    <div align="center">
    <h2>Veuillez saisir vos informations</h2>
    <form method="POST" action="insertion_membre.php" autocomplete="on">
        <table>
           <tr><td><label> Nom </label></td>
           <td><input name="nom" size="17" type="text" required="required" pattern="^[A-Z].*" title= "le nom doit commencer par une majuscule" autocomplete="on" placeholder="votre nom" /></td></tr>
           <tr><td> <label> Prénom </label></td>
           <td><input name="prenom" size="17" type="text" required="required" pattern="^[A-Z].*" title= "le prenom doit commencer par une majuscule" autocomplete="on" placeholder="votre prenom" /></td></tr>
           <tr><td>Sexe</td>
           <td><input type="radio" name="sexe" value="Femme" checked >Femme
           <input type="radio" name="sexe" value="Homme" checked >Homme</td></tr>
           <tr><td><label>Date_nais</label></td>
           <td><input name="annee" size="14" type="date" value="Date de naissance:" required="required"/></td></tr>
           <tr><td><label> Telephone </label></td>
           <td><input name="phone" size="17" type="tel" required="required" placeholder="votre numero" /></td></tr>         
           <tr><td><label> Email </label></td>
           <td> <input name="mail" size="17" type="text" required="required" autocomplete="on" placeholder="votre mail" /></td></tr>
           <tr><td><label> Mot de passe</label></td>
           <td><input name="modpass" size="17" type="password" required="required"
               pattern="(?=^.{4,8}$)(?=.*\d)(?=.*[A-Z])(?=.*[a-z]).*\W.*$"
               title="le mot de passe doit contenir entre 4 et 8 caractères
               et avoir au moins un chiffre, une lettre majuscule,
               une lettre minuscule et un autre caractère" placeholder="votre mot de passe" /></td></tr>
            <tr><td></td>
            <td><input type="image" src="inscr.jpg" width="80" height="40" name="envoyer"/></td></tr>
            <tr><td></td>
            <td><b>Si vous êtes deja inscrit cliquez </b><a href='connecter.php'><b> ici </b></a></td></tr>
    </form>
    </table>
    </div>
</body>
</html> 
