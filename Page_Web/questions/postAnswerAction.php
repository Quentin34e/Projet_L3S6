<?php

require('../bd.php');

if(isset($_POST['validate'])){

    if(!empty($_POST['answer'])){

        $user_answer = nl2br(htmlspecialchars($_POST['answer']));

        $insertAnswer = $bdd->prepare('INSERT INTO answers(id_autheur, pseudo_autheur, id_question, contenu)VALUES(?, ?, ?, ?)');
        $insertAnswer->execute(array($_SESSION['id_utilisateur'], $_SESSION['pseudo'], $idOfTheQuestion, $user_answer));

    }

}