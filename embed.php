<?php include( './inc/header.php'); ?>


<div style="max-width: 430px; margin: 0 auto; padding: 8rem 0;">

	<div class="donation-form-wrapper">

		<ul class="tabs">
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

		<div class="donation-amount form-group">
			<label for="">How much would you like to donate?</label>
			<div class="donation-buttons">
				<a href="#" class="" data-donation="25">$25</a>
				<a href="#" class="selected" data-donation="50">$50</a>
				<a href="#" class="" data-donation="75">$75</a>
				<a href="#" class="" data-donation="100">$100</a>
				<a href="#" class="" data-donation="500">$500</a>
				<a href="#" class="" data-donation="other">Other</a>
			</div>
		</div>

		<div class="donation-type form-group">
			<label for="">How would you like to donate?</label>
			<div class="donation-buttons donation-frequency">
				<a href="#" class="selected">One Time</a>
				<a href="#" class="">Monthly</a>
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

        <div class="form-actions">
        	<button class="btn next">Next</button>
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
