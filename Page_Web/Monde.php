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
   <h1>Etude : Les fumeurs dans le monde</h1><!--Nom au dessus de l'onglet-->
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
						<p><u>Histogramme montrant les différents taux des pays fumeurs en 2020:</u></p>
                        <picture class="photo_article"><img src="../img/HistTauxPays2020.png" /></picture>
						<p>Les 7 pays étudiés dans cet histogramme sont la Finlande (FIN), l'Islande (ISL), le Luxembourg (LUX),</p>
						<p>la Nouvelle-Zélande (NZL), la Norvège (NOR), l'Espagne (ESP) et l'Estonie (EST).</p> 
						<p>Le bleu représente le taux de fumeurs chez les hommes;<p>
						<p>Le orange représente le taux de fumeuses chez les femmes;<p>
						<p>Le gris représente le taux de fumeurs sur la population.</p><br>
						<p>On peut voir ici que dans tous les pays sauf la Norvège et l'Islande le taux</p> 
						<p>de fumeurs est plus important que le taux de fumeuses.</p> 
						<p>On peut ausi voir que la Norvège a une proportion de fumeurs chez les hommes égales à la proportion</p> 
						<p>de fumeuses chez les femmes et qu'elle est aussi égale à la proportion de fumeurs sur la population totale.</p> 
						<p>On voit clairement que l'Estonie à des taux supérieurs à l'Islande la norvège et l'Islande.</p><br>
						<p>Grâce à cet histogramme on peut observer que la Norvège et l'Islande ont été les pays avec les plus petits taux de fumeurs.</p> 
						<br>
					</article>	
					<article>
						<p><u>Taux de fumeurs sur la population masculine au Japon :</u></p>
                        <picture class="photo_article"><img src="../img/TauxFumeursHomme_Japon.png" /></picture>
						<p>On voit que le taux de fumeurs hommes en 1965 atteint les <i>82%</i> ce qui est un record mondial (plus de 8hommes sur 10 fument au Japon en 1965).</p>
						<p>Cependant depuis ce jour le taux n'a fait que de chuter pour atteindre les <i>26%</i> en 2019.</p> 
						<p>Néanmoins, il reste à des valeurs similaires au taux des hommes en France.</p>
						<p>On peut comparer cette courbe à celle des fumeurs hommes en France.<p>
						<p>En effet on voit aussi cette baisse du taux de fumeurs aux alentours des années 1995.</p>
						<p>On peut peut être expliquer ces baisses à cause d'un phenomène mondial.</p>
                    </article>
					<article>
						<h2>Ce qu'il faut retenir</h2>
						<p><strong>3 choses importantes à retenir</strong></p>
						<ol>
							<li>Une baisse ou une hausse du taux de fumeurs atteignant tous les pays peut être expliquée par un phénomène mondial</li>
							<li>Les taux sont plutôt ressemblants d'un pays à l'autre (avec quelques exceptions)</li>
							<li>Le taux de fumeurs hommes en 1965 (84%) est le taux le plus jamais observé depuis 1965.</li>
						</ol>
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