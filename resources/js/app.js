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
document.getElementById('faqs').addEventListener('click', function() {openTab(event, 'FAQs')});
    document.getElementById('guides').addEventListener('click', function() {openTab(event, 'Guides')});
function openTab(evt, tabName) {
    // Declare all variables
    var i, tabcontent, tablinks;
  
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" bottombar-active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " bottombar-active";
}