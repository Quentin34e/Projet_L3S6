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
      function score()
	  { 
		var s=0;
        if(document.qcm1.choix3.checked){
			s=s+1}      
        if (document.qcm1.choix5.checked){
			s=s+1;}		
		if (document.qcm1.choix7.checked){
			s=s+1;}		
      return s;
	  }
    </script>
	<script language="javascript">
	function lancement()
	{
		var a =score();
		var b = 3;
		if (a==b){return window.location.href='forumVerif.php';}
		else{alert('Vous n avez pas coché toutes les cases !');
			return window.location.href='charte.php';}
	}
	</script>
   <script type="text/javascript" src="../javascript/affichermasquer.js"> </script><!-- utile pour le diapo-->
	</head>
	
<body>
<!--ENTETE DU SITE-->
<div id="bloc_page">
 <header>
 <div id="entete"> 
 <h1>CHARTE</h1><!--Nom au dessus de l'onglet-->
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
		</section>
		<section>
			<article>
				<H2> Charte du Comportement</H2>
				<HR>

				<FORM NAME="qcm1">
				<B>RESPECT D'AUTRUI</B><BR>
				<BR>Je m'engage<BR>
				
				1. Ne pas tenir de propos injurieux, insultants, déplacés, grossiers et 
				tout particulièrement éviter les propos sexistes et ou salaces et les 
				comportements déplacés. 
				<BR><INPUT TYPE=CHECKBOX NAME="choix3" VALUE=1> OUI</INPUT>
				<BR><BR>
				2. Adopter une attitude bienveillante envers autrui dans tous cadres 
				possibles. Avoir un comportement respectueux et tolérant.
				<BR><INPUT TYPE=CHECKBOX NAME="choix5" VALUE=1> OUI</INPUT>
				<BR><BR>
				3. Ne pas harceler qui que ce soit ni moralement, ni sexuellement, étant 
				entendu que c’est le ou la destinataire du propos ou comportement qui est 
				à même de juger, si il ou elle le ressent comme insultant ou déplacé.  
				<BR><INPUT TYPE=CHECKBOX NAME="choix7" VALUE=1> OUI</INPUT>
				<BR><BR>

				
				<INPUT TYPE="button" NAME="bouton" VALUE="JE M'ENGAGE" ONCLICK="lancement();">
				<INPUT TYPE="button" NAME="bouton" VALUE="JE REFUSE" ONCLICK="window.location.href='charte.php'">
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
		 </div>
	</body>
</html>