Projet base de données: NETFLIX
Ce projet a pour but de créer un site web de gestion de series. Sur ce voici les fonctionnalités de mon projet.

j'ai crée 4 tables dans ma base de donée "netflix_barry" dont: 

-utilisateur (Email[clé primaire], Nom, Prenom, Sexe, Date_naissance, Telephone, Mot_passe),
-serie (Id_serie[clé primaire], Intitule, nb-episode, Acteur, Realisateur, Annee_sortie),
-episode (Id_epi[clé primaire], Heure_vision, refSeri),
-visionner(refUtil, refEpi) qui resulte de l'association(n,n) de la table utilisateur et episode.

J'ai créé une page de connexion à la base de donnée qui est "connexion.php".

-Pour qu'un utilisateur puisse s'inscrire il doit remplir le formulaire d'incription (inscription.php), s'il est bien inscrit, il sera dirigé vers la 
page "insertion_membre.php" qui nous affichera "Nom Prenom vous ete bien inscrit" et un lien vers la page de connexion afin de se connecter et regarder les series.
J'ai crypter les mots de passe pour une question de securité en utilisant la fonction SHA1.

-Pour se connecter l'utilisateur à travers le formulaire de connexion (connecter.php) doit entrer son email et son mot de passe.
Le mot de passe doit contenir 4 a 8 caractères et doit avoir au moins une lettre majuscule,une lettre minuscule,un chiffre et un caractère special.

Pour ajouter une serie dans la base il faut remplir le formulaire de serie (formSerie.php). Si la serie est bien inserer on sera dirigé vers
la page "insertion_serie.php" qui nous affichera "serie inserée" et un lien vers la page de connexion pour se connecter et regarder les series.

Une fois que l'utilisateur aura entré son email et son mot de passe (connecter.php), s'il n'existe pas dans la base il sera dirigé
vers une page où il pourra s'inscrire, mais s'il existe dans la base il sera dirigé vers la page d'accueil (acceuil.php) et la page reconnaitra 
l'utilisateur qui s'est connecté en affichant "Bonjour Nom Prenom". Sur cette page il aura accès à la liste des series se trouvant 
dans le menu (liste des series) il pourra ensuite se deconnecter s'il le souhaite en cliquant sur "se deconnecter".

Une fois qu'il aura cliqué sur la liste des series, il sera dirigé vers la page serie.php où il pourra rechercher une serie qui existe dans 
la base ou sinon cliquer directement sur une serie se trouvant dans le tableau.

Une fois qu'il aura cliqué sur une serie il sera dirigé vers la page episode.php où il pourra choisir l'épisode qu'il veut regarder 
en fonction des episodes disponible pour la serie choisi tout en cliquant la dessus.
Il sera ensuite dirigé vers une page vision.php lui faisant croire de façon virtuel qu'il a commencer la lecture de l'episode.
