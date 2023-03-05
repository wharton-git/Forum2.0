<?php 
require('actions/database.php');

if (isset($_GET['id']) && !empty($_GET['id']))
{

    $idq = $_GET['id'];
    $checkQuestion = $bdd->prepare('SELECT * FROM questions WHERE id = ?');
    $checkQuestion->execute(array($idq));

    if ($checkQuestion->rowCount() > 0){

        $qInfo = $checkQuestion->fetch();
        $questionT = $qInfo['title'];
        $questionC = $qInfo['contenu'];
        $questionidAuth = $qInfo['id_auth'];
        $question_pseudo_author = $qInfo['pseudo_auth'];
        $questionDate = $qInfo['date_pub'];

        
        

    }else{
        $errorMsg = '<div class="alert alert-warning"> Aucune question n\'as ete trouver';
    }

}
else{
    $errorMsg = '<div class="alert alert-warning"> Aucune question n\'as ete trouver';

}