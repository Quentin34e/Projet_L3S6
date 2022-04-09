<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=addictab2;charset=utf8;', 'root', 'root');
}catch(Exception $e){
    die('Une erreur a été trouvée : ' . $e->getMessage());
}
