(function($) {

  $(document).ready(function() {      
    $('.icon-search').click(function(){
        $('.main-navigation .search-field').toggle('fast');
        $('.main-navigation .search-field').focus();
        return false;
    });
    $(document).click( function(event){
      if( !$('.search-field').is(event.target)){
      $('.main-navigation .search-field').hide('fast');
      }
    });
  });

})(jQuery);
