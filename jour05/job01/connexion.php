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
    <form action="connexion.php" method="post" enctype="multipart/form-data">
        <label for='nom'>Votre E-mail</label>
        <input id="email" name="email" type="email"><br>
        <div id="error_wrong_email"></div>

        <label for='nom'>Votre Mot de passe</label>
        <input id="password" name="password" type="password"><br>
        <div id="error_wrong_password"></div>

        <button type="button" name="Connexion" value="1" id="recuperation">Connexion</button><br>
        <div id="error_empty"></div>
        <div id="resulte"></div>
        <?php
            if(isset($_POST['button'])) {
                $user->connect($_POST['email'], $_POST['password']);
            }
        ?>
    </form>
</body>
</html>