
<?php include( './inc/header.php'); ?>


<div class="row">
    <h1 class="text-center regular join-donate">
        Sign In from <br/><strong><a href="campaign.php">2018 Dig Pink School</a></strong>
    </h1>

    <div class="form-wrapper sign-up">

        <h1>Account Login</h1>

        <div class="social-logins">
            <a href="#" class="btn-facebook">
                <span>
                    <svg role="img" class="icon-facebook">
                        <use xlink:href="./img/sprites.svg#icon-facebook"></use>
                    </svg>
                </span>Login with Facebook
            </a>
            <a href="#" class="btn-google">
                <span>
                    <svg role="img" class="icon-google">
                        <use xlink:href="./img/sprites.svg#icon-google"></use>
                    </svg>
                </span>Login with Google
            </a>
        </div>

        <span class="or">OR</span>
        <hr class="or-line"/>

        <form action="campaign.php">
            <div class="form-group">
                <label for="email" class="control-label">Email</label>
                <input class="form-control" id="email" type="email" name="email">
            </div>

            <div class="form-group">
                <label for="password" class="control-label">Password</label><input class="form-control" id="password"
                type="password" name="password">
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" tabindex="3">
                <label class="form-check-label" for="defaultCheck1">
                    Remember Me
                </label>
            </div>


            <div class="form-actions">
                <input class="btn btn-full" id="" name="" type="submit" value="Login">
            </div>
        </form>

        <strong>Need an account? <a href="sign-up-campaign.php" title="">Sign Up</a></strong>
        <br>
        <a href="forgot-password.php" title="">Forgot password?</a>

    </div><!-- .form-wrapper -->
</div><!-- .row -->

<?php include( './inc/footer.php'); ?>
