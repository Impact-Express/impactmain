require('./bootstrap');

class App {
    constructor() {
        this.mobileNav();
    }
}
// Use the prototype syntax for now, later change to class property syntax
App.prototype.mobileNav = function() {
    let hamburgerButton = document.querySelector('.hamburger');
    let mobileNav = document.querySelector('.mobile-nav');
    let html = document.querySelector('body');

    function openMobile() {
        mobileNav.classList.add('open');
    }

    function closeMobile() {
        mobileNav.classList.remove('open');
    }

    hamburgerButton.addEventListener('click', openMobile);
    mobileNav.addEventListener('click', closeMobile);
};

new App();

let close = document.getElementsByClassName("closebtn");
let i;

for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        let div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
    }
}
