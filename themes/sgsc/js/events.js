(function($) {

  $(document).ready(function() { 

    var today = new Date();

    var mm = today.getMonth() + 1; //January is 0!

    var yyyy = today.getFullYear();
    if (mm < 10) {
      mm = "0" + mm;
    }
    today = yyyy + "-" + mm;
    $('#load-event-calendar').load('/sgsc/events/' +today + '/ #tribe-events-content')
      });

})(jQuery);