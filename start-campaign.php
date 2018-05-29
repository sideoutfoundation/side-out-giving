<?php include( './inc/header.php'); ?>

    <h1 class="text-center regular join-donate">
        You are supporting<br><strong>2018 Dig Pink School</strong>
    </h1>

    <div class="form-wrapper start-campaign">
        <form class="" action="sign-up-thankyou.php">
        <div class="form-group">
            <label for="name" class="control-label">Name</label>
            <input class="form-control" id="name" type="text" name="name">
        </div>

        <div class="form-row">
            <div class="form-group col-md">
                <label for="email" class="control-label">Email</label>
                <input class="form-control" id="email" type="email" name="email">
            </div>

            <div class="form-group col-md">
                <label for="phone-number">Phone Number</label>
                <input type="tel" class="form-control" id="phone-number">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md">
                <label for="sponsored" class="control-label">Role</label>
                <select name="sponsored" class="custom-select">
                    <option value="" class="placeholder" selected="selected">Select</option>
                    <option value="value1">Value 1</option>
                    <option value="value2">Value 2</option>
                    <option value="value3">Value 3</option>
                </select>
            </div>
            <div class="form-group col-md">
                <label for="school" class="control-label">Organization Name </label>
                <input class="form-control" id="school" type="text" name="school">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md">
                <label for="city" class="control-label">City</label>
                <input class="form-control" id="city" type="text" name="city">
            </div>
            <div class="form-group col-md">
                <label for="state" class="control-label">State</label>
                <select name="state" id="state" class="custom-select">
                    <option value="" class="placeholder" selected="selected">Select a State</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="state" class="control-label">Fundraising Goal</label>
            <div class="switch-field margin-bottom-10">

              <input type="radio" id="switch_1" name="switch" value="no" checked/>
              <label for="switch_1">$500</label>

              <input type="radio" id="switch_2" name="switch" value="yes" />
              <label for="switch_2">$1000</label>

              <input type="radio" id="switch_3" name="switch" value="no" />
              <label for="switch_3">$2500</label>

              <input type="radio" id="switch_4" name="switch" value="no" />
              <label for="switch_4">$5000</label>

              <input type="radio" id="switch_5" name="switch" value="no" />
              <label for="switch_5">Other</label>
            </div>

            <script>
                $( 'label[for=switch_1],label[for=switch_2],label[for=switch_3],label[for=switch_4]' ).click(function() {
                    $( '.other' ).hide();
                });
                $( 'label[for=switch_5]' ).click(function() {
                    $( '.other' ).toggle();
                    $( '#other' ).focus();
                });
            </script>

            <div class="input-group other" style="display: none;">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend">$</span>
                </div>
                <input id="other" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
            </div>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="" value="1" tabindex="3" checked>
            <label class="form-check-label">
                By checking this box, you acknowledge that funds raised through your Dig Pink titled event will be submitted to the Side-Out Foundation (Tax I.D. 20-2510044). Dig Pink is a registered trademark of The Side-Out Foundation and, as such, The Side-Out Foundation is responsible for the allocation of funds raised under the Dig Pink name & logo.  All proceeds from Dig Pink title events fund Side-Out programs and stage IV clinical research.
            </label>
        </div>

        <div class="form-actions">
            <input class="btn" id="" name="" type="submit" value="Sign Up">
        </div>
        </form>
</div>
    </div><!-- .form-wrapper -->
</div>

<?php include( './inc/footer.php'); ?>
