<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack3</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <h1>Bienvenue</h1>
    <?php
    session_start();
    if(!isset($_SESSION['email'])) {
        echo"<button type='button' id='register' name='inscription'>Pas encore de compte ? Cliqué Ici !</button>";
        echo"<button type='button' id='login' name='connexion'>Déjà inscrit ? Cliqué Ici !</button>";
    }
    else {
        echo"Bienvenue". " " .$_SESSION['prenom']."<br>";
        echo"<button type='button' id='deco' name='deco'>Déconnexion</button>";
    }
    ?>
</body>
</html>