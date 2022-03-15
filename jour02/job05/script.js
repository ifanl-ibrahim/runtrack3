"use strict";

document.addEventListener('DOMContentLoaded', function loaded() {
    
    const body = document.querySelector('body');
    const footer = document.querySelector('footer');

    window.addEventListener('scroll', () => {
        let scroll = window.scrollY / (body.clientHeight - window.innerHeight);
        let scrollPercent = Math.round(scroll * 100);
        footer.style.width = scrollPercent + '%';
    })
})