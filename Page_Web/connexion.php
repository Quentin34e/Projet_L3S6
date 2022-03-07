<!DOCTYPE html>
<html>
	<head>
	 <meta charset="utf-8" />
     <meta name="keywords" content="tabac, cigarettes, conséquence, addictab" />
     <meta property="og:site_name" content="Addictab" />
     <meta property="og:locale" content="fr_FR" />
     <meta name="description" content="Site officiel Addictab: Vous trouverez sur le site un grand nombre d'informations. Vous pourrez connaître les différentes conséquences du tabac et vous pourrez intéragir avec d'autres utilisateurs"/>
     <link rel="stylesheet" href="style.css" />
 
     <title>Addictab</title>
        <script type="text/javascript" src="../javascript/affichermasquer.js"> </script><!-- utile pour le diapo-->
	</head>
	
	<body>
		<!--ENTETE DU SITE-->
	     <div id="bloc_page">
                <header>
                            <div id="entete"> 
   <h1>Se connecter</h1><!--Nom au dessus de l'onglet-->
      <a id="connexion" class="bouton" href="#">  <!--A modifier--><span>Se connecter</span></a>
         <nav>
      <ul id="menu"> 
		<!--LISTE DES ONGLETS-->
		<li id="espace_ban_g"><img src="../img/Addictab_logo3.png" alt="logo Addictab" /></li>
         <li class="onglet"><a href="Accueil.php">Accueil</a></li>
         <li class="onglet"><a href="Carte_interactive.php">Map</a></li>
         <li class="onglet"><a href="Forum.php">Forum</a></li>
         <li class="onglet"><a href="Page_Prevention.php">Prevention</a></li>       
         <li class="onglet"><a href="Ressources.php">Ressources</a></li>
        
      </ul>
   </nav>
</div><!--FIN ENTETE SITE-->

		<section>
			<article>
				<h2>Connectez-vous</h2> 
					<form action="profil.php" method="post">    <p class="p_centre">
						<label for="email" class="form-label">Email utilisé lors de la création de votre compte:</label><br />
						<input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" placeholder="you@exemple.com">
					</p>
					<p class="p_centre">
						<label for="password" class="form-label">Mot de passe:</label><br />
						<input type="password" class="form-control" id="password" name="password">
					</p>
					<p class="p_centre">
						<button class="bouton" type="submit" class="btn btn-primary"><span>Connexion</span></button>
					</p>
				</form>
				<p class="p_centre"><a class="bouton" href="recup_pass.php"><span>Vous avez oublié votre mot de passe</span></a></p>
				<p class="p_centre"><a class="bouton" href="inscription_site.php"><span>Vous n'êtes pas encore inscrit</span></a></p>

			</article>
		</section>
		 <footer><!--PIED DE PAGE-->
            

			<a>Contact</a>
			<ul>
				<li>Mail : contact@addictab.fr</li>
				<li>Numéro de téléphone: 06 XX XX XX XX</li>
			</ul>
			<p id="mention"><small>LE Quentin / GRIBAL Clement / LE Maxime / DOS SANTOS Yohann<br />Copyright ADDICTAB - Tous droits réservés.</small></p>

          
		 </footer> <!--FIN PIED DE PAGE-->
		 </div>
	</body>
</html>