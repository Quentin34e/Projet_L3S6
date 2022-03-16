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
	 
</head>
<body>
<!--ENTETE DU SITE-->
<div id="bloc_page">
<header>
<div id="entete"> 
<h1>FORUM</h1><!--Nom au dessus de l'onglet-->
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
		<li id="espace_ban_g"><img src="../img/Addictab_logo3.png" alt="logo Addictab"/></li>
         <li class="onglet"><a href="Accueil.php">Accueil</a></li>
         <li class="onglet"><a href="Carte_interactive.php">Map</a></li>
         <li class="onglet"><a href="Forum.php">Forum</a></li>
         <li class="onglet"><a href="Page_Prevention.php">Prevention</a></li>       
         <li class="onglet"><a href="Ressources.php">Ressources</a></li>
        
      </ul>
   </nav>
</div>
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
		?>


<section>
	<article>
	
		 <?  session_start();
			if(isset($_SESSION['utilisateur'])){
					echo '<p>NOUVEAU POST !</br>
							Le Formulaire est juste en-dessous :</br>
						  </p>
							<p class="p_centre"><a class="bouton" href="ForumTopic.php"><span>ECRIRE UN NOUVEAU SUJET</span></a></p>
							</p>';
			}
			else {
				echo '<h2>NOUVEAU SUJET A ECRIRE ?</h2>
						<p> IL FAUT ETRE IDENTIFIE ET ETRE CONNECTE<br>
							Tu souhaites participer aux débats et intéragir avec la communauté ?<br>
							inscris-toi !<br>
						<p class="p_centre"><a class="bouton" href="inscription_site.php"><span>INSCRIPTION</span></a></p></br>';
			}
		?>	
		
		
	</article>
		<article>
	<h2>ACTUALITES</h2>
	<ul>
		<p class="p_centre"><a class="bouton" href="topsujet.php"><span>TOP DES SUJETS</span></a></p></li>
		<p class="p_centre"><a class="bouton" href="actualite.php"><span>DERNIERES ACTUALITES</span></a></p></li>
	</ul>
	</article>


	<article>
	<h2>RUBRIQUE</h2>
	<br>
	<iframe width="560" height="315" src="../img/inscription.mp4" title="Forum" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<ul>
	<?  session_start();
			if(isset($_SESSION['utilisateur'])){
					echo '<p class="p_centre"><a class="bouton" href="ForumTopic.php"><span>ECRIRE UN NOUVEAU SUJET</span></a></p></li>';
		}
		else
		{
			echo '<p class="p_centre"><a class="bouton" href="rubrique.php"><span>RUBRIQUE</span></a></p></li>';
		}
	?>	
	</ul>
	</article>
	<article>
	<h2>SALON DE DISCUSSION</h2>
	<p class="p_centre"><a class="bouton" href="chatroom.php"><span>DISCUSSION</span></a></p></li>
	</article>
	
</section>

		

 <footer><!--PIED DE PAGE-->
            

			<h2 align="center">Contact</h2>
				<p align="center"><a href="tel:06XXXXXXXX"><img src="../img/Logo_Telephone.jpg" alt="image téléphone" position="relative" width="60px" margin=" 15px 15px 15px 15px"top="5px" /></a>
				<a href="mailto:addictab123@gmail.com"><img src="../img/email.png" alt="image enveloppe" position="relative" width="60px" margin=" 15px 15px 15px 15px"top="5px"/></a>
				<a href="https://www.facebook.com/profile.php?id=100078106309466"><img src="../img/Logo_facebook.png" alt="logo facebook" position="relative" width="60px" margin=" 15px 15px 15px 15px"top="5px"/></a>
			<p id="mention"><small>Quentin / Clement / Maxime / Yohann<br />Copyright ADDICTAB - Tous droits réservés.</small></p>
			<br><br>

          
		 </footer> <!--FIN PIED DE PAGE-->
		 
	</body>
</html>