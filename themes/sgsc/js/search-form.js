(function($) {

  $(document).ready(function() {      
    $('.icon-search').click(function(){
        $('.search-field').animate({ width: 'toggle' });
        $('.icon-search').hide();
        $('.search-field').focus();
        return false;
    });
    $(document).click( function(event){
      if( !$('.search-field').is(event.target)){
      $('.search-field').hide('slow');
      $('.icon-search').show();
      }
    });
  });

})(jQuery);


//     $(document).click( function(event){
//       if( !$('.search-field').is(event.target)){
//       $('.search-field').hide('slow');
//       setTimeout(function(){
//         $('.icon-search').show();
//       }, 487)
//       }
//     });
//   });

// })(jQuery);