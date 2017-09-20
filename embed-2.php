<?php include( './inc/header.php'); ?>


<div style="max-width: 430px; margin: 0 auto; padding: 8rem 0;">

    <div class="donation-form-wrapper">

        <ul class="tabs">
            <li class="tab-link completed" data-tab="tab-1">
                <span>
                    <svg>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                            xlink:href="./img/sprites.svg#icon-checkmark">
                        </use>
                    </svg>
                </span>Donation
            </li>
            <li class="tab-link current" data-tab="tab-2">
                <span>2</span>Contact
            </li>
            <li class="tab-link" data-tab="tab-2">
                <span>3</span>Payment
            </li>
        </ul>

        <div class="donation-form">

            <div class="form-group has-danger">
                <label for="name" class="control-label">Name</label>
                <input class="form-control" id="email" type="text" name="name"
                placeholder="">
                <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
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
                    <div class="form-group has-danger">
                        <label>State</label>
                        <select id="state" class="form-control-danger" name="State" required >
                            <option value="Alaska">AK</option>
                            <option value="Alabama">AL</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group has-danger">
                        <label>Zip</label>
                        <input type="text" class="form-control form-control-danger" name="zip" id="zip">
                    </div>
                </div>
            </div>

            <div class="employer-match">
                <label>See if your employer will match your donation</label>
                <input class="form-control" name="employer" type="text" id=""
                placeholder="Enter company name"
                >
            </div>

            <div class="form-actions">
                <a href="embed-3.php"><button class="btn next">Next</button></a>
                <div class="donation-added">
                    Your Donation:
                    <strong>$50</strong>
                </div>
            </div>



        </div><!-- .donation-form -->

    </div>

</div>


    </div>
</div>


<?php include( './inc/footer.php'); ?>
