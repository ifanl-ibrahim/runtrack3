"use strict";

document.addEventListener('DOMContentLoaded', function loaded() {
    
    let register = document.querySelector('#register');
    let login = document.querySelector('#login');
    let deco = document.querySelector('#deco');

    register.addEventListener('click', redirigeVersInscription)
        function redirigeVersInscription() {
            location = "inscription.php";
        }

    login.addEventListener('click', redirigeVersConnexion)
        function redirigeVersConnexion() {
            location = "connexion.php";
        }

    deco.addEventListener('click', redirigeVersAcceuil)
        function redirigeVersAcceuil() {
            location = "index.php";
        }
});