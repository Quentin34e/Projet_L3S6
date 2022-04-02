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
 <div id="bloc_page">
                <header>
                            <div id="entete"> 
   <h1>Refus</h1><!--Nom au dessus de l'onglet-->
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
<!--ENTETE DU SITE-->
<section>
			<article>
			<h2>Echec</h2>
				<p>Votre sujet n'a pas été ajouté.</br>
				Vérifier votre saisie dans Rubrique et description</br>
				Verifier que l'information ecrite dans Rubrique</br>
				Soit l'un des 3 termes suivants :</br>
				</br>sante
				</br>experience
				</br>general</p>
				<p>Si ce n'est pas le cas veuillez réitérer votre action.</p>
				<table>
				  <h2>Ajouter un topic:</h2>
					<form action="insertSujet.php" method="post" autocomplete="off">
					<p>
					Rubrique :
					<input type="text" name="intitule" value=<?php echo "'".$_POST['intitule']."'"; ?> />
					<br/>indiquer : sante ou general ou experience</p>
					<p>
					Description :
					<input type="text" name="description" value=<?php echo "'".$_POST['description']."'"; ?> />
					<br/>maximum : 300 caractères   </p>
					<?  session_start();
					if(isset($_SESSION['utilisateur'])){
						echo '<p>
					<button class="bouton" type="submit" class="btn btn-primary"><span>Envoyer</span></button>
					</p>';}
					else {
						echo '<p class="p_centre"><a class="bouton" href="connexion.php"><span>connexion</span></a></p></li>';
						}
					?>	
					</form>
				</table>
					
			</article>
</section>

 <footer><!--PIED DE PAGE-->
            

			<h2 align="center">Contact</h2>
				<p align="center"><a href="tel:06XXXXXXXX"><img src="../img/Logo_Telephone.jpg" alt="image téléphone" position="relative" width="60px" margin=" 15px 15px 15px 15px"top="5px" /></a>
				<a href="mailto:addictab123@gmail.com"><img src="../img/email.jpg" alt="image enveloppe" position="relative" width="60px" margin=" 15px 15px 15px 15px"top="5px"/></a>
				<a href="https://www.facebook.com/profile.php?id=100078106309466"><img src="../img/Logo_facebook.png" alt="logo facebook" position="relative" width="60px" margin=" 15px 15px 15px 15px"top="5px"/></a>
			<p id="mention"><small>Quentin / Clement / Maxime / Yohann<br />Copyright ADDICTAB - Tous droits réservés.</small></p>
			<br><br>

          
</footer> <!--FIN PIED DE PAGE-->
		 
	</body>
	
</html>