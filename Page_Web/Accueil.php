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
	 				<SCRIPT LANGUAGE="JavaScript">
					function test(nom,n) {
						var rep=true;
						for (i=0; i<n; i++) { 
							if (nom[i].value==1 && nom[i].checked==false) rep=false;
							if (nom[i].value==0 && nom[i].checked==true) rep=false;
						}
						return rep;
					}
				</SCRIPT>
        <script type="text/javascript" src="../javascript/affichermasquer.js"> </script><!-- utile pour le diapo-->
	</head>
	
	<body>
		<!--ENTETE DU SITE-->
	     <div id="bloc_page">
                <header>
                            <div id="entete"> 
   <h1>Accueil</h1><!--Nom au dessus de l'onglet-->
      <a id="connexion" class="bouton" href="connexion.php">  <!--A modifier--><span>Se connecter</span></a>
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
				<h2>Présentation</h2>            
					<p> Nous sommes un groupe d'étudiants d'une licence MIASHS.<br>
					Cette année, nous devons travailler par groupe sur un projet qui a pour but<br>
					de créer un site internet fonctionnel.<br>
					Nous avons décider de traiter des données pour voir le taux de fumeurs d'un certain<br>
					nombre de pays en fonction d'une année précise.
					</p>

			</article>
		</section>
		<section>
			<article>
				<H1> Vrai / Faux</H1>
				<HR>

				<FORM NAME="qcm1">
				<B>Le QCM de 10 questions ci dessous à pour but de tester vos connaissances
				 sur le tabac.</B><BR>
				<BR>
				1. Le seul risque encouru avec le tabac est le cancer du poumon<BR>
				<B>Réponses :</B>
				<BR><INPUT TYPE=CHECKBOX NAME="choix" VALUE=0> Vrai</INPUT>
				<BR><INPUT TYPE=CHECKBOX NAME="choix" VALUE=1> Faux</INPUT>
				<BR><BR>
				2. La dépendance physique n’existe que si on fume plus de 5
				cigarettes par jour. 
				<BR><INPUT TYPE=CHECKBOX NAME="choix" VALUE=0> Vrai</INPUT>
				<BR><INPUT TYPE=CHECKBOX NAME="choix" VALUE=1> Faux</INPUT>
				<BR><BR>
				3. Les femmes qui fument pendant leur grossesse accouchent de
				bébés plus chétifs que la moyenne. 
				<BR><INPUT TYPE=CHECKBOX NAME="choix" VALUE=1> Vrai</INPUT>
				<BR><INPUT TYPE=CHECKBOX NAME="choix" VALUE=0> Faux</INPUT>
				<BR><BR>
				4. Fumer la chicha (le narguilé) est moins nocif que fumer la
				cigarette. 
				<BR><INPUT TYPE=CHECKBOX NAME="choix" VALUE=1> Vrai</INPUT>
				<BR><INPUT TYPE=CHECKBOX NAME="choix" VALUE=0> Faux</INPUT>
				<BR><BR>
				5. Il existe un seuil en dessous duquel fumer n’entraine aucun risque
				<BR><INPUT TYPE=CHECKBOX NAME="choix" VALUE=0> Vrai</INPUT>
				<BR><INPUT TYPE=CHECKBOX NAME="choix" VALUE=1> Faux</INPUT>
				<BR><BR>
				6. La cigarette électronique est inoffensive.
				<BR><INPUT TYPE=CHECKBOX NAME="choix" VALUE=0> Vrai</INPUT>
				<BR><INPUT TYPE=CHECKBOX NAME="choix" VALUE=1> Faux</INPUT>
				<BR><BR>
				7. Chaque année la journée mondiale sans tabac a lieu de 31 mars ?
				<BR><INPUT TYPE=CHECKBOX NAME="choix" VALUE=0> Vrai</INPUT>
				<BR><INPUT TYPE=CHECKBOX NAME="choix" VALUE=1> Faux</INPUT>
				<BR><BR>
				8. Le tabac contient plus de 40 substances cancérigènes.
				<BR><INPUT TYPE=CHECKBOX NAME="choix" VALUE=1> Vrai</INPUT>
				<BR><INPUT TYPE=CHECKBOX NAME="choix" VALUE=0> Faux</INPUT>
				<BR><BR>
				9. Quand on arrête de fumer, les bénéfices apparaissent dès la 1ère heure.
				<BR><INPUT TYPE=CHECKBOX NAME="choix" VALUE=1> Vrai</INPUT>
				<BR><INPUT TYPE=CHECKBOX NAME="choix" VALUE=0> Faux</INPUT>
				<BR><BR>
				10. Le tabac tue beaucoup plus que la voiture dans les pays évolués.
				<BR><INPUT TYPE=CHECKBOX NAME="choix" VALUE=1> Vrai</INPUT>
				<BR><INPUT TYPE=CHECKBOX NAME="choix" VALUE=0> Faux</INPUT>
				<BR><BR>
				<INPUT TYPE="button" NAME="bouton" VALUE="Correction" ONCLICK="MarkAnswer()">
				</INPUT>
				</FORM>
			</article>
		</section>
		 <footer><!--PIED DE PAGE-->
            

			<a>Contact</a>
			<ul id="liste_contact">
				<li>Numéro de téléphone: 06 XX XX XX XX</li>
				<li>Mail : <a href="mailto:addictab123@gmail.com">contact@addictab.fr</a><img src="../img/email.png" alt="image enveloppe" /></li>
				<li>Facebook: <a href="https://www.facebook.com/profile.php?id=100078106309466">Addictab</a><img src="../img/Logo_facebook.png" alt="logo facebook" /></li>

			</ul>
			<p id="mention"><small>Quentin / Clement / Maxime / Yohann<br />Copyright ADDICTAB - Tous droits réservés.</small></p>

          
		 </footer> <!--FIN PIED DE PAGE-->
		 </div>
	</body>
</html>