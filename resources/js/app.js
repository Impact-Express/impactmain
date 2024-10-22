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
    let exitmenu = document.querySelector('.closemenu');
    let html = document.querySelector('body');

    function openMobile() {
        mobileNav.classList.add('open');
    }

    function closeMobile() {
        mobileNav.classList.remove('open');
    }

    hamburgerButton.addEventListener('click', openMobile);
    exitmenu.addEventListener('click', closeMobile);
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

$('#faqs').click(openTab(event, 'FAQs'));

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


$('.toggle').trigger(function(e) {
    e.preventDefault();

  var $this = $(this);

  if ($this.next().hasClass('show')) {
      $this.next().removeClass('show');
      $this.next().slideUp(350);
  } else {
      $this.parent().parent().find('li .inner').removeClass('show');
      $this.parent().parent().find('li .inner').slideUp(350);
      $this.next().toggleClass('show');
      $this.next().slideToggle(350);
  }
});