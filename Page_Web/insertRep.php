<html>
	<head>
		<title>InsertRep</title>
		<?php
			if($_POST['reponse']=='' || $_POST['dateCom']=='' || $_POST['heureCom']=='' ){
				
				header('Location: insertSujet.php');
				
			}	
			else{
				header('Location: Forum.php');
				
			}
			function insertRep($reponse, $dateCom, $heureCom){
				$sql="INSERT INTO `Post`(`reponse`, `dateCom`, `heureCom`) 
				VALUES ('".$titre."','".$reponse."','".$dateCom."','".$heureCom."')";
				echo $sql;
				return $sql;
				
			}
				if($_POST['reponse']=='' || $_POST['dateCom']=='' || $_POST['heureCom']=='' ){
					
				}
				
				else {
					include('bd.php');
					$bdd= getBD();
					$rep = $bdd->query(insertRep($_POST['reponse'],$_POST['dateCom'],$_POST['heureCom'] ));
	
				}
			
		?>
	</head>
	<body>

	</body>
</html>