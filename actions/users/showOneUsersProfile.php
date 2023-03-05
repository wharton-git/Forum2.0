<?php session_status() === PHP_SESSION_NONE ? session_start() : null;

require ('actions/database.php');

if(isset($_GET['id']) AND !empty($_GET['id'])){


    $matOfUser = $_GET['id'];

    $checkIfUserExistInDb = $bdd->prepare('SELECT * FROM user WHERE matricule = ?');
    $checkIfUserExistInDb->execute(array($matOfUser));

    if($checkIfUserExistInDb->rowCount() > 0){

        $user_Infos = $checkIfUserExistInDb->fetch();

        $u_nom = $user_Infos['nom'];
        $u_prenom = $user_Infos['prenom']; 
        $u_matricule = $user_Infos['matricule'];
        $u_mail = $user_Infos['email']; 
        $u_level = $user_Infos['niveau'];

        $getHisQuestions = $bdd->prepare('SELECT * FROM questions WHERE id_auth = ? ORDER BY id DESC');
        $getHisQuestions->execute(array($u_matricule));

    }
    else{
        $errorMsg = "Aucun utilisateur trouvé";
    }

}
else{
    $errorMsg = "Aucun Utilisateur Trouvé";
}