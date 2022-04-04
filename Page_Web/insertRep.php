<html>
	<head>
		<title>insertRep</title>
		<?php
		
			if(  $_POST['idRep']=='' || $_POST['champ']=='' || $_POST['rubriq']!='sante' & $_POST['rubriq']!='experience' & $_POST['rubriq']!='general'){
				header('Location: RefusCom.php');
			}
			else{
				header('Location: AjoutCom.php');
			}
			function insertRep($idRep, $champ, $rubriq ){
				$sql="INSERT INTO `commentaire`(`idRep`,`rubriq`,`champ`) 
				VALUES ('".$idRep."','".$champ."','".$rubriq."')";
				echo $sql;
				return $sql;
			}
				if($_POST['idRep']=='' || $_POST['rubriq']=='' || $_POST['champ']==''){
				
				}					
				
				else {
					include('bd.php');
					$bdd= getBD();
					if(  $_POST['idRep']=='' || $_POST['champ']=='' || $_POST['rubriq']!='sante' & $_POST['rubriq']!='experience' & $_POST['rubriq']!='general'){
					header('Location: RefusCom.php');}
					else{
						$rep = $bdd->query(insertRep($_POST['idRep'],$_POST['champ'],$_POST['rubriq'],));
						}
	
				}
			
		?>
	</head>
</html>