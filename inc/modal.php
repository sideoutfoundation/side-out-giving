<div class="modal fade" id="video" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/YWII9pilahQ?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="modal-cta">
                <strong>Inspiring hope in the fight against stage IV breast cancer</strong> <a href="" data-dismiss="modal" data-toggle="modal" class="btn" data-target="#donate">Donate Now</a>
            </div>
            <a href="#close-modal" class="close-modal" data-dismiss="modal" aria-label="Close">Close</a>
        </div>
    </div>
</div>

<div class="modal fade" id="research" tabindex="-1" role="dialog" aria-labelledby="researchModal" aria-hidden="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/WTSuhHsOefU?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="modal-cta">
                <strong>Inspiring hope in the fight against stage IV breast cancer</strong> <a href="" data-dismiss="modal" data-toggle="modal" class="btn" data-target="#donate">Donate Now</a>
            </div>
            <a href="#close-modal" class="close-modal" data-dismiss="modal" aria-label="Close">Close</a>
        </div>
    </div>
</div>

<div class="modal fade" id="donate" tabindex="-1" role="dialog" aria-labelledby="donateModal" aria-hidden="false">
    <div class="modal-dialog" role="document">

        <div class="modal-content">
                <div class="donation-form-wrapper">

        <ul class="tabs-nav">
            <li class="tab-link current" data-tab="tab-1">
                <span>1</span>Donation
            </li>
            <li class="tab-link" data-tab="tab-2">
                <span>2</span>Contact
            </li>
            <li class="tab-link" data-tab="tab-2">
                <span>3</span>Payment
            </li>
        </ul>

        <div class="donation-form">
            <div class="donation-form-inner-wrapper">
                <div class="donation-form-inner">
                    <div class="donation-amount form-group">
                        <label for="">How much would you like to donate?</label>
                        <div class="switch-field donation-buttons">
                            <input type="radio" id="switch_1" name="switch" value="no">
                            <label for="switch_1">$25</label>
                            <input type="radio" id="switch_2" name="switch" value="no">
                            <label for="switch_2">$50</label>
                            <input type="radio" id="switch_3" name="switch" value="no" checked>
                            <label for="switch_3">$75</label>
                            <input type="radio" id="switch_4" name="switch" value="no">
                            <label for="switch_4">$100</label>
                            <input type="radio" id="switch_5" name="switch" value="no">
                            <label for="switch_5">$500</label>
                            <input type="radio" id="switch_6" name="switch" value="no">
                            <label for="switch_6">Other</label>
                        </div>
                        <div class="input-group other" style="display: none;">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                    </div>

                    <div class="donation-type form-group">
                        <label for="">How would you like to donate?</label>
                        <div class="switch-field donation-buttons donation-frequency">
                            <input type="radio" id="one-time" name="type" value="no" checked>
                            <label for="one-time">One Time</label>
                            <input type="radio" id="monthly" name="type" value="no">
                            <label for="monthly">Monthly</label>
                        </div>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="anonymously">
                        <label class="form-check-label" for="anonymously">
                            I would like to make this donation anonymously
                        </label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="in-honor" id="in-honor" value="1" tabindex="">
                        <label class="form-check-label" for="in-honor">
                            Give in honor or in memory of a loved one
                        </label>
                    </div>

                    <div id="honoree-fields">
                        <div class="form-group">
                            <label for="dedication_honoree_name">Honoree’s Name</label>
                            <input class="form-control" name="dedication_honoree_name" type="text" id="dedication_honoree_name">
                        </div>

                        <div class="form-group">
                            <label for="dedication_honoree_email">Honoree’s Email</label>
                            <input class="form-control" name="dedication_honoree_email" type="text" id="dedication_honoree_email">
                        </div>

                        <div class="form-group">
                            <label for="">Message to honoree</label>
                            <textarea class="form-control" id="" rows="3"></textarea>
                        </div>
                    </div>
                </div><!-- .donation-form-inner -->
            </div><!-- .donation-form-inner-wrapper -->

            <div class="form-actions">
                <a href="embed-2.php"><button class="btn next">Next</button></a>
                <div class="donation-added">
                    Your Donation:
                    <strong>$50</strong>
                </div>
            </div>
            <div class="muted small d-block d-sm-none text-center">
                or <a href="#" data-dismiss="modal" aria-label="Close">Cancel</a>
            </div>
        </div><!-- .donation-form -->
            <a href="#close-modal" data-dismiss="modal" rel="modal:close" class="close-modal ">Close</a>
            </div>
        </div>

    </div>
</div>

<script>
$('#honoree-fields').hide()
$('#in-honor').click(function(){
    if (this.checked) {
        var innerHeight = $('.donation-form-inner').height()
        $('.donation-form-inner').height(innerHeight)
        $('.donation-form-inner').addClass('reveal')
        $('#honoree-fields').show()
    } else {
        $('.donation-form-inner').removeClass('reveal')
        $('#honoree-fields').hide()
    }
});
</script>

<div class="modal fade" id="leaving" tabindex="-1" role="dialog" aria-labelledby="leavingModal" aria-hidden="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <div class="modal-body">
                <img src="../img/side-out-mark.png" height="150" width="150" alt="Share">
                <h2>Before you go, mind sharing?</h2>
                <h3>Averill Park High School Raising funds for 2017 Power of Pink Queensbury</h3>
                <p>
                    All funds raised go toward a trial specifically for patients with stage
                    IV breast cancer, the most advanced form of the disease and the least
                    funded area of research.
                </p>
                <div class="share-buttons">
                    <a href="#" class="social social-facebook">

                        <!--
                            IE 9,10,11 Support for SVG sprites
                            https://github.com/Keyamoon/svgxuse
                        -->

                        <svg class="icon">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="./img/sprites.svg#icon-facebook">
                            </use>
                        </svg>
                    </a>
                    <a href="#" class="social social-twitter">
                        <svg class="icon">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="./img/sprites.svg#icon-twitter">
                            </use>
                        </svg>
                    </a>
                    <a href="#" class="social social-email">
                        <svg class="icon icon-envelope">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="./img/sprites.svg#icon-envelope">
                            </use>
                        </svg>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

<script>

// Exit intent
// function addEvent(obj, evt, fn) {
//     if (obj.addEventListener) {
//         obj.addEventListener(evt, fn, false);
//     }
//     else if (obj.attachEvent) {
//         obj.attachEvent("on" + evt, fn);
//     }
// }

// // Exit intent trigger
// addEvent(document, 'mouseout', function(evt) {

//     if (evt.toElement == null && evt.relatedTarget == null ) {
//         $("#leaving").modal();
//     };

//});

</script>
