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
   <h1>Etude : La France</h1><!--Nom au dessus de l'onglet-->
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
         <li class="onglet"><a href="Carte_interactive.php">Map</a></li>
         <li class="onglet"><a href="Forum.php">Forum</a></li>
         <li class="onglet"><a href="Page_Prevention.php">Prevention</a></li>       
         <li class="onglet"><a href="Ressources.php">Ressources</a></li>
        
      </ul>
   </nav>
</div><!--FIN ENTETE SITE-->
				<section>                 
                    <article>
                        <h2>Etude : La France</h2>
					</article>
					<article>
						<p><u>Taux de fumeurs sur la population en France :</u></p>
                        <picture class="photo_article"><img src="../img/TauxFumeurs_France.png" /></picture>
                        
                        <p> Le graphique ci dessus représente l'évolution du taux de fumeurs en France.</p>
						<p>Depuis les années 1988, on peut constater qu'il y a toujours eu environ un quart de la population qui fume.</p> 
						<p> Néanmoins on remarque une hausse dans les années 1990 puis une baisse.</p>
						<p>On peut davantage constater cette baisse depuis les années 2016 puisque <i>5%</i> ont arrêté.</p>
						<p>Ceci peut s'expliquer par l'augmentation des prix des paquets de cigarettes,
						de la sensibilisation aux risques et surtout à cause de l'inflation</p>
						<p>En effet de moins en moins de personnes continuent de fumer.</p> 
						<br>
					</article>
					<article>
						<p><u>Taux de fumeurs sur la population masculine en France :</u></p>
						<picture class="photo_article"><img src="../img/TauxFumeursHomme_France.png" /></picture>
						<p>En 1988, le taux de fumeurs parmi les hommes était de <i>36%</i>.</p>
						<p>Par la suite, ce taux a augmenter pour atteindre son maximum de <i>39%</i> en 1990 et 1991.</p> 
						<p>Il a ensuite diminué jusqu'à <i>30%</i> en 1996 avant de remonter aux alentours de <i>34%</i> pendant une vingtaine d'années.</p>
						<p>Puis depuis 2015, il a diminué de <i>5,6%</i> en 4ans puisqu'en 2019 il ne fait plus que <i>27,5%</i>.</p>
						<br>
					</article>
					<article>
						<p><u>Taux de fumeuses sur la population féminine en France :</u></p>
                        <picture class="photo_article"><img src="../img/TauxFumeursFemme_France.png" /></picture>
						<p> Le graphique ci dessus représente l'évolution du taux de fumeuses sur la population féminine en France.</p>
						<p>En 1988, on remarque que le taux est plutôt bas moins d'une femme sur cinq fume en France.</p> 
						<p>On voit cependant qu'il augmente de <i>4%</i> en 2ans puis pendant une dizaine d'années va rester aux alentours de <i>21-22%</i>.</p>
						<p>Le taux augmente nettement en 1an en 2000 puisqu'il passe de <i>22%</i> à <i>26,6%</i> (+<i>4,4%</i>).<p>
						<p>Il augmente et redescend jusqu'à arriver en 2019 à <i>20,7%</i>.</p> 
						<br>
					</article>	
					<article>
						<p><u>Taux de fumeur(ses) parmi les hommes/femmes en France :</u></p>
                        <picture class="photo_article"><img src="../img/ComparaisonHommeFemme.png" /></picture>
						<p> Le graphique ci dessus représente la différence d'évolution du taux entre les hommes et les femmes en France.</p>
						<p>Depuis 1988, on peut nettement détecter que le taux de fumeurs a toujours été supérieur au taux de fumeuses.</p> 
						<p>On peut quand même voir que lorsqu'il y a une baisse chez les hommes il y a aussi une baisse chez les femmes</p>
						<p>comme c'est le cas en 1996 ou bien sur la période de 2016 à nos jours.<p>
						<p>Ceci peut être expliquer par un phénomène économique comme une crise financière ou sanitaire.</p>
                    </article>
					<article>
						<h2>Ce qu'il faut retenir</h2>
						<p><strong>3 choses importantes à retenir</strong></p>
						<ol>
							<li>Une baisse ou une hausse du taux de fumeurs peut être expliquée par des phénomènes économiques comme une crise sanitaire ou financière.</li>
							<li>En France, le taux de fumeurs à toujours été plus élevé que le taux de fumeuses.</li>
							<li>Le taux de fumeurs n'a jamais atteint les 40% depuis 1988.</li>
						</ol>
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