(function($) {

  $(document).ready(function() {      
    $('.icon-search').click(function(){
        $('.search-field').animate({ width: 'toggle' }, 350);
        $('.search-field').focus();
        return false;
    });
    $(document).click( function(event){
      if( !$('.search-field').is(event.target)){
      $('.main-navigation .search-field').hide('fast');
      }
    });
  });

})(jQuery);
