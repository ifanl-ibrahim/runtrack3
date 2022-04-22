<?php
    require_once("header.php");
    require_once "./controler_account.php";
    $user = new User();
    $user->block();
?>

    <form action="connexion.php" method="post">
        <label for='nom'>Votre E-mail</label>
        <input id="email" name="email" type="email">
        <div id="error_wrong_email"></div><br>

        <label for='nom'>Votre Mot de passe</label>
        <input id="password" name="password" type="password">
        <div id="error_wrong_password"></div><br>

        <button type="submit" name="recuperation"  id="recuperation">Connexion</button>
        <div id="error_empty"></div><br>
        <div id="resulte"></div>
        <?php
            if(isset($_POST['recuperation'])) {
                $user->connect($_POST['email'], $_POST['password']);
            }
        ?>
    </form>
</body>
</html>