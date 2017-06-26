
( function($) {
  $(document).ready(function() {

    var $hamburger = $('.menu-toggle'),
        $content = $('.site-content'),
        $mobileMenu = $('.nav-menu'),
        $overlay = $('.overlay'),
        $backButton = $('#back-button');

    $hamburger.click(function (){
      $content.css({'height': '0', 'overflow': 'hidden'});
      $overlay.slideDown('slow');
      $mobileMenu.toggleClass('menu-visible');      
      $backButton.css('display', 'initial');
    });
    $backButton.click(function(){
      $content.css({'height': 'auto', 'overflow': 'scroll'});
      $overlay.slideUp('1000');
      $mobileMenu.toggleClass('menu-visible');      
      $backButton.css('display', 'none');
    });
  });

})(jQuery);
