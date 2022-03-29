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
				header('Location: forumVerif.php');
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
         <li class="onglet"><a href="test.php">Map</a></li>
         <li class="onglet"><a href="Forum.php">Forum</a></li>
         <li class="onglet"><a href="Page_Prevention.php">Prevention</a></li>       
         <li class="onglet"><a href="Ressources.php">Ressources</a></li>
        
      </ul>
   </nav>
</div>
	


<section>
	<article>
	
		 <?  session_start();
			if(isset($_SESSION['utilisateur'])){
					echo '<p>NOUVEAU POST !</br>
							Le Formulaire est juste en-dessous :</br>
						  </p>
							<p class="p_centre"><a class="bouton" href="charte.php"><span>ECRIRE UN NOUVEAU SUJET</span></a></p>
							</p>';
			}
			else {
					echo '<h2>NOUVEAU SUJET A ECRIRE ?</h2>
						<p> IL FAUT ETRE IDENTIFIE ET ETRE CONNECTE<br>
							Tu souhaites participer aux débats et intéragir avec la communauté ?<br>
							Inscris-toi !<br>
						<p class="p_centre"><a class="bouton" href="connexion.php"><span>CONNEXION</span></a></p></br>
						<p class="p_centre"><a class="bouton" href="inscription_site.php"><span>INSCRIPTION</span></a></p></br>
						';
			}
		?>	
		
		
	</article>
		<article>
	<h2>TENDANCE</h2>
	<ul><p class="p_centre"><a class="bouton" href="charte.php"><span>DERNIERES ACTUALITES</span></a></p></li>
		<p class="p_centre"><a class="bouton" href="charte.php"><span>TOP DES SUJETS</span></a></p></li>
		<p class="p_centre"><a class="bouton" href="charte.php"><span>DISCUSSION</span></a></p></li>
		<?  session_start();
			if(isset($_SESSION['utilisateur'])){
					echo '<p Sclass="p_centre"><a class="bouton" href="charte.php"><span>ECRIRE UN NOUVEAU SUJET</span></a></p></li>';
		}
		else
		{
			echo '<p class="p_centre"><a class="bouton" href="charte.php"><span>RUBRIQUE</span></a></p></li>';
		}
	?>	
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
