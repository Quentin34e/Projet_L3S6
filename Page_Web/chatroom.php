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
		<li id="espace_ban_g"><img src="../img/Addictab_logo3.png" alt="logo Addictab" /></li>
         <li class="onglet"><a href="Accueil.php">Accueil</a></li>
         <li class="onglet"><a href="#">Map</a></li>
         <li class="onglet"><a href="Forum.php">Forum</a></li>
         <li class="onglet"><a href="Page_Prevention.php">Prevention</a></li>       
         <li class="onglet"><a href="#">Ressources</a></li>
        
      </ul>
   </nav>
</div>

<section>
	<article>
	<iframe width="560" height="315" src="../img/inscription.mp4" title="Forum" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<p class="p_centre"><a class="bouton" href="#"><span>SANTE</span></a></p>
	<p class="p_centre"><a class="bouton" href="#"><span>CHATROOM</span></a></p>
	</ul>
	<a href="./insert_sujet.php">Insérer un sujet</a>
<br />

<?php

$base = mysql_connect ('localhost', 'root', 'root');
	mysql_select_db ('adictab2', $base) ;



	// on libère l'espace mémoire alloué pour cette reqête
	mysql_free_result ($req);
	// on ferme la connection à la base de données.
	mysql_close ();
	?>

	<!-- on ferme notre table html -->
	</table>
	<br /><br />
	<!-- on insère un lien qui nous permettra de rajouter des réponses à ce sujet -->
	<a href="./insert_reponse.php?numero_du_sujet=<?php echo $_GET['id_sujet_a_lire']; ?>">Répondre</a>
	<?php
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
