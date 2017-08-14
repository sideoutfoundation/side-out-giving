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
			<li class="tab-link completed" data-tab="tab-2">
				<span>
					<svg>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                            xlink:href="./img/sprites.svg#icon-checkmark">
                        </use>
                    </svg>
                </span>Contact
			</li>
			<li class="tab-link current" data-tab="tab-2">
				<span>3</span>Payment
			</li>
		</ul>

		<div class="donation-form">

			<div class="form-group">
            	<label for="name" class="control-label">Credit Card Number</label>
            	<input data-stripe="number" class="form-control cc-number" name="number" type="text" id="number">
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

        	<div class="form-check">
	            <label>
	                <input type="checkbox" name="anonymously" value="1" tabindex="">
	                I'd like to cover the processing fee so 100% of my 
	                donation goes to Side-Out Foundation
	            </label>
        	</div>

	        <div class="form-actions">
	        	<button class="btn next">Donate Now</button>
	        	<div class="donation-added">
	        		Your Donation:
	        		<strong>$51.26</strong>
	        	</div>
	        </div>

	        <p class="privacy-note">
	        	By donating you agree to our terms and privacy policies
	        </p>



		</div><!-- .donation-form -->

	</div>

</div>


	</div>
</div>


<?php include( './inc/footer.php'); ?>
