<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>
<?php include 'actions/question/myQuestionsAction.php';?>
<body>
    <?php 
    include 'includes/script1.php';
    include 'includes/navbar.php';?>

    <br><br>
    <div class="container ">
        <?php while($question = $getAllMyQuestions->fetch()){ ?>
            <div class="card mb-3">
                <h5 class="card-header">
                    <?= $question['title'];?>
                </h5>
                <div class="card-body">
                    <p class="card-text">
                        <?= $question['descri'];?>
                    </p>
                    <a href="article.php?id=<?= $question['id']; ?>" class="btn btn-primary">Accéder à la question</a>
                    <a href="edit-question.php?id=<?=$question['id']?>" class="btn btn-warning">Modifier la question</a>
                    <a href="actions/question/deleteQuestionAction.php?id=<?=$question['id']?>" class="btn btn-danger">supprimer la question</a>

                </div>
            </div>

        <?php } ?>
    </div>
<?php include 'includes/script2.php'; ?>
</body>

</html>