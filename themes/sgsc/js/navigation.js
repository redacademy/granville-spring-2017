(function ($) {
  $(document).ready(function () {

    var $hamburger = $('.menu-toggle'),
      $content = $('.site-content'),
      $mobileMenu = $('.nav-menu'),
      $overlay = $('.overlay'),
      $backButton = $('#back-button');

    $hamburger.click(function () {
      $content.css({ 'height': '0', 'overflow': 'hidden' });
      $overlay.addClass('overlay-open').slideDown('1000');
      $mobileMenu.toggleClass('menu-visible');
      $backButton.css('display', 'initial');
    });
    $backButton.click(function () {
      $content.css({ 'height': 'auto', 'overflow': 'scroll' });
      $overlay.slideUp('slow');
      $mobileMenu.toggleClass('menu-visible');
      $backButton.css('display', 'none');
      $overlay.removeClass('overlay-open');
    });
    (function ($) {
      var $window = $(window),
        $overlay = $('.overlay');

      $window.resize(function resize() {
        if ($window.width() > 480) {
          return $overlay.addClass('desktopWidth');
        }
        $overlay.removeClass('desktopWidth');
      }).trigger('resize');
    })(jQuery);
  });

})(jQuery);
