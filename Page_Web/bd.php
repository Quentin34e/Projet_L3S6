<?php
	function getBD(){
		try{
			$bdd = new PDO('mysql:host=localhost;dbname=addictab2;charset=utf8', 'root', 'root');
			return $bdd;
		}
		catch(Exception $e){
			die('Une erreur a été trouvée : ' . $e->getMessage());
		}
?>

   