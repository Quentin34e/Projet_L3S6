<html>
	<head>
		<title>InsertSujet</title>
		<?php
			if($_POST['intitulé']=='' || $_POST['description']=='' || $_POST['date']=='' || $_POST['heure']=='' ){
				
				header('Location: insertSujet.php');
				
			}	
			else{
				header('Location: Forum.php');
				
			}
			function insertSujet($intitulé, $description, $date, $heure){
				$sql="INSERT INTO `Post`(`intitulé`,`description`, `date`, `heure`) 
				VALUES ('".$intitulé."','".$description."','".$date."','".$heure."')";
				echo $sql;
				return $sql;
				
			}
				if($_POST['intitulé']=='' || $_POST['description']=='' || $_POST['date']=='' || $_POST['heure']=='' ){
						
				}
				
				else {
					include('bd.php');
					$bdd= getBD();
					$rep = $bdd->query(enregistrer($_POST['intitulé'],$_POST['description'],$_POST['date'],$_POST['heure'] ));
	
				}
			
		?>
	</head>
	<body>

	</body>
</html>