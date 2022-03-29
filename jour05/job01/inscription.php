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
    <form action="inscription.php" method="post" enctype="multipart/form-data">
        <label for='nom'>Votre Nom</label>
        <input id="nom" name="nom" type="text"><br>
        <div id="error_nom"></div>

        <label for='nom'>Votre Prénom</label>
        <input id="prenom" name="prenom" type="text"><br>
        <div id="error_prenom"></div>

        <label for='nom'>Votre E-mail</label>
        <input id="email" name="email" type="email"><br>
        <div id="error_email"></div>

        <label for='nom'>Votre Mot de passe</label>
        <input id="password" name="password" type="password"><br>
        <div id="error_password"></div>

        <label for='nom'>Cofirmer Mot de passe</label>
        <input id="password_hash" type="password" name="password_hash"><br>
        <div id="error_confirm"></div>

        <button type="button" name="inscription" value="1" id="recuperation">envoyer</button><br>
        <div id="error_empty"></div>
        <div id="result"></div>
        <?php
            if(isset($_POST['button'])) {
                $user->register($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['password'], $_POST['confirm_password']);
            }
        ?>
    </form>
</body>
</html>