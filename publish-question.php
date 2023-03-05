<?php 
require('actions/SecurityAction3.php');
require('actions/question/publishQuestion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
<link rel="stylesheet" media="screen" href="./assets/css/bundle.min.css"/>
    <link rel="stylesheet" media="screen" href="./assets/css/aos.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="./assets/css/theme.min.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
    <title>Publish_Question</title>
</head>
<body>
    <?php 
    include "includes/script1.php";
    include 'includes/navbar.php'?>
    <br> <br>
    <br><br>
    <div class="p-4"></div>
    <form class="container pt-5" method="POST">
    <?php if(isset($errorMsg))
    { echo '<p class="alert alert-danger">'.$errorMsg.'</p>'; }
    elseif(isset($successMsg)){
        echo '<p class="alert alert-success">'.$successMsg.'</p>';
    }
    ?>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" >objet de la question</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">contenue de la question</label>
            <textarea class="form-control" name="content" ></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="validate">publier</button>
    </form>
    <?php include 'includes/script2.php' ?>
</body>
</html>