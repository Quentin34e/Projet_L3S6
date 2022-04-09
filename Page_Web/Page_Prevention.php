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
        <script type="text/javascript" src="../javascript/affichermasquer.js"> </script><!-- utile pour le diapo-->
	</head>
	
	<body>
		<!--ENTETE DU SITE-->
	     <div id="bloc_page">
                <header>
                            <div id="entete"> 
   <h1>Prévention</h1><!--Nom au dessus de l'onglet-->
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
				<h2>Prévention sur la dépendance au Tabac</h2>
				<br>
					
					<p><img src ="../img/dependance.jpg"/></p>
					
					<h3>Dépendance physique</h3>	
					
					<p>C’est tout simplement le manque physique de nicotine dans l’organisme. 
					C’est ce manque qui vous fait ressentir le besoin de fumer, mais pas seulement ! 
					Il peut aussi vous rendre irritable, vous donner faim, vous déconcentrer, vous rendre triste ou anxieux…<br>
					
					<h4>Comment s'en libérer ?</h4>
					L’important, c’est d’abord d’évaluer sa dépendance physique au tabac. 
					Vous pouvez faire le test « Je fais le point sur ma dépendance physique » ou auprès d’un professionnel de santé. 
					En fonction de votre niveau de dépendance, vous pourrez prendre des substituts nicotiniques (patchs, pastilles à sucer, gommes à mâcher…). 
					Ils diminueront la sensation de manque et les symptômes du sevrage comme la sensation de manque et vous aideront à vaincre plus facilement 
					votre dépendance physique.<br>
					
					</p>
					<h3>Dépendance psycologique</h3>	
					<p>
					Si la cigarette représente un plaisir chez de nombreux fumeurs, 
					chacun y associe un ou des bénéfices particuliers : relaxation, concentration, décompression, sensation de bien-être, sociabilisation. 
					Fumer pour répondre à ces besoins renforce la dépendance psychologique au tabac. <br>
					
					<h4>Comment s'en libérer ?</h4>
					Chaque fois que vous voulez une cigarette pour vous sentir mieux dans votre tête, cherchez une autre façon d’obtenir l’effet recherché. 
					Il y a plein de manières de se détendre, se défouler, d’évacuer le stress de la journée… <br>
					
					</p>
					<h3>Dépendance comportementale</h3>
					<p>
					Les fumeurs le savent bien, ce sont parfois certaines situations, personnes ou lieux particuliers qui déclenchent l’envie de fumer. 
					La pause au travail, la cigarette après le café… à chacun sa cigarette fétiche ! La consommation de tabac est alors un geste réflexe. 
					Elle n’est pas liée à un besoin physique de nicotine, mais à une situation. On parle de dépendance comportementale ou environnementale.<br>
					
					<h4>Comment s'en libérer ?</h4>
					Quand on veut arrêter de fumer, il est important de repérer ces « cigarettes-réflexes ». 
					Vous pouvez alors changer certaines habitudes, éviter vos situations à risque ou préparer des stratégies pour éviter de craquer le moment venu. 
					Et si besoin, un professionnel des T.C.C. (thérapies comportementales et cognitives) 
					pourra vous aider à changer vos habitudes et à vous défaire de cette dépendance.<br>
					
					</p>

					<h3>Vidéo explicative</h3>
					<p>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/Y7Xh1z7-QKc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</p>
					<br>

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