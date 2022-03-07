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
   <h1>CHATROOM</h1><!--Nom au dessus de l'onglet-->
      <a id="connexion" class="bouton" href="connexion.html">  <!--A modifier--><span>Se connecter</span></a>
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
</div>

<section>
	<article>
	<iframe width="560" height="315" src="img/inscription.mp4" title="Forum" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<p class="p_centre"><a class="bouton" href="#"><span>SANTE</span></a></p>
	<p class="p_centre"><a class="bouton" href="#"><span>CHATROOM</span></a></p>
	</ul>
	<a href="./insert_sujet.php">Insérer un sujet</a>
<br />

<?php
$bdd = new PDO ("mysql:host=localhost;dbname=adictab2;charset=utf8",'root','root');
?>
<?php
		<table border =1>
				<tr>
					<th>id</th>
					<th>nom</th>
					<th>quant</th>
					<th>prix</th>
					<th>lien</th>
				</tr>

				$rep =$bdd->query('select idPost, intitule ,date , heure, position from post');
				while($ligne = $rep -> fetch()){
					echo "<tr><td>".
					$ligne['idPost']."</td><td>".
					$ligne['intitule']."</td><td>".
					$ligne['date']."</td><td>".
					$ligne['heure']."euros"."</td></tr>";
				}
				$rep ->closeCursor();
?>
	
</article>
</section>

		

<footer><!--PIED DE PAGE-->			
      <p id="mention">
	  <small>
	  <ul>
	  <li>LE Quentin / GRIBAL Clement / LE Maxime / DOS SANTOS Yohann</li>
	  <li>Copyright ADDICTAB - Tous droits réservés.</li></small></p>
 </footer> 
<script type="text/javascript" src="../javascript/affichermasquer.js">
</body>

</html>
