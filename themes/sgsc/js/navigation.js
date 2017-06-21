
( function($) {
  $(document).ready(function() {

    var $hamburger = $('.menu-toggle'),
        $content = $('.site-content'),
        $mobileMenu = $('.mobile-menu'),
        $overlay = $('.overlay'),
        $backButton = $('#back-button');

    $hamburger.click(function (){
      $content.css({'height': '0', 'overflow': 'hidden'});
      $mobileMenu.toggleClass('menu-visible');      
      $overlay.toggleClass('overlay-open');
      $backButton.css('display', 'initial');
    });
    $backButton.click(function(){
      $content.css({'height': 'auto', 'overflow': 'scroll'});
      $mobileMenu.toggleClass('menu-visible');
      $overlay.toggleClass('overlay-open');
      $backButton.css('display', 'none');
    });
  });

})(jQuery);
