<html>
	<head>
		<title>Enregistrement</title>
		<?php
			if($_POST['n']=='' || $_POST['p']=='' || $_POST['mail']=='' || $_POST['mdp1']=='' || $_POST['mdp1']!=$_POST['mdp2']){
				
				header('Location: inscription_site.php?n='.$_POST['n'].'&p='.$_POST['p'].'&mail='.$_POST['mail']);
				echo $_POST['n'];
				echo $_POST['p'];
				echo $_POST['mail'];
			}	
			else{
				header('Location: Accueil.php');
				
			}
			function enregistrer($n, $p, $mail, $mdp1){
				$sql="INSERT INTO `utilisateur`( `nom`, `prenom`, `mail`, `mdp`) 
				VALUES ('".$n."','".$p."','".$mail."','".$mdp1."')";
				echo $sql;
				return $sql;
				
			}
				if($_POST['n']=='' || $_POST['p']=='' || $_POST['mail']=='' || $_POST['mdp1']=='' || $_POST['mdp1']!=$_POST['mdp2']){
							
				}
				
				else {
					include('bd.php');
					$bdd= getBD();
					$rep = $bdd->query(enregistrer($_POST['n'],$_POST['p'],$_POST['mail'],$_POST['mdp1'] ));
	
				}
			
		?>
	</head>
	<body>

	</body>
</html>