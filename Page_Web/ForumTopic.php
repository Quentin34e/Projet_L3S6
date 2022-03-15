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
   <h1>NOUVEAU SUJET</h1><!--Nom au dessus de l'onglet-->
      <?  session_start();
			if(isset($_SESSION['utilisateur'])){
				echo '<a id="connexion" class="bouton" href="déconnexion.php">  <span>Se déconnecter</span></a>';
			}
			else {
				echo '<a id="connexion" class="bouton" href="connexion.php">  <span>Se connecter</span></a>';
			}
		?>
         <nav>
      <ul id="menu"> 
		<!--LISTE DES ONGLETS-->
		<li id="espace_ban_g"><img src="../img/Addictab_logo3.png" alt="logo Addictab" /></li>
         <li class="onglet"><a href="Accueil.php">Accueil</a></li>
         <li class="onglet"><a href="test.php">Map</a></li>
         <li class="onglet"><a href="Forum.php">Forum</a></li>
         <li class="onglet"><a href="Page_Prevention.php">Prevention</a></li>       
         <li class="onglet"><a href="Ressources.php">Ressources</a></li>
        
      </ul>
   </nav>
</div><!--FIN ENTETE SITE-->

		<section>
			<article>
				 <h2>Ajouter un topic:</h2>
					<form action="InsertSujet.php" method="post" autocomplete="off">
					<p>
					Intitulé :
					<input type="text" name="n" value=<?php echo "'".$_POST['n']."'"; ?> />
					</p>
					<p>
					Description :
					<input type="text" name="p" value=<? echo "'".$_POST['p']."'"; ?> />
					</p>
					<p>
					Date :
					<input type="text" name="mail" value=<? echo "'".$_POST['mail']."'"; ?> />
					</p>
					<p>
					Heure :
					<input type="password" name="mdp1" value="" />
					</p>
					<p class="p_centre">
						<button class="bouton" type="submit" class="btn btn-primary"><span>Envoyer</span></button>
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