  $(function() {
    //----- OPEN
    var open=0;
    $('[pd-popup-open]').on('click', function(e)  {
        var targeted_popup_class = jQuery(this).attr('pd-popup-open');
        $('[pd-popup="' + targeted_popup_class + '"]').fadeIn(100);

        open=open+1;

        $('body').addClass('stop-scrolling');
        $('body').bind('touchmove', function(e){e.preventDefault()});
        e.preventDefault();
    });
 
    //----- CLOSE
    $('[pd-popup-close]').on('click', function(e)  {
        var targeted_popup_class = jQuery(this).attr('pd-popup-close');
        $('[pd-popup="' + targeted_popup_class + '"]').fadeOut(200);

        open=open-1;

        if(open>0)
            {
                $('body').addClass('stop-scrolling');
                $('body').bind('touchmove', function(e){e.preventDefault()});
            }
        else
            {
                $('body').removeClass('stop-scrolling');
                $('body').unbind('touchmove');
            }

        
        e.preventDefault();
    });


});