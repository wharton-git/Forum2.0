<?php require('actions/loginAction.php');?>

<html>

<head>
  <link rel="stylesheet" href="assets/log.css">
  
  <link rel="stylesheet" media="screen" href="./assets/css/bundle.min.css"/>
    <link rel="stylesheet" media="screen" href="./assets/css/aos.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="./assets/css/theme.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sign in</title>
</head>

<body>
  <div class="main">
    <p class="sign" align="center">Se connecter</p>
    <form class="form1" method="POST">
      <?php if(isset($error)){echo '<p style="color: red;font-weight: bold;font-size: 14px;text-align: center;">'.$error.'</p>'; } ?>
      <input class="un " type="text" align="center" placeholder="Matricule" name="matricule">
      <input class="pass" type="password" align="center" placeholder="Mot de passe" name="mdp">
      <button class="submit" align="center" name="valide">Sign in</button>
      <p class="forgot" align="center"><a href="#">Forgot Password?</p>
      <p class="forgot" align="center"><a href="signup.php">Créer un compte</p>
    </div>
</body>

</html>