"use strict";
// avec le "spread(...)" je décompose toute les donnée ce qui me permet de les manipulé une par une

document.addEventListener('DOMContentLoaded', function loaded() {
    const types = []
        var id = document.querySelector('#id');
        var nom = document.querySelector('#nom');
        var select = document.querySelector('#type');
        var button = document.querySelector("input[type=button]");
        var result = document.querySelector("div");

        fetch('pokemon.json')
            .then(blob => blob.json()) // avec blob je recupere des donnée brute que je transforme en "json" par la suite
            .then(function(blob) {
                for(let element of blob) {
                    for(let value of element.type) {
                        if(!types.includes(value)) {
                            types.push(value)
                        }
                    }
                    // filtredestypes(element.type)
                    //console.log(element.id)
                    //console.log(element)
                }
                for(var i=0 ; i < types.length; i++) {
                    select.innerHTML += "<option value="+types[i] +">"+ types[i]+"</option>"
                }
            })

    button.addEventListener('click', function() {
        if(id == "") {
            if (nom == "") {
                //trie VIA leur type
                if (select == types[i]) {
                    result.innerHTML += (types[i].name.french);
                }
            }
        }
    })
});