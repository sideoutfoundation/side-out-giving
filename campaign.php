<?php include( './inc/header.php'); ?>
</div>
<section class="hero"
    style="background-image: linear-gradient( to bottom, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, .4) 100% ),
    url(../img/demo.jpg);">

    <div class="container">
        <div class="row">
            <div class="hero-text">
                <div class="campaign-avatar">
                    <figure>
                        <img src="./img/avatar-default.png" alt="">
                    </figure>
                </div>
                <div class="campaign-title">
                    2018 Dig Pink School
                    <h1>Averill Park High School</h1>
                    <div class="campaign-subtitle">
                        Raising funds for 2017 Power of Pink Queensbury
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="campaign-details">
    <div class="container">
        <div class="row">
            <div class="campaign-share">
                <div class="share-buttons">
                    <strong>
                        Share
                    </strong>
                    <a href="#" class="social social-facebook">
                        <!--
                            IE 9,10,11 Support for SVG sprites
                            https://github.com/Keyamoon/svgxuse
                        -->
                        <svg class="icon">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="./img/sprites.svg#icon-facebook">
                            </use>
                        </svg>
                    </a>
                    <a href="#" class="social social-twitter">
                        <svg class="icon">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="./img/sprites.svg#icon-twitter">
                            </use>
                        </svg>
                    </a>
                    <a href="#" class="social social-email">
                        <svg class="icon icon-envelope">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="./img/sprites.svg#icon-envelope">
                            </use>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="campaign-main">
                <div class="campaign-raised">
                    <h2>
                        $550 <span>Raised</span>
                    </h2>
                    <div class="progress">
                        <div class="progress-bar" id="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div><!-- .progress -->

                    <div class="progress-stats">
                        <div class="row">
                            <div class="col">
                                58%
                            </div>
                            <div class="col text-right">
                                $1550 Goal
                            </div>
                        </div>
                    </div><!-- .progress-stats -->
                </div><!-- .campaign-raised -->

                <div class="campaign-buttons">
                    <a href="" data-toggle="modal" class="btn" data-target="#donate">Donate</a>
                    <a href="sign-in-campaign.php" class="btn btn-blue-inverse"
                    data-toggle="tooltip" data-placement="bottom"
                    title="" data-original-title="Become a supporter. Increase your donation making your own fundraising page which will support this campaign. Then share it with family and friends.">
                        Fundraise for this Campaign
                    </a>
                </div><!-- .campaign-buttons -->

                <hr>

                <div class="campaign-text">
                    <h2>About Our Campaign</h2>
                    <p>
                        Vivamus maximus, eros congue rhoncus tincidunt, felis
                        tortor tempus est, quis consectetur urna leo nec ligula. Donec elit justo,
                        blandit in massa eu, vehicula interdum ligula. Integer facilisis tellus
                        sed auctor ultrices. Morbi sit amet rhoncus ante. Mauris sodales dolor
                        risus. Sed vitae feugiat tellus. Duis sollicitudin nibh consectetur nisl
                        malesuada mollis. Integer quis ornare dui.
                    </p>
                    <p>
                        Sed a eros id odio scelerisque viverra. Fusce sit amet sapien et ante
                        porttitor viverra. Suspendisse sit amet nisl aliquet, malesuada odio
                        nec, molestie nisi.
                    </p>

                    <hr>

<!--                     <div class="carousel-nav">
                        <div class="carousel-prev">
                            <svg class="icon icon-arrow-left">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="./img/sprites.svg#icon-arrow-right"></use>
                            </svg>
                        </div>
                        <div class="carousel-next">
                            <svg class="icon icon-arrow-right">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="./img/sprites.svg#icon-arrow-right"></use>
                            </svg>
                        </div>
                    </div> -->
                    <h2>Events</h2>

                    <div class="campaign-events ">
                        <div class="owl-carousel">
            <!--             <div class="item"> -->
                            <div class="event">
                                <div class="event-time">
                                    <strong>Sat, August 26, 2017</strong>
                                    5:00pm
                                </div>
                                <h2>Gift Card Fundraiser</h2>
                                <div class="event-description">
                                    Amus maximus, eros congue rhoncus tincidunt, felis tortor tempus est, quis consectetur urna leo nec ligula. Donec elit justo, blandit in massa eu, vehicula interdum ligula. Integer facilisis tellus sed auctor ultrices. Morbi sit amet rhoncus ante. Mauris sodales dolor risus. Sed vitae feugiat tellus. Duis sollicitudin nibh consectet
                                </div>
                            </div>
                 <!--        </div>
                        <div class="item"> -->
                            <div class="event">
                                <div class="event-time">
                                    <strong>Sun, August 27, 2017</strong>
                                    7:00pm
                                </div>
                                <h2>Some other Fundraiser</h2>
                                <div class="event-description">
                                    Amus maximus, eros congue rhoncus tincidunt, felis tortor tempus est, quis consectetur urna leo nec ligula. Donec elit justo, blandit in massa eu, vehicula interdum ligula.
                                </div>
                            </div>
               <!--          </div>
                        <div class="item"> -->
                            <div class="event">
                                <div class="event-time">
                                    <strong>Sat, August 26, 2017</strong>
                                    5:00pm
                                </div>
                                <h2>Gift Card Fundraiser</h2>
                                <div class="event-description">
                                    Amus maximus, eros congue rhoncus tincidunt, felis tortor tempus est, quis consectetur urna leo nec ligula. Donec elit justo, blandit in massa eu, vehicula interdum ligula. Integer facilisis tellus sed auctor ultrices. Morbi sit amet rhoncus ante. Mauris sodales dolor risus. Sed vitae feugiat tellus. Duis sollicitudin nibh consectet
                                </div>
                            </div>
                        <!-- </div> -->
                        </div>
                    </div>

                    <h2>Campaign Activity</h2>

                    <div class="activity-block">
                        <div class="activity-icon donation">
                            <svg class="icon">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="./img/sprites.svg#icon-gift">
                                </use>
                            </svg>
                        </div>
                        <div class="activity-text">
                            <strong>Gary Soto</strong> donated $50
                        </div>
                    </div>

                    <div class="activity-block">
                        <div class="activity-icon in-honor">
                            <svg class="icon">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="./img/sprites.svg#icon-heart">
                                </use>
                            </svg>
                        </div>
                        <div class="activity-text">
                            <strong>Gary Soto</strong> donated $50
                            <span>In honor of Kathy Milton</span>
                        </div>
                    </div>

                    <div class="activity-block">
                        <div class="activity-icon created">
                            <svg class="icon">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="./img/sprites.svg#icon-new-campaign">
                                </use>
                            </svg>
                        </div>
                        <div class="activity-text">
                            <strong>Gary Soto</strong> created a <a href="#">campaign</a>
                        </div>
                    </div>
                </div><!-- .campaign-text -->
            </div><!-- .campaign-left -->

            <aside class="campaign-learn-more">
                <div class="aside aside-mission">
                    <div class="img">
                        <a href="#" class="aside-play-button">
                            <svg class="icon icon-play">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="../img/sprites.svg#icon-play3"></use>
                            </svg>
                        </a>
                    </div>
                    <h3>Learn about Side-Out's Mission</h3>
                    <p>
                        In volleyball, “side-out” means regaining control of the
                        ball. Similarly, The Side-Out Foundation helps people with
                        breast cancer regain control of their lives.
                    </p>
                    <a class="click" data-toggle="modal" data-target="#video"></a>
                </div>
                <div class="aside aside-trial">
                    <div class="img">
                        <a href="#" class="aside-play-button">
                            <svg class="icon icon-play">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="../img/sprites.svg#icon-play3"></use>
                            </svg>
                        </a>
                    </div>
                    <h3>Learn about our clinical trial</h3>
                    <p>
                        The Side-Out Foundation is sponsoring a first of its kind
                        clinical trial to examine the effects of individualized
                        treatment on patients with metastatic breast cancer.
                    </p>
                    <a class="click" data-toggle="modal" data-target="#research"></a>
                </div>
            </aside>
        </div>
    </div>
</section>
<div class="mobile-follow">
    <a href="" data-toggle="modal" class="btn" data-target="#donate">Donate</a>
    <a href="sign-in-campaign.php" class="btn btn-blue-inverse d-none d-lg-inline-block">Fundraise for this Campaign</a>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" crossorigin="anonymous"></script>

<script type="text/javascript">
    var progress = document.getElementById("progress-bar");

    setTimeout(
        function(){
            progress.style.width = "58%";
        }
    ,500);

    var $cta = $('.mobile-follow');
    var $top = $('.campaign-text');

    $top.waypoint(function(direction) {
        if (direction === 'down') {
            $cta.addClass('fixed')
            $('.header').addClass('fixed-header');
        } else if (direction == 'up') {
            $cta.removeClass('fixed')
            $('.header').removeClass('fixed-header');
        }
        }, {
        offset: '50%'
    });


    $(window).scroll(function() {
        if ($(window).scrollTop() >= 800) {
            $cta.addClass('slide-down');
        }
        else {
            $cta.removeClass('slide-down');
        }
    });

    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
</script>
<?php include( './inc/modal.php'); ?>
<?php include( './inc/footer.php'); ?>
