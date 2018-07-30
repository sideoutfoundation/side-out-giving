<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <!--  Essential META Tags -->
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="./img/facebook-1200x630.png">
    <meta property="og:url" content="">

    <!--  Non-Essential, But Recommended -->
    <meta property="og:site_name" content="">

    <link rel="shortcut icon" href="./img/favicon.ico">
    <link rel="apple-touch-icon" href="./img/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" type="image/png" href="./img/favicon-32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="./img/favicon-16.png" sizes="16x16">

<link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">

    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>






    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="./css/styles.css">

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'XXXXXXXXXXX', 'auto');
        ga('send', 'pageview');
    </script>

    <!-- <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });
    </script> -->

</head>
<body>
    <?php
        // Menu for HTML prototypes.
        include( './inc/pages-menu.php');
    ?>
    <div id="top"></div>
    <header class="header">
        <div class="container">


            <div class="row">
                <div class="brand">
                    <img class="logo" src="../img/logo.svg" alt="Side-Out Foundation">
                </div>

                <div class="search">
                    <form id="demo-2">
                        <input type="search" id="search-input" placeholder="Search for a supporting campaign"><img src="../img/search.svg" width="24" height="24"/>
                    </form>

                </div>



                <div class="login-menu personal" >
                    <a data-toggle="modal" href="#modal-notifications" class="app-notifications-icon">
                        <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M912 1696q0-16-16-16-59 0-101.5-42.5t-42.5-101.5q0-16-16-16t-16 16q0 73 51.5 124.5t124.5 51.5q16 0 16-16zm816-288q0 52-38 90t-90 38h-448q0 106-75 181t-181 75-181-75-75-181h-448q-52 0-90-38t-38-90q50-42 91-88t85-119.5 74.5-158.5 50-206 19.5-260q0-152 117-282.5t307-158.5q-8-19-8-39 0-40 28-68t68-28 68 28 28 68q0 20-8 39 190 28 307 158.5t117 282.5q0 139 19.5 260t50 206 74.5 158.5 85 119.5 91 88z"/></svg>
                    </a>
                    <div class="dropdown open">
                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="true" class="dropdown-toggle">
                            <img src="https://www.gravatar.com/avatar/f900ce725ee19829cd21cdbebbe11cd8.jpg?s=200&amp;d=mm" >
                        </a>
                        <ul role="menu" class="dropdown-menu">
                                                        <li class="sublink">
                                <svg viewBox="0 0 2304 1792" xmlns="http://www.w3.org/2000/svg"><path d="M192 1152q40 0 56-32t0-64-56-32-56 32 0 64 56 32zm1473-58q-10-13-38.5-50t-41.5-54-38-49-42.5-53-40.5-47-45-49l-125 140q-83 94-208.5 92t-205.5-98q-57-69-56.5-158t58.5-157l177-206q-22-11-51-16.5t-47.5-6-56.5.5-49 1q-92 0-158 66l-158 158h-155v544q5 0 21-.5t22 0 19.5 2 20.5 4.5 17.5 8.5 18.5 13.5l297 292q115 111 227 111 78 0 125-47 57 20 112.5-8t72.5-85q74 6 127-44 20-18 36-45.5t14-50.5q10 10 43 10 43 0 77-21t49.5-53 12-71.5-30.5-73.5zm159 58h96v-512h-93l-157-180q-66-76-169-76h-167q-89 0-146 67l-209 243q-28 33-28 75t27 75q43 51 110 52t111-49l193-218q25-23 53.5-21.5t47 27 8.5 56.5q16 19 56 63t60 68q29 36 82.5 105.5t64.5 84.5q52 66 60 140zm288 0q40 0 56-32t0-64-56-32-56 32 0 64 56 32zm192-576v640q0 26-19 45t-45 19h-434q-27 65-82 106.5t-125 51.5q-33 48-80.5 81.5t-102.5 45.5q-42 53-104.5 81.5t-128.5 24.5q-60 34-126 39.5t-127.5-14-117-53.5-103.5-81l-287-282h-358q-26 0-45-19t-19-45v-672q0-26 19-45t45-19h421q14-14 47-48t47.5-48 44-40 50.5-37.5 51-25.5 62-19.5 68-5.5h117q99 0 181 56 82-56 181-56h167q35 0 67 6t56.5 14.5 51.5 26.5 44.5 31 43 39.5 39 42 41 48 41.5 48.5h355q26 0 45 19t19 45z"/></svg></svg><a href="#" style="cursor: pointer;">Dashboard</a>
                            </li>
                            <li class="sublink">
                                <svg viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg"><path d="M657 896q-162 5-265 128h-134q-82 0-138-40.5t-56-118.5q0-353 124-353 6 0 43.5 21t97.5 42.5 119 21.5q67 0 133-23-5 37-5 66 0 139 81 256zm1071 637q0 120-73 189.5t-194 69.5h-874q-121 0-194-69.5t-73-189.5q0-53 3.5-103.5t14-109 26.5-108.5 43-97.5 62-81 85.5-53.5 111.5-20q10 0 43 21.5t73 48 107 48 135 21.5 135-21.5 107-48 73-48 43-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-1024-1277q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm704 384q0 159-112.5 271.5t-271.5 112.5-271.5-112.5-112.5-271.5 112.5-271.5 271.5-112.5 271.5 112.5 112.5 271.5zm576 225q0 78-56 118.5t-138 40.5h-134q-103-123-265-128 81-117 81-256 0-29-5-66 66 23 133 23 59 0 119-21.5t97.5-42.5 43.5-21q124 0 124 353zm-128-609q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181z"/></svg><a href="#" style="cursor: pointer;">Campaigns</a>
                            </li>
                            <li class="dropdown-header">Financial</li>
                            <li class="sublink">
                                <svg viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg"><path d="M832 1152h384v-96h-128v-448h-114l-148 137 77 80q42-37 55-57h2v288h-128v96zm512-256q0 70-21 142t-59.5 134-101.5 101-138 39-138-39-101.5-101-59.5-134-21-142 21-142 59.5-134 101.5-101 138-39 138 39 101.5 101 59.5 134 21 142zm512 256v-512q-106 0-181-75t-75-181h-1152q0 106-75 181t-181 75v512q106 0 181 75t75 181h1152q0-106 75-181t181-75zm128-832v1152q0 26-19 45t-45 19h-1792q-26 0-45-19t-19-45v-1152q0-26 19-45t45-19h1792q26 0 45 19t19 45z"/></svg><a href="#" style="cursor: pointer;">Donations</a>
                            </li>
                                                      <li class="sublink">
                                <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M640 256h512v-128h-512v128zm1152 640v480q0 66-47 113t-113 47h-1472q-66 0-113-47t-47-113v-480h672v160q0 26 19 45t45 19h320q26 0 45-19t19-45v-160h672zm-768 0v128h-256v-128h256zm768-480v384h-1792v-384q0-66 47-113t113-47h352v-160q0-40 28-68t68-28h576q40 0 68 28t28 68v160h352q66 0 113 47t47 113z"/></svg><a href="#" style="cursor: pointer;">Deposits</a>
                            </li>
                                                      <li class="sublink">
                                <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1596 380q28 28 48 76t20 88v1152q0 40-28 68t-68 28h-1344q-40 0-68-28t-28-68v-1600q0-40 28-68t68-28h896q40 0 88 20t76 48zm-444-244v376h376q-10-29-22-41l-313-313q-12-12-41-22zm384 1528v-1024h-416q-40 0-68-28t-28-68v-416h-768v1536h1280zm-1024-864q0-14 9-23t23-9h704q14 0 23 9t9 23v64q0 14-9 23t-23 9h-704q-14 0-23-9t-9-23v-64zm736 224q14 0 23 9t9 23v64q0 14-9 23t-23 9h-704q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h704zm0 256q14 0 23 9t9 23v64q0 14-9 23t-23 9h-704q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h704z"/></svg><a href="#" style="cursor: pointer;">Reports</a>
                            </li>
                            <li class="dropdown-header">Settings</li>
                            <li class="sublink">
                                <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1152 896q0-106-75-181t-181-75-181 75-75 181 75 181 181 75 181-75 75-181zm512-109v222q0 12-8 23t-20 13l-185 28q-19 54-39 91 35 50 107 138 10 12 10 25t-9 23q-27 37-99 108t-94 71q-12 0-26-9l-138-108q-44 23-91 38-16 136-29 186-7 28-36 28h-222q-14 0-24.5-8.5t-11.5-21.5l-28-184q-49-16-90-37l-141 107q-10 9-25 9-14 0-25-11-126-114-165-168-7-10-7-23 0-12 8-23 15-21 51-66.5t54-70.5q-27-50-41-99l-183-27q-13-2-21-12.5t-8-23.5v-222q0-12 8-23t19-13l186-28q14-46 39-92-40-57-107-138-10-12-10-24 0-10 9-23 26-36 98.5-107.5t94.5-71.5q13 0 26 10l138 107q44-23 91-38 16-136 29-186 7-28 36-28h222q14 0 24.5 8.5t11.5 21.5l28 184q49 16 90 37l142-107q9-9 24-9 13 0 25 10 129 119 165 170 7 8 7 22 0 12-8 23-15 21-51 66.5t-54 70.5q26 50 41 98l183 28q13 2 21 12.5t8 23.5z"/></svg><a href="#" style="cursor: pointer;">Settings</a>
                            </li>

                            <li class="dropdown-header">Support</li>
                            <li class="sublink">
                                <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M640 896q0-53-37.5-90.5t-90.5-37.5-90.5 37.5-37.5 90.5 37.5 90.5 90.5 37.5 90.5-37.5 37.5-90.5zm384 0q0-53-37.5-90.5t-90.5-37.5-90.5 37.5-37.5 90.5 37.5 90.5 90.5 37.5 90.5-37.5 37.5-90.5zm384 0q0-53-37.5-90.5t-90.5-37.5-90.5 37.5-37.5 90.5 37.5 90.5 90.5 37.5 90.5-37.5 37.5-90.5zm384 0q0 174-120 321.5t-326 233-450 85.5q-110 0-211-18-173 173-435 229-52 10-86 13-12 1-22-6t-13-18q-4-15 20-37 5-5 23.5-21.5t25.5-23.5 23.5-25.5 24-31.5 20.5-37 20-48 14.5-57.5 12.5-72.5q-146-90-229.5-216.5t-83.5-269.5q0-174 120-321.5t326-233 450-85.5 450 85.5 326 233 120 321.5z"/></svg><a href="#" style="cursor: pointer;">Support Center</a>
                            </li>
                            <li class="sublink">
                                <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1764 11q33 24 27 64l-256 1536q-5 29-32 45-14 8-31 8-11 0-24-5l-453-185-242 295q-18 23-49 23-13 0-22-4-19-7-30.5-23.5t-11.5-36.5v-349l864-1059-1069 925-395-162q-37-14-40-55-2-40 32-59l1664-960q15-9 32-9 20 0 36 11z"/></svg><a href="#" style="cursor: pointer;">Contact Us</a>
                            </li>

                            <li class="divider"></li>
                            <li class="sublink">
                                <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M704 1440q0 4 1 20t.5 26.5-3 23.5-10 19.5-20.5 6.5h-320q-119 0-203.5-84.5t-84.5-203.5v-704q0-119 84.5-203.5t203.5-84.5h320q13 0 22.5 9.5t9.5 22.5q0 4 1 20t.5 26.5-3 23.5-10 19.5-20.5 6.5h-320q-66 0-113 47t-47 113v704q0 66 47 113t113 47h312l11.5 1 11.5 3 8 5.5 7 9 2 13.5zm928-544q0 26-19 45l-544 544q-19 19-45 19t-45-19-19-45v-288h-448q-26 0-45-19t-19-45v-384q0-26 19-45t45-19h448v-288q0-26 19-45t45-19 45 19l544 544q19 19 19 45z"/></svg><a href="#" style="cursor: pointer;">Logout</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="search-results logged" id="search-results">
                    <span class="caret"></span>
                    <div class="results"><img src="../img/search-white.svg" width="22" height="22"/>Results for <span>"bow"</span></div>
                    <div class="result-options">
                        <div class="result-option">
                            <a class="campaign-link" href= "/campaign.php">
                                <div class="image"><img src="./img/side-out-iconcircle.png" alt=""></div>
                                <div class="content">
                                    <h3>Bowdoin College Voleyball Dig Pink</h3>
                                    <div class="details">Megan M. / Supporting 2018 Dig Pink Schools</div>
                                    <div class="pills bs-component">
                                        <div>
                                            <b>Raised</b><span class="badge badge-pill badge-success">$10</span>
                                        </div>
                                        <div>
                                            <b>Goal</b><span class="badge badge-pill badge-secondary">$1200</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="button-area">
                            <a href= "/campaign.php#donate">
                                    <button type="button" class="btn btn-primary">Donate</button>
                                </a>
                            </div>
                        </div>
                        <div class="result-option">
                            <a class="campaign-link" href= "/campaign.php">
                                <div class="image"><img src="./img/side-out-iconcircle.png" alt=""></div>
                                <div class="content">
                                    <h3>Bowdoin College Voleyball Dig Pink</h3>
                                    <div class="details">Megan M. / Supporting 2018 Dig Pink Schools</div>
                                    <div class="pills bs-component">
                                        <div>
                                            <b>Raised</b><span class="badge badge-pill badge-success">$10</span>
                                        </div>
                                        <div>
                                            <b>Goal</b><span class="badge badge-pill badge-secondary">$1200</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="button-area">
                            <a href= "/campaign.php#donate">
                                    <button type="button" class="btn btn-primary">Donate</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- container -->
    </header><!-- header -->

    <main class="main" id="main">
        <div class="container">


