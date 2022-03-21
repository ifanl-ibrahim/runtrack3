"use strict";

document.addEventListener('DOMContentLoaded', function loaded() {
    
    let p = document.querySelector('p');
    
    document.querySelector("#button").addEventListener('click', function() {
        fetch('expression.txt')
            .then(function(res) {
                return res.text()
            })
            .then(res => {
                p.innerHTML = res;
            })
            .catch(function(error) {
                console.log(error)
            })
    })
});