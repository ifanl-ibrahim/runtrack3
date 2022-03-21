"use strict";

document.addEventListener('DOMContentLoaded', function loaded() {

    melange();
    
    $('img').click(function() {
        $(this).appendTo("#rangees");
    });
    
    $('#button').click(function() {
        melange();
        $('img').click(function() {
            var result = $(this).appendTo("#rangees");
        });
    });
    
        
    function melange() {
        
        $('img').remove();
        var max = 6;
        var current = 0;
        var t1 = ["0", "1", "2", "3", "4", "5"];
        var t2 = [];
        var img = ["arc1.png", "arc2.png", "arc3.png", "arc4.png", "arc5.png", "arc6.png"];
        
        for (var i = 0; i < img.length; i++) {
            var x = Math.floor(Math.random() * max);
            t2[current] = t1[x];
            current++;
            max = max - 1;
            t1[x] = t1[max];
        
            $('#melangees').append('<img src="' + img[t2[i]] + '">');
        };
        if (('#rangees') == "<img src = 'arc1.png'><img src = 'arc2.png'><img src = 'arc3.png'><img src = 'arc4.png'><img src = 'arc5.png'><img src = 'arc6.png'>") {
        //   $('#rep').append('<p>tu as réussi</p>');
        }
    }
})