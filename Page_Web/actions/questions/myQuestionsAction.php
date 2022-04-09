<?php

require('actions/database.php');

$getAllMyQuestions = $bdd->prepare('SELECT id, titre, contenu FROM questions WHERE id_autheur = ? ORDER BY id DESC');
$getAllMyQuestions->execute(array($_SESSION['id']));