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
   <h1>Supplémentaires</h1><!--Nom au dessus de l'onglet-->
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
					<p><u>Contact :</u></p>
					<p>Pour avoir des informations sur le tabac et être accompagné, consulter le site Tabac Info </p>
					<p>Service ou appeler le 39 89 accessible du lundi au samedi de 8h à 20h, appel non surtaxé. </p>
					<ul id="liste_contact">
						<li>Numéro à appeler: 39 89 <img src="../img/Logo_Telephone.jpg" alt="image téléphone" /></li>
                </article>
				<article>
					<h3>Vidéos explicatives</h3>
					<p>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/iJ9AuzXfJBM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</p>
					<p><u>La HAS vous parle de l'arrêt du tabac. Durée 2min06 <u></p>
					<br><br>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/VkxNX1GD-N4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<p><u>Cash investigation - Industrie du tabac : la grande manipulation (Intégrale). Durée 1h55 <u></p>
				</article>
				<article>
					<p><u>Liens accessibles :</u></p>
					<p>La ligue contre le cancer (Sensibilisation)</p> 
					<p><a href="https://www.ligue-cancer.net/article/25940_tabac-et-cancer?gclid=Cj0KCQiAjc2QBhDgARIsAMc3SqSIhyfY29gJ5wRvzyq3oOt_6VrA9guOSugik6CrlFigho12rYRo_aIaAjqGEALw_wcB">Me redidiriger vers le site</a></p>
					<br>
					<p>Mon cancer (accompagnements de professionnels)</p>
					<p><a href="https://mon-cancer.com/articles-blog/professionnels-accompagner-cancer/">Me redidiriger vers le site</a></p>
					<br>
					<p>Dispositif d'accompagnement à l'arret du tabac </p>
					<p><a href="https://solidarites-sante.gouv.fr/prevention-en-sante/addictions/article/dispositif-d-accompagnement-a-l-arret-du-tabac">Me redidiriger vers le site</a></p>
					<br>
					<p>Doctissimo : 10 conseils pour arreter de fumer seul(e)</p>
					<p><a href="https://www.doctissimo.fr/html/dossiers/tabac/sa_8060_sevrage_tabac_seul.htm">Me redidiriger vers le site</a></p>
				<article>
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