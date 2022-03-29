"use strict";
// avec le "spread(...)" je décompose toute les donnée ce qui me permet de les manipulé une par une

document.addEventListener('DOMContentLoaded', function loaded() {

    const types = []
    var id = document.querySelector('#id');
    var nom = document.querySelector('#nom');
    var select = document.querySelector('#type');
    var button = document.querySelector("input[type=button]");

    fetch('pokemon.json')
        .then(blob => blob.json()) // avec blob je recupere des donnée brute que je transforme en "json" par la suite
        .then(function(blob) {
            for(let element of blob) {
                for(let value of element.type){
                    if(!types.includes(value)) {
                        types.push(value)
                    }
            }
                // filtredestypes(element.type)
                //console.log(element.type)
                //console.log(element.id)
                //console.log(element)
            }
            for(var i=0 ; i < types.length; i++){
                // console.log(types[i])
                select.innerHTML += "<option value="+types[i] +">"+ types[i]+"</option>"
            }

            button.addEventListener('click', function() {
                if (select == element.name.type) {
                    console.log(element.name)
                }
                
            })
        })
        
        // function trouverPokemon(recherche, element) {
        //     return element.filter(data => {
        //         var regex = new RegExp(recherche, 'gi'); //regex qui va trier avec la recherche et toute les occurence rechercher qu'elle soit en majuscule ou minuscule
        //         return data.name.match(regex) 
        //         // || data.type.find(type => type.match(regex))
        //         ;
        //     });
        // }

        // // function afficherResultat() {
        // //     var tableauResultat = trouverPokemon(this.value, element);
        // //     var html = tableauResultat.map(element => {
        // //         return `
        // //            <li>$(element.name)</li>
        // //            `;
        // //     });
        // //     resultat.innerHTML = html
        // // }

        // // var input = document.querySelector('input');
        // // var resultat = document.querySelector('ul');

        // // input.addEventListener('change', afficherResultat);
        // // input.addEventListener('keyup', afficherResultat);
});