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