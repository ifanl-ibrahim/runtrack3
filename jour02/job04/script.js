"use strict";

document.addEventListener('DOMContentLoaded', function loaded() {

    var texte = document.querySelector('#keylogger');

    document.addEventListener("keypress", zone)

    function zone(event) {
        var clé = event.key;
        texte.value += clé;
    }
})