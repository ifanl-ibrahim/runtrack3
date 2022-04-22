"use strict";
// avec le "spread(...)" je décompose toute les donnée ce qui me permet de les manipulé une par une

document.addEventListener('DOMContentLoaded', function loaded() {
    const pokedex = [];
    const types = [];
    var id = document.querySelector('#id');
    var nom = document.querySelector('#nom');
    var select = document.querySelector('#type');
    var button = document.querySelector("input[type=button]");
    var result = document.querySelector("#div");

    fetch('pokemon.json')
        .then(blob => blob.json()) // avec blob je recupere des donnée brute que je transforme en "json" par la suite
        .then(function(blob) {
            for(let element of blob) {
                if(!pokedex.includes(element)) {
            pokedex.forEach(pokedex => console.log(pokedex));

                    // pokedex.push(element);
                }
                for(let value of element.type) {
                    if(!types.includes(value)) {
                        types.push(value);
                    }
                }
            }


            for(var i=0 ; i < types.length; i++) {
                select.innerHTML += "<option value="+types[i] +">"+ types[i]+"</option>";
            }
                
            button.addEventListener('click', function() {
                    for(var i=0 ; i < types.length; i++) {
                        if(id.value == "") {
                            if (nom.value == "") {
                                //trie VIA leur type
                                if (select.value == types[i]) {
                                    // result.innerHTML = (types[i]);
                                    console.log('ok');
                                }               
                            }               
                        }
                    }
            })
        })
})