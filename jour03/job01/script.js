"use strict";

document.addEventListener('DOMContentLoaded', function loaded() {

    $('#button').click(function(){
        $('article').append("le $ est un bon élément monétaire. Le # de twitter est une bonne I D. Il faudra faire le point avec la classe pour cacher cet élément.")
    });
    
    $('#cache').click(function(){
        $('article').empty();
    })
})