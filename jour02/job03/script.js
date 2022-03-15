"use strict";

document.addEventListener('DOMContentLoaded', function loaded() {

    var compt = 0;
    var button = document.querySelector("#button");

    button.addEventListener("click", addone)

    function addone() {
        document.querySelector("#compteur").textContent = ++compt;
    }
})