<html>
	<head>
		<title>InsertSujet</title>
		<?php
			if($_POST['intitule']=='' || $_POST['description']=='' ){
				
				header('Location: ForumTopic.php');
				
			}	
			else{
				header('Location: ForumVerif.php');
				
			}
			function insertSujet($intitule, $description){
				$sql="INSERT INTO `post`(`intitule`,`description`) 
				VALUES ('".$intitule."','".$description."')";
				echo $sql;
				return $sql;
				
			}
				if($_POST['intitule']=='' || $_POST['description']=='' ){
						
				} 
				
				else {
					include('bd.php');
					$bdd= getBD();
					$rep = $bdd->query(insertSujet($_POST['intitule'],$_POST['description']));
	
				}
			
		?>
	</head>
	<body>

	</body>
</html>