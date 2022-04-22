"use strict";

document.addEventListener('DOMContentLoaded', function loaded() {
    // const regex = new RegExp("a-z A-Z");
    let firstname = document.querySelector('#nom');
    let lastname = document.querySelector('#prenom');
    let email = document.querySelector('#email');
    let password = document.querySelector('#password');
    let confirm = document.querySelector('#confirm');
    let button = document.querySelector('input[type=button');
    let error_firstname = document.querySelector('#error_nom');
    let error_lastname = document.querySelector('#error_prenom');
    let error_email = document.querySelector('#error_email');
    let error_password = document.querySelector('#error_password');
    let error_confirm = document.querySelector('#error_confirm');

    firstname.addEventListener("keyup", function() {
        if (this.value.length == "") {
            error_firstname.innerHTML = "Votre Nom ?";
        } else {
            error_firstname.innerHTML = "";
        }
    })

    lastname.addEventListener("keyup", function() {
        if (this.value.length == "") {
            error_lastname.innerHTML = "Votre Prenom ?";
        } else {
            error_lastname.innerHTML = "";
        }
    })

    email.addEventListener("keyup", function() {
        if (this.value.length == "") {
            error_email.innerHTML = "Votre Email ?";
        } else {
            error_email.innerHTML = "";
        }
    })

    password.addEventListener("keyup", function() {
        if (this.value.length == "") {
            error_password.innerHTML = "Il vous faut un Mot de passe";
        } else {
            error_password.innerHTML = "";
        }
    })

    confirm.addEventListener("keyup", function() {
        if (this.value.length == "") {
            error_confirm.innerHTML = "Confirmer le Mot de passe";
        } else {
            error_confirm.innerHTML = "";
        }
    })

    fetch('traitement.php')
        .then(function(response) {
            for(let data of response) {
                console.log(data)
            }
        })

});