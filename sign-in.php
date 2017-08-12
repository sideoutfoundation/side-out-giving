
<?php include( './inc/header.php'); ?>


<div class="row">
    <div class="form-wrapper sign-up">

        <h1>Sign In</h1>

        <div class="social-logins">
            <a href="#" class="btn-facebook">
                <span>
                    <svg role="img" class="icon-facebook">
                        <use xlink:href="./img/sprites.svg#icon-facebook"></use>
                    </svg>
                </span>
                Sign in with Facebook
            </a>
            <a href="#" class="btn-google">
                <span>
                    <svg role="img" class="icon-google">
                        <use xlink:href="./img/sprites.svg#icon-google"></use>
                    </svg>
                </span>
                Sign in with Google
            </a>
        </div>

        <div class="form-group">
            <label for="email" class="control-label">Email</label>
            <input class="form-control" id="email" type="email" name="email">
        </div>

        <div class="form-group">
            <label for="password" class="control-label">Password</label><input class="form-control" id="password"
            type="password" name="password">
        </div>

        <div class="form-check">
            <label>
                <input type="checkbox" name="remember" value="1" tabindex="3" checked="">Remember Me
            </label>
        </div>

        <div class="form-actions">
            <input class="btn" id="" name="" type="submit" value="Sign In">
        </div>

        <strong>Need an account? <a href="sign-up.php" title="">Sign Up</a></strong>
        <br>
        <a href="#" title="">Forgot password?</a>

    </div><!-- .form-wrapper -->
</div><!-- .row -->

<?php include( './inc/footer.php'); ?>
