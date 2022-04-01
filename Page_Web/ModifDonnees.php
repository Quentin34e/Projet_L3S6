<!DOCTYPE html>
<html>
	<head>
	
	<title>Se connecter</title>
	<link rel="stylesheet" href="style.css" />
	<?php
	session_start();
	require('bd.php');
          

	?>
	</head>
	
	<body>
	<?
	function modifier( $n, $p, $mail, $mdp1,$id_utilisateur){
		$bdd= getBD();
		$sql_update = "UPDATE utilisateur SET nom=? , prenom=? , mail=? , mdp=? WHERE id_utilisateur=?";
		$stmt_update = $bdd->prepare($sql_update);
		$stmt_update->execute([$n,$p,$mail,$mdp1,$id_utilisateur]) or die(print_r($stmt_update->errorInfo(), true));
	}
	
	
 if($_POST['nom']=='' || $_POST['prenom']=='' || $_POST['mail']=='' || $_POST['mdp1']==''){
        header('Location: MonProfil.php');
    }
	else{
		$id_utilisateur=$_SESSION['utilisateur'][4];
		modifier($_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['mdp1'],$id_utilisateur );
        header('Location: connexion.php');
	}
?>
	</body>
</html>
