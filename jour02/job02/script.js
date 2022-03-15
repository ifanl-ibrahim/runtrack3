"use strict";

document.addEventListener('DOMContentLoaded', function loaded() {
    let article = document.querySelector('article');
    let button = document.querySelector('#button');

    button.addEventListener('click', showhide) // 1er paramettre prend une chaine de charactere pour préciser l'evenement et en 2eme parametre prend la fonction
    
    function showhide() {
        if (article.style.display == 'flex') {
            article.style.display = 'none';
        } 
        else article.style.display = 'flex';
    }
})