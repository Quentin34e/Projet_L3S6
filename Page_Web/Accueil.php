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
        if(document.qcm1.choix1.checked){
			s=s+1}      
        if (document.qcm1.choix4.checked){
			s=s+1;}		
		if (document.qcm1.choix5.checked){
			s=s+1;}		
		if (document.qcm1.choix7.checked){
			s=s+1;}			
		if (document.qcm1.choix10.checked){
			s=s+1;}
		if (document.qcm1.choix12.checked){
			s=s+1;}
		if (document.qcm1.choix14.checked){
			s=s+1;}
		if (document.qcm1.choix15.checked){
			s=s+1;}
		if (document.qcm1.choix17.checked){
			s=s+1;}
		if (document.qcm1.choix19.checked){
			s=s+1;}
      alert('Votre score est de  '+s+'/10');}
      
        
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
				1. Le seul risque encouru avec le tabac est le cancer du poumon<BR>
				<B>Réponses :</B>
				<BR><INPUT TYPE=CHECKBOX NAME="choix1" VALUE=0> Vrai</INPUT>
				<BR><INPUT TYPE=CHECKBOX NAME="choix2" VALUE=1> Faux</INPUT>
				<BR><BR>
				2. La dépendance physique n’existe que si on fume plus de 5
				cigarettes par jour. 
				<BR><INPUT TYPE=CHECKBOX NAME="choix3" VALUE=0> Vrai</INPUT>
				<BR><INPUT TYPE=CHECKBOX NAME="choix4" VALUE=1> Faux</INPUT>
				<BR><BR>
				3. Les femmes qui fument pendant leur grossesse accouchent de
				bébés plus chétifs que la moyenne. 
				<BR><INPUT TYPE=CHECKBOX NAME="choix5" VALUE=1> Vrai</INPUT>
				<BR><INPUT TYPE=CHECKBOX NAME="choix6" VALUE=0> Faux</INPUT>
				<BR><BR>
				4. Fumer la chicha (le narguilé) est moins nocif que fumer la
				cigarette. 
				<BR><INPUT TYPE=CHECKBOX NAME="choix7" VALUE=1> Vrai</INPUT>
				<BR><INPUT TYPE=CHECKBOX NAME="choix8" VALUE=0> Faux</INPUT>
				<BR><BR>
				5. Il existe un seuil en dessous duquel fumer n’entraine aucun risque
				<BR><INPUT TYPE=CHECKBOX NAME="choix9" VALUE=0> Vrai</INPUT>
				<BR><INPUT TYPE=CHECKBOX NAME="choix10" VALUE=1> Faux</INPUT>
				<BR><BR>
				6. La cigarette électronique est inoffensive.
				<BR><INPUT TYPE=CHECKBOX NAME="choix11" VALUE=1> Vrai</INPUT>
				<BR><INPUT TYPE=CHECKBOX NAME="choix12" VALUE=0> Faux</INPUT>
				<BR><BR>
				7. Chaque année la journée mondiale sans tabac a lieu le 31 mars
				<BR><INPUT TYPE=CHECKBOX NAME="choix13" VALUE=0> Vrai</INPUT>
				<BR><INPUT TYPE=CHECKBOX NAME="choix14" VALUE=1> Faux</INPUT>
				<BR><BR>
				8. Le tabac contient plus de 40 substances cancérigènes.
				<BR><INPUT TYPE=CHECKBOX NAME="choix15" VALUE=1> Vrai</INPUT>
				<BR><INPUT TYPE=CHECKBOX NAME="choix16" VALUE=0> Faux</INPUT>
				<BR><BR>
				9. Quand on arrête de fumer, les bénéfices apparaissent dès la 1ère heure.
				<BR><INPUT TYPE=CHECKBOX NAME="choix17" VALUE=1> Vrai</INPUT>
				<BR><INPUT TYPE=CHECKBOX NAME="choix18" VALUE=0> Faux</INPUT>
				<BR><BR>
				10. Le tabac tue beaucoup plus que la voiture dans les pays évolués.
				<BR><INPUT TYPE=CHECKBOX NAME="choix19" VALUE=1> Vrai</INPUT>
				<BR><INPUT TYPE=CHECKBOX NAME="choix20" VALUE=0> Faux</INPUT>
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
				<a href="mailto:addictab123@gmail.com"><img src="../img/email.png" alt="image enveloppe" position="relative" width="60px" margin=" 15px 15px 15px 15px"top="5px"/></a>
				<a href="https://www.facebook.com/profile.php?id=100078106309466"><img src="../img/Logo_facebook.png" alt="logo facebook" position="relative" width="60px" margin=" 15px 15px 15px 15px"top="5px"/></a>
			<p id="mention"><small>Quentin / Clement / Maxime / Yohann<br />Copyright ADDICTAB - Tous droits réservés.</small></p>
			<br><br>

          
		 </footer> <!--FIN PIED DE PAGE-->
	</body>
</html>