(function($){

  $('.progress .progress-bar').css("width",function() {
    return $(this).attr("aria-valuenow") + "%";
  })

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
  .not('.tab-link')
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

  /* Add AJAX for Learn More */
  $(".load-activities").on('click', function(e){
    e.preventDefault();
    $(this).siblings(".dataStartingPoint").remove();
    $(this).before('<div class="dataStartingPoint"></div>');
    var button = $(this);
    var parentID = $(this).parent().attr('id');
    var startingPoint = $(this).siblings('.dataStartingPoint');

    // Developer Note: I have a dynamic results URL here because Rick wanted to simulate filtering
    // In your actual implementation, surely you have a better solution

    if(parentID == 'all-activities') { 
      var requestURL = "./ajax/results.php";
    }

    if(parentID == 'donors-activities') { 
      var requestURL = "./ajax/results-donors.php";
    }

    if(parentID == 'campaign-activities') { 
      var requestURL = "./ajax/results-campaigns.php";
    }
    
    if(parentID == 'follower-activities') { 
      var requestURL = "./ajax/results-followers.php";
    }

    $.ajax({ type: "GET",   
      url: requestURL,   
      success : function(text)
      {
        $("#" + parentID + " .activity-block").css({ opacity: 0.5 });
        button.before(text);
        $('body, html').animate({ scrollTop: startingPoint.offset().top }, 1000);
      }
    });
  });

  /* Auto Rotate Tabs for Impact Playbook */
  var tabChange = function(){
    var tabs = $('#impactPlaybook .nav-item > a');
    var active = tabs.filter('.active');
    var next = active.closest('li').next('li').length ? active.closest('li').next('li').find('a') : $('#impactPlaybook .nav-item').filter(':first-child').find('a');
    next.tab('show');
  }

  var tabCycle = setInterval(tabChange, 4000);

  $(function(){
    $('#impactPlaybook .nav-tabs a').click(function(e) {
        e.preventDefault();
        clearInterval(tabCycle);
        $(this).tab('show');
    });
  });

  $(".donation-checkbox").change(function() {
    var oneTimeDonationAmounts = '<div class="donation-box">' +
    '<input type="radio" id="amount_1" name="donation-amounts" value="50">' +
    '<label class="text-center" for="amount_1">$50</label>' +
    '</div>' +
    '<div class="donation-box">' +
    '<span class="popular text-uppercase text-center text-secondary">Most Popular</span>' +
    '<input type="radio" id="amount_2" name="donation-amounts" value="75" checked="checked">' +
    '<label class="text-center" for="amount_2">$75</label>' +
    '</div>' +
    '<div class="donation-box">' +
    '<input type="radio" id="amount_3" name="donation-amounts" value="125">' +
    '<label class="text-center" for="amount_3">$125</label>' +
    '</div>' +
    '<div class="donation-box">' +
    '<input type="radio" id="amount_4" name="donation-amounts" value="250">' +
    '<label class="text-center" for="amount_4">$250</label>' +
    '</div>' +
    '<div class="donation-box">' +
    '<input type="radio" id="amount_5" name="donation-amounts" value="500">' +
    '<label class="text-center" for="amount_5">$500</label>' +
    '</div>' +
    '<div class="donation-box">' +
    '<input type="radio" id="amount_6" name="donation-amounts" value="Other">' +
    '<label class="text-center" for="amount_6">Other</label>' +
    '</div>';

    var monthlyDonationAmounts = '<div class="donation-box">' +
    '<input type="radio" id="amount_1" name="donation-amounts" value="15">' +
    '<label class="text-center" for="amount_1">$15</label>' +
    '</div>' +
    '<div class="donation-box">' +
    '<span class="popular text-uppercase text-center text-secondary">Most Popular</span>' +
    '<input type="radio" id="amount_2" name="donation-amounts" value="25" checked="checked">' +
    '<label class="text-center" for="amount_2">$25</label>' +
    '</div>' +
    '<div class="donation-box">' +
    '<input type="radio" id="amount_3" name="donation-amounts" value="50">' +
    '<label class="text-center" for="amount_3">$50</label>' +
    '</div>' +
    '<div class="donation-box">' +
    '<input type="radio" id="amount_4" name="donation-amounts" value="100">' +
    '<label class="text-center" for="amount_4">$100</label>' +
    '</div>' +
    '<div class="donation-box">' +
    '<input type="radio" id="amount_5" name="donation-amounts" value="150">' +
    '<label class="text-center" for="amount_5">$150</label>' +
    '</div>' +
    '<div class="donation-box">' +
    '<input type="radio" id="amount_6" name="donation-amounts" value="Other">' +
    '<label class="text-center" for="amount_6">Other</label>' +
    '</div>';

    if ( $(this).val() == 'one-time' ) {
      $('.donation-amounts').html(oneTimeDonationAmounts);
    }

    if ( $(this).val() == 'monthly' ) {
      $('.donation-amounts').html(monthlyDonationAmounts);
    }
  });
})(jQuery);
