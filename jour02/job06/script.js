"use strict";

document.addEventListener('DOMContentLoaded', function loaded() {

    let save='' ;
    document.addEventListener("keydown", function konami(m){
        save += m.key;
        if(save == "ArrowUpArrowUpArrowDownArrowDownArrowLeftArrowRightArrowLeftArrowRightba")
            document.write('BANKAI ! : Tensa LA PLATEFORME_');
        console.log(save);
    })
})