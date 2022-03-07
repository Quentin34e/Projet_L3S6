<!DOCTYPE html>
<html>
	<head>
	 <meta charset="utf-8" />
     <meta name="keywords" content="tabac, cigarettes, conséquence, addictab" />
     <meta property="og:site_name" content="Addictab" />
     <meta property="og:locale" content="fr_FR" />
     <meta name="description" content="Site officiel Addictab: Vous trouverez sur le site un grand nombre d'informations. Vous pourrez connaître les différentes conséquences du tabac et vous pourrez intéragir avec d'autres utilisateurs"/>
     <link rel="stylesheet" href="style.css" />
	 
	 <?php
	if($_POST['mdp1']==$_POST['mdp2'] && $_POST['n']!="" && $_POST['p']!="" && $_POST['adr']!="" && $_POST['num']!="" && $_POST['mail']!="" && $_POST['mdp1']!="" && $_POST['mdp2']!="") {
	header('Location: file:///C:/Users/cleme/OneDrive/Documents/Miashs/L3/Projet/Projet_L3S6/Accueil.html');
	exit();
	}
	else{
	header('Location: file:///C:/Users/cleme/OneDrive/Documents/Miashs/L3/Projet/Projet_L3S6/inscription_site.html?n='].$_POST['n'].'&p='.$_POST['p'].'&mail='.$_POST['mail']);
	echo $_POST['n'];
	echo $_POST['p'];
	echo $_POST['mail'];
	exit();
	}
	?>
 
     <title>Addictab</title>
        <script type="text/javascript" src="../javascript/affichermasquer.js"> </script><!-- utile pour le diapo-->
	</head>
	
	<body>
		<!--ENTETE DU SITE-->
	     <div id="bloc_page">
                <header>
                            <div id="entete"> 
   <h1>Accueil</h1><!--Nom au dessus de l'onglet-->
      <a id="connexion" class="bouton" href="#">  <!--A modifier--><span>Se connecter</span></a>
         <nav>
      <ul id="menu"> 
		<!--LISTE DES ONGLETS-->
		<li id="espace_ban_g"><img src="img/Addictab_logo3.png" alt="logo Addictab" /></li>
         <li class="onglet"><a href="Accueil.html">Accueil</a></li>
         <li class="onglet"><a href="#">Map</a></li>
         <li class="onglet"><a href="Forum.html">Forum</a></li>
         <li class="onglet"><a href="Page_Prevention.html">Prevention</a></li>       
         <li class="onglet"><a href="#">Ressources</a></li>
        
      </ul>
   </nav>
</div><!--FIN ENTETE SITE-->

		 <footer><!--PIED DE PAGE-->
            

			<a>Contact</a>
			<ul>
				<li>Mail : contact@addictab.fr</li>
				<li>Numéro de téléphone: 06 XX XX XX XX</li>
			</ul>
			<p id="mention"><small>LE Quentin / GRIBAL Clement / LE Maxime / DOS SANTOS Yohann<br />Copyright ADDICTAB - Tous droits réservés.</small></p>

          
		 </footer> <!--FIN PIED DE PAGE-->
		 </div>
	</body>
</html>