<?php 
    require('actions/database.php');

if(isset($_GET["id"]) AND !empty($_GET['id']))
    {
        $id_question = $_GET["id"];
        $checkExists = $bdd->prepare('SELECT * FROM questions WHERE id = ?');
        $checkExists->execute(array($id_question));
        $row = $checkExists->rowCount();

        if($row > 0){

            $info = $checkExists->fetch();
            if($info['id_auth'] == $_SESSION['matricule'])  // if($info['id'] == $_SESSION['id']){
            {
                $qtitre = $info['title'];
                $qdescri = $info['descri'];
                $qcontent = $info['contenu'];
                $qdate = $info['date_pub'];
            
                $qdescri = str_replace("<br />", "", $qdescri);
                $qcontent = str_replace("<br />", "", $qcontent);
            }else{
                $errorMsg = "vous n'ète pas l'auteur de cette question";
            }

        }else{
            $errorMsg = "aucune question n'as ete trouver";
        }

    }else{
        $errorMsg = "aucune question n'as ete trouver";
    }

    