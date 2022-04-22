<?php
    require_once("header.php");
?>

    <h1>Bienvenue</h1>
    <?php
    if(!isset($_SESSION['email'])) {
        echo"<button type='button' id='register' name='inscription'>Pas encore de compte ? Cliqué Ici !</button>";
        echo"<button type='button' id='login' name='connexion'>Déjà inscrit ? Cliqué Ici !</button>";
    }
    else {
        echo"Bienvenue". " " .$prenom."<br>";
        echo"
            <form method='POST'>
            <button type='submit' id='deco' name='deco'>Déconnexion</button>
            </form>";
    }
    ?>
</body>
</html>