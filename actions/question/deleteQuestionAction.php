<?php
require('../database.php');
// if (!isset($_SESSION['auth'])) {
//     header("Location:../../login.php");
//     die();
// }
if (isset($_GET['id']) && !empty($_GET['id'])){

    $idq = $_GET['id'];

    $checkExists = $bdd->prepare('SELECT id_auth FROM questions WHERE id = ?');
    $checkExists->execute(array($idq));

    if ($checkExists->rowCount() > 0) {
    
        $userInfo = $checkExists->fetch();
        if ($userInfo['id_auth'] == $_SESSION['auth']  ){//$_SESSION['auth']) {

            $deleteQuestion = $bdd->prepare('DELETE FROM questions WHERE id = ?');
            $deleteQuestion->execute(array($idq));
            
            header('Location: ../../my-question.php');

        }else{
            echo "vous n'avez pas le droit de supprimer";
        }
    
    }else{
        echo "aucune question n'as ete trouver";
    }
    

}else{
    echo "Aucune question n'as ete trouver";
}