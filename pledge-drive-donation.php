<?php include( './inc/header-logged-out.php'); ?>



<div class="row">
    <div class="form-wrapper form-wrapper--no-bg">
        <h2 class="text-center regular">
            Thank you for supporting the
            <strong class="text-pink">Sydney's Dig Pink Campaign 15 Diamond</strong>
            Pledge Drive
        </h2>
        <h3 class="text-center regular">
            We did <strong class="text-primary">265 Digs!</strong>
            <br/>
            Your pledge commitment is: <strong class="text-primary">$66.25</strong>
        </h3>

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
                            <div class="input-group other" style="">
                                <span class="input-group-text">$</span>
                                <input type="text" class="form-control" value="66.75" aria-label="Amount (to the nearest dollar)">
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
                            <input type="checkbox" class="form-check-input" value="1" name="anonymously" id="anonymously">
                            <label class="form-check-label" for="anonymously">I would like to make this donation anonymously</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="in-honor" id="in-honor" value="1" tabindex="">
                            <label class="form-check-label" for="in-honor">Give in honor or in memory of a loved one</label>
                        </div>

                        <div id="honoree-fields" style="display: none;">
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="customRadioInline1" name="customRadioInline1" class="form-check-input">
                                    <label class="custom-control-label" for="customRadioInline1">In honor of</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="customRadioInline2" name="customRadioInline1" class="form-check-input">
                                    <label class="custom-control-label" for="customRadioInline2">In memory of</label>
                                </div>
                            </div>
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

            </div><!-- .donation-form -->
        </div><!-- .donation-form-wrapper -->

    </div><!-- .form-wrapper -->
</div><!-- .row -->

<br>
or
<br>

<div class="row">
    <div class="form-wrapper form-wrapper--pledge">
        <h2 class="text-center regular">
            Thank you for supporting the
            <strong class="text-pink">Sydney's Dig Pink Campaign 15 Diamond</strong>
            Pledge Drive
        </h2>
        <h3 class="text-center regular">
            We did <strong class="text-primary">265 Digs!</strong>
            <br/>
            Your pledge commitment is: <strong class="text-primary">$66.25</strong>
        </h3>

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
                            <div class="input-group other" style="">
                                <span class="input-group-text">$</span>
                                <input type="text" class="form-control" value="66.75" aria-label="Amount (to the nearest dollar)">
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
                            <input type="checkbox" class="form-check-input" value="1" name="anonymously" id="anonymously">
                            <label class="form-check-label" for="anonymously">I would like to make this donation anonymously</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="in-honor" id="in-honor" value="1" tabindex="">
                            <label class="form-check-label" for="in-honor">Give in honor or in memory of a loved one</label>
                        </div>

                        <div id="honoree-fields" style="display: none;">
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="customRadioInline1" name="customRadioInline1" class="form-check-input">
                                    <label class="custom-control-label" for="customRadioInline1">In honor of</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="customRadioInline2" name="customRadioInline1" class="form-check-input">
                                    <label class="custom-control-label" for="customRadioInline2">In memory of</label>
                                </div>
                            </div>
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

            </div><!-- .donation-form -->
        </div><!-- .donation-form-wrapper -->

    </div><!-- .form-wrapper -->
</div><!-- .row -->


    </div>
</div>


    </div>
</div>


<?php include( './inc/footer.php'); ?>
