<html>
	<head>
		<title>insertSujet</title>
		<?php
		
			if($_POST['intitule']!='sante' & $_POST['intitule']!='experience' & $_POST['intitule']!='general' || $_POST['description']=='' ){
				header('Location: RefusTopic.php');
			}
			else{
				header('Location: AjoutTopic.php');
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
					if($_POST['intitule']!='sante' & $_POST['intitule']!='experience' & $_POST['intitule']!='general' || $_POST['description']=='' ){
					header('Location: RefusTopic.php');}
					else{
						$rep = $bdd->query(insertSujet($_POST['intitule'],$_POST['description']));
						}
	
				}
			
		?>
	</head>
</html>