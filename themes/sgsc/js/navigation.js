
( function($) {
  $(document).ready(function() {
    $('.menu-toggle').click(function (){
      $('.main-navigation ul').css('visibility', 'visible');
      $('.nav-menu').toggleClass('menu-visible');      
      $('.overlay').toggleClass('overlay-open');
    }) 
  });
})(jQuery);