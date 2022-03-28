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
	<script language="javascript">
      function score(){ 
		var s=0;
        if(document.qcm1.choix3.checked){
			s=s+1}      
        if (document.qcm1.choix5.checked){
			s=s+1;}		
		if (document.qcm1.choix7.checked){
			s=s+1;}		
      alert('Vous avez validé '+s+'/3 cases.');}
    </script>
   <script type="text/javascript" src="../javascript/affichermasquer.js"> </script><!-- utile pour le diapo-->
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
							echo '</td>';
						echo '</tr>';
				echo '</table></article></section>';
		}
		?>
		<section>
			<article>
				<h2>SUJET SANTE</h2>    
							
					<p> 
					
					</p>

			</article>
		</section>
		<section>
		<article>
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
		<?  session_start();
			if(isset($_SESSION['utilisateur'])){
					echo '<p class="p_centre"><a class="bouton" href="ForumTopic.php"><span>ECRIRE UN NOUVEAU SUJET</span></a></p></li>';
		}
		else
		{
			echo '<p class="p_centre"><a class="bouton" href="rubrique.php"><span>TOPIC</span></a></p></li>';
		}
		?>	
		</article>
		
			<article>
				<h2>COMMENTAIRE SANTE</h2>    
							
					<p> 
					
					</p>

			</article>
		</section>
		<section>
		<article>
		<table border="1" cellpadding="15">
		<tr>
		<th>utilisateur</th>
		<th>date</th>
		<th>commentaire</th>
		</tr>
		<tr>
		<td>Jojo77</td>
		<td>23/03/2022</td>
		<td>Le tabac est le premier facteur de risque de cancer du poumon[..]</td>
		</tr>
		<tr>
		<td>isabouch34</td>
		<td>21/02/2022</td>
		<td>Merci à la communauté addictab grace à vous [..] </td>
		</tr>
		<tr>
		<td>xxp45Dit</td>
		<td>01/12/2020</td>
		<td>La Tunisie est un pays qui vend a des tarifs attractifs[..]</td>
		</tr>
		<td>sante.pro11</td>
		<td>03/12/2020</td>
		<td>Dès les 15 premières minutes, le rythme cardiaque ralentit[..]</td>
		</tr>
		</table>
		</article>
		</section>
		</section>
		 <footer><!--PIED DE PAGE-->
            

			<h2 align="center">Contact</h2>
				<p align="center"><a href="tel:06XXXXXXXX"><img src="../img/Logo_Telephone.jpg" alt="image téléphone" position="relative" width="60px" margin=" 15px 15px 15px 15px"top="5px" /></a>
				<a href="mailto:addictab123@gmail.com"><img src="../img/email.png" alt="image enveloppe" position="relative" width="60px" margin=" 15px 15px 15px 15px"top="5px"/></a>
				<a href="https://www.facebook.com/profile.php?id=100078106309466"><img src="../img/Logo_facebook.png" alt="logo facebook" position="relative" width="60px" margin=" 15px 15px 15px 15px"top="5px"/></a>
			<p id="mention"><small>Quentin / Clement / Maxime / Yohann<br />Copyright ADDICTAB - Tous droits réservés.</small></p>
			<br><br>

          
		 </footer> <!--FIN PIED DE PAGE-->
		 </div>
	</body>
</html>