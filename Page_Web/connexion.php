<!DOCTYPE html>
<?php
session_start();
?>
<html>
	<head>
	 <meta charset="utf-8" />
     <meta name="keywords" content="tabac, cigarettes, conséquence, addictab" />
     <meta property="og:site_name" content="Addictab" />
     <meta property="og:locale" content="fr_FR" />
     <meta name="description" content="Site officiel Addictab: Vous trouverez sur le site un grand nombre d'informations. Vous pourrez connaître les différentes conséquences du tabac et vous pourrez intéragir avec d'autres utilisateurs"/>
     <link rel="stylesheet" href="style.css" />
 
     <title>Addictab</title>
        <script type="text/javascript" src="../javascript/affichermasquer.js"> </script><!-- utile pour le diapo-->
		<script>
						function Afficher(){ 
						var input1 = document.getElementById("password");
						var input2 = document.getElementById("oeil");
						if (input1.type === "password"){ 
							input1.type = "text";
							input2.src = "../img/OeilOuvert.png";
						} 
						else{ 
							input1.type = "password";
							input2.src = "../img/OeilFerme.png"; 
						} 
						} 
		</script>
	</head>
	
	<body>
		<!--ENTETE DU SITE-->
	     <div id="bloc_page">
                <header>
                            <div id="entete"> 
   <h1>Se connecter</h1><!--Nom au dessus de l'onglet-->
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
         <li class="onglet"><a href="index.php">Forum</a></li>
         <li class="onglet"><a href="Page_Prevention.php">Prevention</a></li>       
         <li class="onglet"><a href="Ressources.php">Ressources</a></li>
        
      </ul>
   </nav>
</div><!--FIN ENTETE SITE-->

		<section>
			<article>
				<h2>Connectez-vous</h2> 
					<form action="connecter.php" method="post">    <p class="p_centre">
						<label for="email" class="form-label">Email utilisé lors de la création de votre compte:</label><br />
						<input type="email" class="form-control" id="email" name="mail" aria-describedby="email-help" placeholder="you@exemple.com">
					</p>
					<p class="p_centre">
						<label for="password" class="form-label">Mot de passe:</label><br />
						<br><img src="../img/OeilFerme.png" id="oeil" width="60px" onclick="Afficher()"><br>
						<input type="password" class="form-control" id="password" name="mdp1">
					</p>
					<p class="p_centre">
						<button class="bouton" type="submit" class="btn btn-primary"><span>Connexion</span></button>
					</p>
				</form>
				<p class="p_centre"><a class="bouton" href="recup_pass.php"><span>Vous avez oublié votre mot de passe</span></a></p>
				<p class="p_centre"><a class="bouton" href="inscription_site.php"><span>Vous n'êtes pas encore inscrit</span></a></p>
				<p class="p_centre"><a class="bouton" href="Accueil.php"><span>Retour</span></a></p>
				

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