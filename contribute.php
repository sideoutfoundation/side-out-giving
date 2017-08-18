<?php include( './inc/header.php'); ?>

    <h1 class="text-center regular join-donate">
        You are donating to <strong>Averill High School funds for 2017 Power of Pink</strong>
    </h1>

    <div class="form-wrapper form-steps">
        <h2><span>1</span>Donation</h2>
        <div class="donation-amount form-group">
            <label for="">How much would you like to donate?</label>
            <div class="switch-field donation-buttons">
                <input type="radio" id="switch_1" name="switch" value="no">
                <label for="switch_1">$25</label>
                <input type="radio" id="switch_2" name="switch" value="no" checked>
                <label for="switch_2">$50</label>
                <input type="radio" id="switch_3" name="switch" value="no">
                <label for="switch_3">$75</label>
                <input type="radio" id="switch_4" name="switch" value="no">
                <label for="switch_4">$100</label>
                <input type="radio" id="switch_5" name="switch" value="no">
                <label for="switch_5">$500</label>
                <input type="radio" id="switch_6" name="switch" value="no">
                <label for="switch_6">Other</label>
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
            <label>
                <input type="checkbox" name="anonymously" value="1" tabindex="">
                I would like to make this donation anonymously
            </label>
        </div>

        <div class="form-check">
            <label>
                <input type="checkbox" name="in-honor" value="1" tabindex="">
                Give in honor or in memory of a loved one
            </label>
        </div>
        <div id="" class="" style="display: block;">
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> In honor of…
                </label>
            </div>

            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> In memory of…
                </label>
            </div>

            <div class="form-group">
                <label for="dedication_honoree_name">Honoree’s Name</label>
                <div class="dedication_honoree_name">
                    <input class="form-control" name="dedication_honoree_name" type="text" id="dedication_honoree_name">
                </div>
            </div>
        </div>
    </div><!-- .form-wrapper -->

    <div class="form-wrapper form-steps">
        <h2><span>2</span>Contact</h2>
        <div class="form-group">
            <label for="name" class="control-label">Name</label>
            <input class="form-control" id="email" type="text" name="name"
            placeholder="">
        </div>

        <div class="form-group">
            <label for="email" class="control-label">Email</label>
            <input class="form-control" id="email" type="email" name="email"
            placeholder="">
        </div>

        <div class="row">
            <div class="col-sm city">
                <div class="form-group">
                    <label>City</label>
                    <input class="form-control" name="city" type="text" id="city">
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label>State</label>
                    <select id="state" class="" name="State">
                        <option value="Alaska">AK</option>
                        <option value="Alabama">AL</option>
                    </select>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label>Zip</label>
                    <input type="text" class="form-control" name="zip" id="zip">
                </div>
            </div>
        </div>

        <div class="employer-match">
            <label>See if your employer will match your donation</label>
            <input class="form-control" name="employer" type="text" id=""
            placeholder="Enter company name"
            >
        </div>
    </div><!-- .form-wrapper -->

    <div class="form-wrapper form-steps">
        <h2><span>3</span>Payment</h2>
        <div class="form-group">
            <label for="name" class="control-label">Credit Card Number</label>
            <input data-stripe="number" class="form-control cc-number" name="number" type="text" id="number">
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>Expiration</label>
                    <div class="expiration">
                        <input class="form-control" name="" type="text" id="" placeholder="MM">
                        <input class="form-control" name="" type="text" id="" placeholder="YYYY">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>CVV</label>
                    <input type="text" class="form-control" name="cvv" id="cvv">
                </div>
            </div>
        </div>

        <div class="form-check">
            <label>
                <input type="checkbox" name="anonymously" value="1" tabindex="" checked>
                I'd like to cover the processing fee so 100% of my
                donation goes to Side-Out Foundation
            </label>
        </div>

        <div class="form-actions">
            <button class="btn">Donate Now</button>
            <div class="donation-added">
                Your Donation:
                <strong>$51.26</strong>
            </div>
        </div>

        <p class="privacy-note">
            By donating you agree to our terms and privacy policies
        </p>

    </div>

<?php include( './inc/footer.php'); ?>
