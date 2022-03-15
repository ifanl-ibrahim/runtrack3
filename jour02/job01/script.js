"use strict";

window.addEventListener('DOMContentLoaded', function loaded() {
    let article = document.querySelector('#citation').textContent; //element du Selectionner par l'id
    let button = document.querySelector('#button');

    button.addEventListener("click", citation); // 1er paramettre prend une chaine de charactere pour préciser l'evenement et en 2eme parametre prend la fonction

    function citation() {
        console.log(article);
    }
});