"use strict";

document.addEventListener('DOMContentLoaded', function loaded() {
    
    var info = '{"name": "La Plateforme_", "address": "8 rue hozier", "city": "Marseille", "nb_staff": "11", "creation":"2019"}';
    
    var obj = JSON.parse(info);

    function jsonValueKey(array, key) {
        console.log(array[key]);

        // console.log(array)
    }

    jsonValueKey(obj, "city");
});