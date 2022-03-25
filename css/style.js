$(function() {
  function toggleNav() {
      var body = document.body;
      var hamburger = document.getElementById('js-sidebar__button');
      var blackBg = document.getElementById('js-blackBack');
    
      hamburger.addEventListener('click', function() {
        body.classList.toggle('nav-open');
      });
      blackBg.addEventListener('click', function() {
        body.classList.remove('nav-open');
      });
  }
  toggleNav();

  $(window).on('load resize', function() {
    var heightSize = $('.abc').outerHeight();
    $('.p-map').css('height', heightSize)
  });
});