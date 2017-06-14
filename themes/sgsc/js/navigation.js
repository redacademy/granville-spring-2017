
( function($) {
  $(document).ready(function() {
    $('.menu-toggle').click(function (){
      $('.site-content').css({"height": "0", "overflow": "hidden"});
      $('.main-navigation ul').css('visibility', 'visible');
      $('.nav-menu').toggleClass('menu-visible');      
      $('.overlay').toggleClass('overlay-open');
      $('#back-button').css('display', 'initial');
    }) 
  });
})(jQuery);