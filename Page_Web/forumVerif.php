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
<section>
			<article>
				 <h2>Ajouter un topic:</h2>
					<form action="insertSujet.php" method="post" autocomplete="off">
					<p>
					Intitulé :
					<input type="text" name="intitule" value=<?php echo "'".$_POST['intitule']."'"; ?> />
					</p>
					<p>
					Description :
					<input type="text" name="description" value=<? echo "'".$_POST['description']."'"; ?> />
					</p>
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

			</article>
		</section>



<section>
	
		<article>
	<h2>TENDANCE</h2>
	<ul><p class="p_centre"><a class="bouton" href="actualite.php"><span>DERNIERES ACTUALITES</span></a></p></li>
		<p class="p_centre"><a class="bouton" href="topsujet.php"><span>TOP DES SUJETS</span></a></p></li>
		<p class="p_centre"><a class="bouton" href="chatroom.php"><span>DISCUSSION</span></a></p></li>
	
	</ul>
	<table id="forum" border="30" cellpadding="15">
		<tr>
		<th>rubrique</th>
		<th>date</th>
		<th>sujet</th>
		</tr>
		<tr>
		<td>sante</td>
		<td>23/03/2022</td>
		<td>Les effets du tabac sur les poumons humains</td>
		</tr>
		<tr>
		<td>sante</td>
		<td>21/02/2022</td>
		<td>Depuis 2 semaines je n'ai pas touché à une cigarette</td>
		</tr>
		<tr>
		<td>sante</td>
		<td>01/12/2020</td>
		<td>Quels pays a le prix le moins cher pour un paquet de cigarette ?</td>
		</tr>
		<td>sante</td>
		<td>03/12/2020</td>
		<td>Apres combien de temps voit-on les effets de ne plus fuùer ?</td>
		</tr>
		</table>
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