<?php

require('database.php');

if(isset($_POST['valide'])){
    if(!empty($_POST['mdp']) and !empty($_POST['matricule'])){
        $user_matricule = htmlspecialchars($_POST['matricule']);
        $user_mdp = htmlspecialchars($_POST['mdp']);

        $checkifuserexist = $bdd->prepare('SELECT * FROM user WHERE matricule = ?');
        $checkifuserexist->execute(array($user_matricule));

        if($checkifuserexist->rowCount()>0){
            $userinfo = $checkifuserexist->fetch();
            if(password_verify($user_mdp , $userinfo['mdp'])){
                $_SESSION['auth']= true;
                $_SESSION['matricule']=$userinfo['matricule'];
                $_SESSION['nom']=$userinfo['nom'];
                $_SESSION['prenom']=$userinfo['prenom'];

                header('location: index.php');
            }else{
                $error = "Mot de passe incorrect";
            }
        }else{
            $error = "Matricule introuvable";
        }
    }else{  
        $error = "Veuillez remplir tous les champs";
    }
}