/**
 *
 * Application File
 *
 **/
  (function($){
    $(document).ready(function(){

        var causeRepaintsOn = $("#act-now h2");

        $(window).resize(function() {
            causeRepaintsOn.css("z-index", 1);
        });


    });
  })(jQuery);