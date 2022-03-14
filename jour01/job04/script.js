"use strict";

function bisextile(année)
{
    var année =  prompt('Entrer l\'année ');
    
    if(année % 4 == 0 )
    {
        alert(true);
    }else{
        alert(false);
    }   
    console.log(année);
}

bisextile();