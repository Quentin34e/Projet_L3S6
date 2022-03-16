<!DOCTYPE html>

<html>
	<head>
	<title>Se connecter</title>
	<link rel="stylesheet" href="index.css" type="text/css" media="screen" />
	<?php
	require ('bd.php');
    $bdd = getBD();
	/*$mail=$_POST['mail'];
	$mdp=$_POST['mdp1'];*/
    $sql ="UPDATE utilisateur SET nom= WHERE id_utilisateur=?";
	$sql ="UPDATE utilisateur SET prenom= WHERE id_utilisateur=?";
	$sql ="UPDATE utilisateur SET mail= WHERE id_utilisateur=?";
	$sql ="UPDATE utilisateur SET mdp= WHERE id_utilisateur=?";
    $statement = $bdd->prepare($sql);
    /*$statement->execute([$mail,$mdp]);*/

	
	$table = $statement->fetch();

    if($mail!='' && $mdp!=''){
			session_start();
			$_SESSION['utilisateur'] = array($table['nom'],
                                    $table['prenom'],
                                    $mail,
                                    $mdp);
        header('Location: Accueil.php');
		
    }
	else{
        header('Location: connexion.php');
        exit();
	}
	?>
	</head>
	
	<body>
	</body>
</html>
