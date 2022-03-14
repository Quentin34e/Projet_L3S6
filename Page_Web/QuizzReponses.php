<!DOCTYPE html>
<html>
	<head>
	 <meta charset="utf-8" />
     <link rel="stylesheet" href="style.css" />
     <title>Addictab</title>
        <script type="text/javascript" src="../javascript/affichermasquer.js"> </script><!-- utile pour le diapo-->
	</head>
	
	<body>
		<!--ENTETE DU SITE-->
	     <div id="bloc_page">
                <header>
                            <div id="entete"> 
   <h1>Réponses</h1><!--Nom au dessus de l'onglet-->
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
	<section>
		<article>
		<h2>Résultat du Vrai/Faux</h2><br>
		<p><strong>Question 1.</strong> Le seul risque encouru avec le tabac est le cancer du poumon. </p>
		<p><strong>Réponse : Faux</strong></p><br>
		<p><strong>Question 2.</strong> La dépendance physique n’existe que si on fume plus de 5 cigarettes par jour. </p>
		<p><strong>Réponse : Faux</strong></p><br>
		<p><strong>Question 3.</strong> Les femmes qui fument pendant leur grossesse accouchent de bébés plus chétifs que la moyenne. </p>
		<p><strong>Réponse : Vrai</strong></p><br>
		<p><strong>Question 4.</strong> Fumer la chicha (le narguilé) est moins nocif que fumer la cigarette. </p>
		<p><strong>Réponse : Vrai</strong></p><br>
		<p><strong>Question 5.</strong> Il existe un seuil en dessous duquel fumer n’entraine aucun risque. </p>
		<p><strong>Réponse : Faux</strong></p><br>
		<p><strong>Question 6.</strong> La cigarette électronique est inoffensive. </p>
		<p><strong>Réponse : Faux</strong></p><br>
		<p><strong>Question 7.</strong> Chaque année la journée mondiale sans tabac a lieu le 31 mars. </p>
		<p><strong>Réponse : Faux</strong></p><br>
		<p><strong>Question 8.</strong> Le tabac contient plus de 40 substances cancérigènes. </p>
		<p><strong>Réponse : Vrai</strong></p><br>
		<p><strong>Question 9.</strong> Quand on arrête de fumer, les bénéfices apparaissent dès la 1ère heure. </p>
		<p><strong>Réponse : Vrai</strong></p><br>
		<p><strong>Quetions 10.</strong> Le tabac tue beaucoup plus que la voiture dans les pays évolués. </p>
		<p><strong>Réponse : Vrai</strong></p>
		<br><br>
		<p><table border=1 align="center">
		<tr>
		<th align="center">Entre 0 et 2</th>
		<th align="center">Entre 3 et 4</th>
		<th align="center">Entre 5 et 6</th>
		<th align="center">Entre 7 et 8</th>
		<th>Au dessus de 8</th>
		</tr>
		<tr>
		<th><p>Tu n'as jamais </p>
		<p>entendu parler de</p>
		<p>cigarettes ?</p></th>
		<th><p>Il te faut réviser sur notre</p>
		<p>site en allant sur la page</p> 
		<p><strong><a href="Page_Prevention.php">prévention</a></strong> ou la </p>
		<p>page <strong><a href="Ressources.php">ressources</a></strong></p></th>
		<th><p>Pas mal !</p></th>
		<th><p>Tu te débrouilles bien !</p></th>
		<th><p>T'es bien renseigné !</p></th>
		</tr>
		</table></p>
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