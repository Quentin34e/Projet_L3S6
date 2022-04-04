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
   <h1>Ressources</h1><!--Nom au dessus de l'onglet-->
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
			<article class="article_miniature">
                <a href="France.php">
                    <img src="../img/Drapeau_france1.png" alt="drapeau francais" />
                    <h2>Etude : Les fumeurs en France</h2>
                    <p>Nous avons analysé les données pour en ressortir des graphiques qui sont les suivants : ...</p>
                                    
                    </a>
					<p class="date">mardi 15 février 2022, 16:50</p>
			</article>
			<article class="article_miniature">
                <a href="Monde.php">
                    <img src="../img/Monde1.jpg" alt="image monde" />
                    <h2>Etude : Les fumeurs dans le monde</h2>
                    <p>Suite à l'étude des fumeurs en France, nous avons mené une autre étude sur les fumeurs dans le monde ...</p>
                                    
                    </a>
					<p class="date">mardi 22 février 2022, 14:30</p>
			</article>
			<article class="article_miniature">
                <a href="RessourcesSupp.php">
                    <img src="../img/Ressources.jpg" alt="image monde" />
                    <h2>Ressources Supplémentaires</h2>
                    <p>Des vidéos expliquatives, des contacts, des conseils, des dispositifs ...</p>
                                    
                    </a>
					<p class="date">mardi 1 mars 2022, 10:10</p>
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
		 </div>
	</body>
</html>