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
   <h1>Valide</h1><!--Nom au dessus de l'onglet-->
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
			<h2>Mise à Jour de la base donnée.</h2>
				<p>Félicitation votre commentaire a été ajouté !</p> 
				<p><a class="bouton" href="forumVerif.php"><span>RETOUR</span></a></p>
					<table id="forum" border="30" cellpadding="15">
					<tr>
					<th>Description</th>
					<th>Rubrique</th>
					<th>IdPost</th>
					</tr>
					<?php
					require ('bd.php');
					$PDO = getBD();
					$re= $PDO -> query('select * from post ORDER by idPost DESC LIMIT 5');
					while ($mat = $re-> fetch()){
						echo '<tr><td>'.$mat['description'].'</td>';
						echo '<td>'.$mat['intitule'].'</td>';
						echo '<td>'.$mat['idPost'].'</td></br>';
					}
					$re ->closeCursor();
					?>
					</table>
			</article>
</section>

 <footer><!--PIED DE PAGE-->
            

			<h2 align="center">Contact</h2>
				<p align="center"><a href="tel:06XXXXXXXX"><img src="../img/Logo_Telephone.jpg" alt="image téléphone" position="relative" width="60px" margin=" 15px 15px 15px 15px"top="5px" /></a>
				<a href="mailto:addictab123@gmail.com"><img src="../img/email.jpg" alt="image enveloppe" position="relative" width="60px" margin=" 15px 15px 15px 15px"top="5px"/></a><a href="https://www.facebook.com/profile.php?id=100078106309466"><img src="../img/Logo_facebook.png" alt="logo facebook" position="relative" width="60px" margin=" 15px 15px 15px 15px"top="5px"/></a>
			<p id="mention"><small>Quentin / Clement / Maxime / Yohann<br />Copyright ADDICTAB - Tous droits réservés.</small></p>
			<br><br>

          
</footer> <!--FIN PIED DE PAGE-->
		 
	</body>
	
</html>