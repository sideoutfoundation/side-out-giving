(function($){
    /*
        Assign empty url value to the iframe src attribute when
        modal hide, which stop the video playing
    */
    $('#video, #research').on('hidden.bs.modal', function(event) {    
        $('.embed-responsive iframe').attr('src', '');
        console.log('closed');
    });

    $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .on('click', function(event) {
        // On-page links
        if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
          &&
          location.hostname == this.hostname
        ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000, function() {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) { // Checking if the target was focused
                return false;
              } else {
                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              };
            });
          }
        }
    });

    $("#print-this").on('click', function(e){
        e.preventDefault();
        window.print();
    });

    /*
        Assign empty url value to the iframe src attribute when
        modal hide, which stop the video playing
    */
    $(document).on('hide.bs.modal', function(event, extra) {
        $(this).find('.embed-responsive iframe').each(function() {
            tempSrc = $(this).attr('src');
            $(this).attr('src', "");
            $(this).attr('src', tempSrc);
        });
    });

    $(document).on('hidden.bs.modal', function(event, extra) {
        $(this).find('.embed-responsive iframe').each(function() {
            tempSrc = $(this).attr('src');
            $(this).attr('src', "");
            $(this).attr('src', tempSrc);
        });
    });

    /*
        Trigger donate modal on load
    */
    if (window.location.hash == '#donate') {
        if ($('#donate').length) {
            $('#donate').modal('show');
            $('#search-results').hide();
        }
    }

    $('.result-option .button-area').on('click', function() {
        if ($('#donate').length) {
            $('#donate').modal('show');
            $('#search-results').hide();
        }
    });

    /*Remove when SELECT@ implemented*/
    $('#search-input').on('keyup', function() {
        if($(this).val().length) {
          $('#search-results').show();
        } else {
          $('#search-results').hide();
        }
    });
})(jQuery);
