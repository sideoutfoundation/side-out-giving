<div class="modal fade" id="followUs" tabindex="-1" role="dialog" aria-labelledby="followUsModal" aria-hidden="false">
    <div class="modal-dialog modal-social" role="document">
        <div class="modal-content">
            <div class="modal-cta flex-column">
                <h2 class="text-center">Account Login</h2>
                <div class="d-flex flex-row justify-content-between w-100">
                    <a class="btn-facebook flex-grow-1 text-left text-white">
                        <span class="fa fa-facebook fa-fw"></span> Sign in with Facebook
                    </a>
                    <div>&nbsp;</div>
                    <a class="btn-google flex-grow-1 text-left bg-white">
                        <span class="fa fa-google fa-fw"></span> Sign in with Google
                    </a>
                </div>
                <div class="separator text-uppercase text-pink w-100 my-3">Or</div>
                <form class="w-100">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control mw-100" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control mw-100" id="exampleInputPassword1">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember Me</label>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2 w-100">Login</button>
                </form>
                <div class="text-align-left w-100 mt-3">
                    <p class="font-weight-bold mb-lg-0 mb-2">Need an account? <a href="#">Sign Up</a></p>
                    <p><a href="#">Forgot Password?</a></p>
                </div>
            </div>
            <a href="#close-modal" class="close-modal" data-dismiss="modal" aria-label="Close">Close</a>
        </div>
    </div>
</div>

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
                    <div class="donation-type form-group">
                        <label for="">How would you like to donate?</label>
                        <div class="switch-field donation-buttons donation-frequency">
                            <input type="radio" class="donation-checkbox" id="monthly" name="type" value="monthly" checked="checked">
                            <label for="monthly">Monthly</label>
                            <input type="radio" class="donation-checkbox" id="one-time" name="type" value="one-time">
                            <label for="one-time">One Time</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="mb-3">How much would you like to donate?</label>
                        <div class="d-flex donation-amounts justify-content-between flex-wrap featured-selected">
                            <div class="donation-box">
                                <input type="radio" id="amount_1" name="donation-amounts" value="15">
                                <label class="text-center" for="amount_1">$15</label>
                            </div>
                            <div class="donation-box">
                                <span class="popular text-uppercase text-center text-secondary">Most Popular</span>
                                <input type="radio" id="amount_2" name="donation-amounts" value="25" checked="checked" data-featured="true">
                                <label class="text-center" for="amount_2">$25</label>
                            </div>
                            <div class="donation-box">
                                <input type="radio" id="amount_3" name="donation-amounts" value="50">
                                <label class="text-center" for="amount_3">$50</label>
                            </div>
                            <div class="donation-box">
                                <input type="radio" id="amount_4" name="donation-amounts" value="100">
                                <label class="text-center" for="amount_4">$100</label>
                            </div>
                            <div class="donation-box">
                                <input type="radio" id="amount_5" name="donation-amounts" value="150">
                                <label class="text-center" for="amount_5">$150</label>
                            </div>
                            <div class="donation-box">
                                <input type="radio" id="amount_6" name="donation-amounts" value="Other">
                                <label class="text-center" for="amount_6">Other</label>
                            </div>
                        </div>
                        <div class="input-group other" style="display: none;">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
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

<div class="modal fade" id="pledge" tabindex="-1" role="dialog" aria-labelledby="donateModal" aria-hidden="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="donation-form-wrapper">
                <div class="donation-form">
                    <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md">
                            <label for="first_name" class="control-label">First Name</label>
                            <input id="first_name" type="text" name="first_name" placeholder="" class="form-control" aria-required="true" aria-invalid="false">
                        </div>
                        <div class="form-group col-md">
                            <label for="last_name" class="control-label">Last Name</label>
                            <input id="last_name" type="text" name="last_name" placeholder="" class="form-control" aria-required="true" aria-invalid="false">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md">
                            <label for="email" class="control-label">Email</label>
                            <input id="email" type="text" name="email" placeholder="" class="form-control" aria-required="true" aria-invalid="false">
                        </div>
                        <div class="form-group col-md">
                            <label for="phone" class="control-label">Phone</label>
                            <input id="phone" type="text" name="phone" placeholder="" class="form-control" aria-required="true" aria-invalid="false">
                        </div>
                    </div>

                    <div class="donation-amount form-group">
                        <label for="">How much would you like to pledge per dig?</label>
                        <div class="switch-field donation-buttons">
                            <input type="radio" id="pledge_1" name="switch" value="no" checked>
                            <label for="pledge_1">$0.25</label>
                            <input type="radio" id="pledge_2" name="switch" value="no">
                            <label for="pledge_2">$0.50</label>
                            <input type="radio" id="pledge_3" name="switch" value="no">
                            <label for="pledge_3">$0.75</label>
                            <input type="radio" id="pledge_4" name="switch" value="no">
                            <label for="pledge_4">$1</label>
                            <input type="radio" id="pledge_5" name="switch" value="no">
                            <label for="pledge_5">$2</label>
                            <input type="radio" id="pledge_6" name="switch" value="Other">
                            <label for="pledge_6">Other</label>
                        </div>
                        <div id="otherAmount" class="input-group other" style="display: none;">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroupPrepend">$</span>
                                </div>
                                <input id="otherAmountField" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="exceed">
                                <label class="form-check-label" for="exceed">
                                    Not to exceed (total donation)
                                </label>
                            </div>
                            <div id="exceedInput" style="display: none;">
                                <label class="sr-only" for="exceed">Amount</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">$</div>
                                    </div>
                                    <input type="text" class="form-control" id="exceedInputField" placeholder="" autofocus>
                                </div>
                            </div>
                            <script>
                                $(document).ready(function () {
                                    $('.switch-field input[type="radio"]').click(function () {
                                        if ($(this).attr('value') == 'Other') {
                                            $('#otherAmount').show();
                                            $('#otherAmountField').focus();
                                        } else {
                                            $('#otherAmount').hide();
                                        }
                                    });

                                    $('#exceed').change(function () {
                                        if (this.checked) {
                                            $('#exceedInput').show();
                                            $('#exceedInputField').focus();
                                        } else {
                                            $('#exceedInput').hide();
                                        }
                                    });
                                });
                            </script>
                        </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                        <a href="#"><button class="btn btn-primary">Save</button></a>
                    </div>
                </div><!-- donation-form -->
                <a href="#close-modal" data-dismiss="modal" rel="modal:close" class="close-modal ">Close</a>
            </div>
        </div>
    </div>
</div>

<script>
$('#honoree-fields').hide();
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