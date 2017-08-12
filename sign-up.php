
<?php include( './inc/header.php'); ?>


<div class="row">
    <div class="form-wrapper sign-up">

        <h1>Sign Up</h1>

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
            <label for="name" class="control-label">Name</label>
            <input class="form-control" id="email" type="text" name="name">
        </div>

        <div class="form-group">
            <label for="email" class="control-label">Email</label>
            <input class="form-control" id="email" type="email" name="email">
        </div>

        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="password" class="control-label">Password</label><input class="form-control" id="password"
                    type="password" name="password">
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label for="password_confirmation" class="control-label">Confirm Password</label>
                    <input class="form-control" id="password_confirmation" type="password" name="password_confirmation">
                </div>
            </div>
        </div>


        <div class="form-actions">
            <input class="btn" id="" name="" type="submit" value="Sign Up">
        </div>

        <strong>Already have an account? <a href="sign-in.php" title="">Sign In</a></strong>

    </div><!-- .form-wrapper -->
</div><!-- .row -->

<?php include( './inc/footer.php'); ?>
