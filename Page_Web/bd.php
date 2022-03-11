<?php
	function getBD(){
		$bdd = new PDO('mysql:host=localhost;dbname=addictab2;charset=utf8', 'root', 'root');
		return $bdd;
	}
?>