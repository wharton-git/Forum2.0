<?php 

require('actions/database.php');

if (isset($_POST['validate'])){

    if (!empty($_POST['matricule']) AND !empty($_POST['email']) AND !empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['niveau']) AND !empty($_POST['mdp'])){

        $user_matricule = htmlspecialchars($_POST['matricule']);
        $user_email = htmlspecialchars($_POST['email']);
        $user_nom = htmlspecialchars($_POST['nom']);
        $user_prenom = htmlspecialchars($_POST['prenom']);
        $user_niveau = htmlspecialchars($_POST['niveau']);
        $user_mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

        // verifier si l'utilisateur existe deja

        $checkIfUserAlreadyExists = $bdd->prepare('SELECT matricule FROM user WHERE matricule = ?');
        $checkIfUserAlreadyExists->execute(array($user_matricule));

        if ($checkIfUserAlreadyExists->rowCount() == 0) {

            $insertUserOnWebSite = $bdd->prepare('INSERT INTO user (email, matricule, nom, prenom, niveau, mdp) VALUES (?, ?, ?, ?, ?, ?)');
            $insertUserOnWebSite->execute(array($user_email, $user_matricule, $user_nom, $user_prenom, $user_niveau, $user_mdp));

            $getInfosOfThisUserReq = $bdd->prepare('SELECT * FROM user WHERE nom=? AND prenom=? AND matricule=?');
            $getInfosOfThisUserReq->execute(array($user_nom, $user_prenom, $user_matricule));

            $userInfos = $getInfosOfThisUserReq->fetch();

            $_SESSION['auth'] = true;
            $_SESSION['matricule'] = $userInfos['matricule'];
            $_SESSION['nom'] = $userInfos['nom'];
            $_SESSION['prenom'] = $userInfos['prenom'];

            header('Location: index.php');

        } 
        else{
            $error = "L'utilisateur existe déja";
        }

    }
    else{
        $error = "Veuillez remplir tout les champs pour s'inscrire";
    }
} 