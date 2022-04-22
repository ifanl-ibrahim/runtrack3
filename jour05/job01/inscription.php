<?php
    require ("header.php");
    $user->block();
    $user->fetch($_POST['email']);
?>

    <form method="POST">
        <label for='nom'>Votre Nom</label>
        <input id="nom" name="nom" type="text">
        <div id="error_nom"></div><br>

        <label for='prenom'>Votre Prénom</label>
        <input id="prenom" name="prenom" type="text">
        <div id="error_prenom"></div><br>

        <label for='email'>Votre E-mail</label>
        <input id="email" name="email" type="email">
        <div id="error_email"></div><br>

        <label for='password'>Votre Mot de passe</label>
        <input id="password" name="password" type="password">
        <div id="error_password"></div><br>

        <label for='confirm'>Cofirmer Mot de passe</label>
        <input id="confirm" type="password" name="confirm">
        <div id="error_confirm"></div><br>

        <button type="submit" name="recuperation" id="recuperation">envoyer</button>
        <div id="error_empty"></div><br>
        <div id="result"></div>
        <?php
            if(isset($_POST['recuperation'])) {
                $user->register($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['password'], $_POST['confirm']);
            }
        ?>
    </form>
</body>
</html>