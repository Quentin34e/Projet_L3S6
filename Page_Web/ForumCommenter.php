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
   <h1>COMMENTAIRE</h1><!--Nom au dessus de l'onglet-->
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
<?
		if(isset($_SESSION['utilisateur'])){
				
				echo '<section><article>';
				echo '<h2>Bienvenue</h2>';
				echo '<table>';
				echo '		<tr><td><table border=1 width=170px>';
				echo '			<tr><td align="center"> <img src= "../img/IconeProfil.png" alt="image profil" position="relative" width="40px" margin=" 15px 15px 15px 15px"top="5px"/> </td></tr>';
							echo '<tr><td align="center"> ';
							echo $_SESSION['utilisateur'][1]." ".$_SESSION['utilisateur'][0] ;
							echo '</td></tr>';
							echo '<tr><td align="center"> <a href=MonProfil.php align="left">Mon profil </a><img src="../img/Crayon.jpg" alt="image crayon" position="relative" width="30px" margin=" 15px 15px 15px 15px"top="5px"/></td></tr></table>';
							echo '</td>';
							echo '<td>';
							echo "Bonjour Mr/Mme ".$_SESSION['utilisateur'][1]." ".$_SESSION['utilisateur'][0];
							echo '<br>Vous êtes maintenant connecté sur notre site. <br>';
							echo 'Vous pouvez modifier les informations vous concernant à tous moments en cliquand sur "mon profil".<br>';
							echo 'Passez un agréable moment sur notre site.';
							echo '</td>';
						echo '</tr>';
				echo '</table></article></section>';
		}
		?>

		<section>
			<article>
				 <h2>Ajouter un commentaire:</h2>
					<form action="InsertSujet.php" method="post" autocomplete="off">
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