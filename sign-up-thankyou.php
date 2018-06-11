
<?php include( './inc/header.php'); ?>
</div>
<section class="thank-you-hero"
    style="background-image: linear-gradient( to bottom, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, .4) 100% ),
    url(../img/demo.jpg);">
    <div class="container">
        <section id="thankyou-general">
            <img class="thankyou-image" src="img/woulien-font-white.svg"/>
            <p class="text-center">for signing up for <strong><a href="campaign.php">2018 Dig Pink School</a></strong></p>
            <h2 class="text-center action-title" >Take the first step towards making an impact!</h2>
            <div class="row first-step">
                <a class="btn btn-primary btn-lg" href="#donate">Donate Now</a>
            </div>
        </section>
    </div>
</section>

<section class="thank-you-cta">

    <div class="container">
        <h2 class="text-center customize-title">Did you know that you get a FREE fundraising webpage?</h2>
        <div class="row first-step">
            <p class="text-center">It’s TRUE! Customize your free fundraising web page to make it unique and represent your initiative. You can add text, pictures, even create a video letting those within your community know what you are doing.  Inspire your audience and enhance the success of your campaign!</p>

            <a class="btn  btn-lg btn-blue blue-hover" href="">Customize My Page</a>
        </div>
    </div>
</section>

<div id="outer-donate">
<canvas id="canvas"></canvas>
<section id="donate">

    <div class="container">
        <h1 class="text-center">Kickstart Your Fundraising</h1>
            <h2 class="donate-last ">
                Now you can spread the word and empower those around your program to make their impact!
            </h2>

            <div class="donate-desctiption">
                <p>Did you know that having funds on your fundraising page to start increases donor contributions by 33%? It’s like putting a $1 in the donation jar!  Make the first donation and inspire your visitors contribute and help you reach your fundraising goal.</p>
            </div>


       <!--  <div class="section-donate"> -->
            <div class="form-donate">
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
                                    <div class="input-group other" style="display: none;">
                                        <span class="input-group-addon">$</span>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
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
                            <a href="embed-2.php"><button class="btn btn-primary next">Next</button></a>
                            <div class="donation-added">
                                Your Donation:
                                <strong>$50</strong>
                            </div>
                        </div>

                    </div><!-- .donation-form -->
                </div>
            </div><!--
 -->


        </div>
    <!-- </div> -->

</section>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script>
$('#honoree-fields').hide()
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
})

$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

  (function () {
    // globals
    var canvas;
    var ctx;
    var W;
    var H;
    var mp = 150; //max particles
    var particles = [];
    var angle = 0;
    var tiltAngle = 0;
    var confettiActive = true;
    var animationComplete = true;
    var deactivationTimerHandler;
    var reactivationTimerHandler;
    var animationHandler;

    // objects

    var particleColors = {
        colorOptions: ["DodgerBlue", "OliveDrab", "Gold", "pink", "SlateBlue", "lightblue", "Violet", "PaleGreen", "SteelBlue", "SandyBrown", "Salmon", "Crimson"],
        colorIndex: 0,
        colorIncrementer: 0,
        colorThreshold: 10,
        getColor: function () {
            if (this.colorIncrementer >= 10) {
                this.colorIncrementer = 0;
                this.colorIndex++;
                if (this.colorIndex >= this.colorOptions.length) {
                    this.colorIndex = 0;
                }
            }
            this.colorIncrementer++;
            return this.colorOptions[this.colorIndex];
        }
    }

    function confettiParticle(color) {
        this.x = Math.random() * W; // x-coordinate
        this.y = (Math.random() * H) - H; //y-coordinate
        this.r = RandomFromTo(10, 30); //radius;
        this.d = (Math.random() * mp) + 10; //density;
        this.color = color;
        this.tilt = Math.floor(Math.random() * 10) - 10;
        this.tiltAngleIncremental = (Math.random() * 0.07) + .05;
        this.tiltAngle = 0;

        this.draw = function () {
            ctx.beginPath();
            ctx.lineWidth = this.r / 2;
            ctx.strokeStyle = this.color;
            ctx.moveTo(this.x + this.tilt + (this.r / 4), this.y);
            ctx.lineTo(this.x + this.tilt, this.y + this.tilt + (this.r / 4));
            return ctx.stroke();
        }
    }

    $(document).ready(function () {
        SetGlobals();
        InitializeButton();
        InitializeConfetti();

        $(window).resize(function () {
            W = window.innerWidth;
            H = window.innerHeight;
            canvas.width = W;
            canvas.height = H;
        });

    });

    function InitializeButton() {
        $('#stopButton').click(DeactivateConfetti);
        $('#startButton').click(RestartConfetti);
    }

    function SetGlobals() {
        canvas = document.getElementById("canvas");
        ctx = canvas.getContext("2d");
        W = window.innerWidth;
        H = window.innerHeight;
        canvas.width = W;
        canvas.height = H;
    }

    function InitializeConfetti() {
        particles = [];
        animationComplete = false;
        for (var i = 0; i < mp; i++) {
            var particleColor = particleColors.getColor();
            particles.push(new confettiParticle(particleColor));
        }
        StartConfetti();
    }

    function Draw() {
        ctx.clearRect(0, 0, W, H);
        var results = [];
        for (var i = 0; i < mp; i++) {
            (function (j) {
                results.push(particles[j].draw());
            })(i);
        }
        Update();

        return results;
    }

    function RandomFromTo(from, to) {
        return Math.floor(Math.random() * (to - from + 1) + from);
    }


    function Update() {
        var remainingFlakes = 0;
        var particle;
        angle += 0.01;
        tiltAngle += 0.1;

        for (var i = 0; i < mp; i++) {
            particle = particles[i];
            if (animationComplete) return;

            if (!confettiActive && particle.y < -15) {
                particle.y = H + 100;
                continue;
            }

            stepParticle(particle, i);

            if (particle.y <= H) {
                remainingFlakes++;
            }
            CheckForReposition(particle, i);
        }

        if (remainingFlakes === 0) {
            StopConfetti();
        }
    }

    function CheckForReposition(particle, index) {
        if ((particle.x > W + 20 || particle.x < -20 || particle.y > H) && confettiActive) {
            if (index % 5 > 0 || index % 2 == 0) //66.67% of the flakes
            {
                repositionParticle(particle, Math.random() * W, -10, Math.floor(Math.random() * 10) - 20);
            } else {
                if (Math.sin(angle) > 0) {
                    //Enter from the left
                    repositionParticle(particle, -20, Math.random() * H, Math.floor(Math.random() * 10) - 20);
                } else {
                    //Enter from the right
                    repositionParticle(particle, W + 20, Math.random() * H, Math.floor(Math.random() * 10) - 20);
                }
            }
        }
    }
    function stepParticle(particle, particleIndex) {
        particle.tiltAngle += particle.tiltAngleIncremental;
        particle.y += (Math.cos(angle + particle.d) + 3 + particle.r / 2) / 2;
        particle.x += Math.sin(angle);
        particle.tilt = (Math.sin(particle.tiltAngle - (particleIndex / 3))) * 15;
    }

    function repositionParticle(particle, xCoordinate, yCoordinate, tilt) {
        particle.x = xCoordinate;
        particle.y = yCoordinate;
        particle.tilt = tilt;
    }

    function StartConfetti() {
        W = window.innerWidth;
        H = window.innerHeight;
        canvas.width = W;
        canvas.height = H;
        (function animloop() {
            if (animationComplete) return null;
            animationHandler = requestAnimFrame(animloop);
            return Draw();
        })();
    }

    function ClearTimers() {
        clearTimeout(reactivationTimerHandler);
        clearTimeout(animationHandler);
    }

    function DeactivateConfetti() {
        confettiActive = false;
        ClearTimers();
    }

    function StopConfetti() {
        animationComplete = true;
        if (ctx == undefined) return;
        ctx.clearRect(0, 0, W, H);
    }

    function RestartConfetti() {
        ClearTimers();
        StopConfetti();
        reactivationTimerHandler = setTimeout(function () {
            confettiActive = true;
            animationComplete = false;
            InitializeConfetti();
        }, 100);

    }

    window.requestAnimFrame = (function () {
        return window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        window.oRequestAnimationFrame ||
        window.msRequestAnimationFrame ||
        function (callback) {
            return window.setTimeout(callback, 1000 / 60);
        };
    })();
})();

</script>

<?php include( './inc/modal.php'); ?>
<?php include( './inc/footer.php'); ?>
