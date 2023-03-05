<?php

    require('actions/question/getInfoQuestioneditAction.php');
    require('actions/question/editQuestionAction.php');


?>
<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<body>
    <?php 
    include 'includes/script1.php';
    include 'includes/navbar.php'; ?>
    <br><br>
    <div class="container">
        <?php if(isset($errorMsg))
        { echo '<p class="alert alert-danger">'.$errorMsg.'</p>'; }
    ?>
    </div>

    <?php 
        if(isset($qcontent)){ ?>

            <form class="container" method="POST">

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" >Titre de la question</label>
                <input type="text" class="form-control" name="title" value="<?= $qtitre ;?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">description de la question</label>
                <textarea  class="form-control"name="description" ><?= $qdescri ;?></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">contenue de la question</label>
                <textarea class="form-control" name="content"><?= $qcontent ;?></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="validate">modifier</button>
        </form>

    <?php  } 
        include 'includes/script2.php';
    ?>

</body>
</html>