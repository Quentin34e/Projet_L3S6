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
		var q1=0; 
		var q2=0;
		var q3=0;
		var q4=0;
		var q5=0;
		var q6=0;
		var q7=0;
		var q8=0;
		var q9=0;
		var q10=0;
      function score(){ //Calcul du score au qcm
		score=q1+q2+q3+q4+q5+q6+q7+q8+q9+q10
		
        
      alert('Votre score est de  '+score+'/10');}
      
        
   </script>
        <script type="text/javascript" src="../javascript/affichermasquer.js"> </script><!-- utile pour le diapo-->
	</head>
	
	<body>
		<!--ENTETE DU SITE-->
	     <div id="bloc_page">
                <header>
                            <div id="entete"> 
   <h1>Accueil</h1><!--Nom au dessus de l'onglet-->
	  <?  session_start();
			if(isset($_SESSION['utilisateur'])){
				echo '<a id="connexion" class="bouton" href="déconnexion.php">  <span>Se déconnecter</span></a>'; //si connecter affiche le bouton deconnecter
			}
			else {
				echo '<a id="connexion" class="bouton" href="connexion.php">  <span>Se connecter</span></a>'; //sinon afficher le bouton connexion
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
		if(isset($_SESSION['utilisateur'])){ //affiche le profil une fois connecté
				
				echo '<section><article>';
				echo '<h2>Bienvenue</h2>';
				echo '<table id=forum>';
				echo '		<tr><td><table id=forum border=1 width=170px>';
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
				<h2>Présentation</h2>    
							
					<p> Nous sommes un groupe d'étudiants d'une licence MIASHS.<br>
					Cette année, nous devons travailler par groupe sur un projet qui a pour but<br>
					de créer un site internet fonctionnel.<br>
					Nous avons décider de traiter des données pour voir le taux de fumeurs d'un certain<br>
					nombre de pays en fonction d'une année précise.
					
					</p>

			</article>
		</section>
		<section>
			<article>
				<H2> Vrai / Faux</H2>
				<HR>
				<FORM NAME="qcm1">
				<B>Le QCM de 10 questions ci dessous à pour but de tester vos connaissances
				 sur le tabac.</B><BR>
				<BR>
				<u>1. Le seul risque encouru avec le tabac est le cancer du poumon.</u><BR>
				<BR><INPUT TYPE=radio NAME="choix1" onclick='q1=0'> Vrai</INPUT>
				<BR><INPUT TYPE=radio NAME="choix1" onclick='q1=1'> Faux</INPUT>
				<BR><BR>
				<u>2. La dépendance physique n’existe que si on fume plus de 5
				cigarettes par jour. </u><BR>
				<BR><INPUT TYPE=radio NAME="choix2" onclick='q2=0'> Vrai</INPUT>
				<BR><INPUT TYPE=radio NAME="choix2" onclick='q2=1'> Faux</INPUT>
				<BR><BR>
				<u>3. Les femmes qui fument pendant leur grossesse accouchent de
				bébés plus chétifs que la moyenne. </u><BR>
				<BR><INPUT TYPE=radio NAME="choix3" onclick='q3=1'> Vrai</INPUT>
				<BR><INPUT TYPE=radio NAME="choix3" onclick='q3=0'> Faux</INPUT>
				<BR><BR>
				<u>4. Fumer la chicha (le narguilé) est moins nocif que fumer la
				cigarette. </u><BR>
				<BR><INPUT TYPE=radio NAME="choix4" onclick='q4=0'> Vrai</INPUT>
				<BR><INPUT TYPE=radio NAME="choix4" onclick='q4=1'> Faux</INPUT>
				<BR><BR>
				<u>5. Il existe un seuil en dessous duquel fumer n’entraine aucun risque.</u><BR>
				<BR><INPUT TYPE=radio NAME="choix5" onclick='q5=0'> Vrai</INPUT>
				<BR><INPUT TYPE=radio NAME="choix5" onclick='q5=1'> Faux</INPUT>
				<BR><BR>
				<u>6. La cigarette électronique est inoffensive.</u><BR>
				<BR><INPUT TYPE=radio NAME="choix6" onclick='q6=0'> Vrai</INPUT>
				<BR><INPUT TYPE=radio NAME="choix6" onclick='q6=1'> Faux</INPUT>
				<BR><BR>
				<u>7. Chaque année la journée mondiale sans tabac a lieu le 31 mars.</u><BR>
				<BR><INPUT TYPE=radio NAME="choix7" onclick='q7=0'> Vrai</INPUT>
				<BR><INPUT TYPE=radio NAME="choix7" onclick='q7=1'> Faux</INPUT>
				<BR><BR>
				<u>8. Le tabac contient plus de 40 substances cancérigènes.</u><BR>
				<BR><INPUT TYPE=radio NAME="choix8" onclick='q8=1'> Vrai</INPUT>
				<BR><INPUT TYPE=radio NAME="choix8" onclick='q8=0'> Faux</INPUT>
				<BR><BR>
				<u>9. Quand on arrête de fumer, les bénéfices apparaissent dès la 1ère heure.</u><BR>
				<BR><INPUT TYPE=radio NAME="choix9" onclick='q9=1'> Vrai</INPUT>
				<BR><INPUT TYPE=radio NAME="choix9" onclick='q9=0'> Faux</INPUT>
				<BR><BR>
				<u>10. Le tabac tue beaucoup plus que la voiture dans les pays évolués.</u><BR>
				<BR><INPUT TYPE=radio NAME="choix10" onclick='q10=1'> Vrai</INPUT>
				<BR><INPUT TYPE=radio NAME="choix10" onclick='q10=0'> Faux</INPUT>
				<BR><BR>
				<INPUT TYPE="button" NAME="bouton" VALUE=" Voir mon score" ONCLICK="score();">
				<INPUT TYPE="button" NAME="bouton" VALUE=" Voir les réponses" ONCLICK="window.location.href='QuizzReponses.php'">
				</INPUT>
				</FORM>
				
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