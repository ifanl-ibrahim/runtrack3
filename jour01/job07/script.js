"use strict";

function jourtravaille(jour, mois, annee) {
    var mois2 = mois-1;
    var date = new Date(annee, mois2 , jour);

    ferie = [01-01-2020, 13-04-2020, 01-05-2020, 08-05-2020, 21-05-2020, 01-06-2020, 14-07-2020, 15-08-2020, 01-11-2020, 25-12-2020];
    for(let i =0; i<ferie.length; i++) {
        if(ferie[i] == jour-mois-annee) {
            return console.log('jour ferie')
        } 
    }
    var joursemaine = date.getDay()
    if(joursemaine == 6 || joursemaine == 0) {
        console.log("weekend")
    }
    else{
        console.log('travaille')
    }
}
    
jourtravaille(01, 01, 2020)