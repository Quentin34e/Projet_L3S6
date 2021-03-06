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
   <h1>Accueil</h1><!--Nom au dessus de l'onglet-->
      <a id="connexion" class="bouton" href="connexion.php">  <!--A modifier--><span>Se connecter</span></a>
         <nav>
      <ul id="menu"> 
		<!--LISTE DES ONGLETS-->
		<li id="espace_ban_g"><img src="../img/Addictab_logo3.png" alt="logo Addictab" /></li>
         <li class="onglet"><a href="Accueil.php">Accueil</a></li>
         <li class="onglet"><a href="Carte_interactive.php">Map</a></li>
         <li class="onglet"><a href="index.php">Forum</a></li>
         <li class="onglet"><a href="Page_Prevention.php">Prevention</a></li>       
         <li class="onglet"><a href="Ressources.php">Ressources</a></li>
        
      </ul>
   </nav>
</div><!--FIN ENTETE SITE-->

		<section>
			<article>
				<form action="recup_pass.php" method="post">
                            <p class="p_centre">
                                <label for="email">Renseignez votre email:</label><br /><input type="email" id="email" name="email" aria-describedby="email-help"><br />
                                <input type="hidden" id="bouton_click" name="bouton_click" value="ok">
                                <button class="bouton" type="submit" name="bouton"><span>Renvoyez-moi mon mot de passe</span></button>
                            </p>
                        </form>
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