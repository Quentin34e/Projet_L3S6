<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Map Example</title>
    <script src="mapdata.php"></script>
    <script src="worldmap.php"></script>
	<link rel="stylesheet" href="style.css" />
  </head>
	<body>
	<div id="bloc_page">
                <header>
                            <div id="entete"> 
   <h1>Map interactive</h1><!--Nom au dessus de l'onglet-->
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
</div>
		<div>
		<article>
			<section>
				<h2>Carte interactive du monde</h2><br>
				<div style="max-width: 1000px"> <!-- Keep map above fold -->
					<div id="map"></div><br>
				</div>
				<div>Please read the <a href="http://simplemaps.com/docs">documentation</a> to learn how to customize this map.</div>
				</div>
			</section>
		</article>
		<article>
			<section>
				<h2>Liste des pays</h2>
				<ul> 
				<!--LISTE DES Pays que l'on a dans nos données-->
					<li><a>France</a></li>
					<li><a>Japon</a></li>
					<li><a>Norvège</a></li>
					<li><a>etc</a></li>       
					<li><a>...</a></li>
				</ul>
			</section>
		</article>
	</body>
	<footer><!--PIED DE PAGE-->
            

			<h2 align="center">Contact</h2>
				<p align="center"><a href="tel:06XXXXXXXX"><img src="../img/Logo_Telephone.jpg" alt="image téléphone" position="relative" width="60px" margin=" 15px 15px 15px 15px"top="5px" /></a>
				<a href="mailto:addictab123@gmail.com"><img src="../img/email.png" alt="image enveloppe" position="relative" width="60px" margin=" 15px 15px 15px 15px"top="5px"/></a>
				<a href="https://www.facebook.com/profile.php?id=100078106309466"><img src="../img/Logo_facebook.png" alt="logo facebook" position="relative" width="60px" margin=" 15px 15px 15px 15px"top="5px"/></a>
			<p id="mention"><small>Quentin / Clement / Maxime / Yohann<br />Copyright ADDICTAB - Tous droits réservés.</small></p>
			<br><br>

          
		 </footer>
</html>
      
    

