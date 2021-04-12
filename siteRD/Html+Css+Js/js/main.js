//Declarando variáveis*
var btnContact = document.querySelector('.rd-btn-contact');

//Page preloader
window.addEventListener('load', function () {
  var pagePreloder = document.querySelector('.rd-preloader');
  pagePreloder.classList.add('rd-fade-out');

  setTimeout(function () {
    pagePreloder.style.display = 'none';
  }, 2000);
});


//Abrindo e fechando as informações de contato
btnContact.addEventListener('click', function () {
  var boxContact = document.querySelector('.rd-contact-info');
  boxContact.classList.toggle('rd-is-open');

  this.classList.toggle('rd-change-icon');
});



//Animando elementos on scroll com waypoints
var myScrollDown = document.querySelector('.rd-scroll-down');
var waypoint = new Waypoint({
  element: myScrollDown,
  handler: function () {
    myScrollDown.classList.toggle('rd-fade-out');
  },
  offset: '80%'
});

