<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GIP</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"
        type="text/css" media="screen" /> -->
    <link rel="stylesheet" href="https://unpkg.com/@sjmc11/tourguidejs/dist/css/tour.min.css">
    <link rel="stylesheet" href="assets/scss/main-style.min.css?v=1.2">
    <?php
        $url = 'https://www.netnivaran.net/development/GIP/'; 
        // $url = parse_url($url, PHP_URL_SCHEME).'://'.parse_url($url, PHP_URL_HOST); 
        $base_url = trim($url, '/');
    ?>
</head>

<body>
    <div class="dashboard_walkthrough">
        <!--Inner Banner Start-->
        <Section class="inner_banner">
            <div class="container_fluid">
                <div class="flex_row">
                    <div class="col_6"
                        data-tour="step: 1; title: Dashboard ; content: Gandhinagar Information Platform (GIP) - Dashboard">
                        <h4>Gandhinagar Information Platform (GIP) - Dashboard</h4>
                    </div>

                    <div class="col_6">
                        <div class="dashboard_user_actions">
                            <img src="<?php echo $base_url; ?>/assets/images/dashboard/top-actions.png"
                                data-tour="step: 2; title: Dashboard User Actions; content: 1). Manage the credentials of the country administrator. <br> 2). View the latest notifications and updates. <br>3). Login or log off from the dashboard.">
                        </div>
                    </div>
                </div>
            </div>
        </Section>
        <!--Inner Banner End-->


        <section class="common_spacing">
            <div class="container_fluid">
                <div class="flex_row">
                    <div class="col_12">
                        <button class="btn btn-success btn-lg btn-block" id="tourbutton">

                        </button>
                    </div>
                </div>
                <div class="flex_row">
                    <div class="col_12">
                        <div class="dashboard_country_flag">
                            <img src="<?php echo $base_url; ?>/assets/images/dashboard/country-flag.jpg"
                                data-tour="step: 3; title: Country; content: Flag Representing the user country. ">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="">
            <div class="container_fluid">
                <div class="flex_row">
                    <div class="col_12">
                        <div class="dashboard_login_screen">
                            <img src="<?php echo $base_url; ?>/assets/images/dashboard/dashboard-login.jpg"
                                data-tour="step: 4; title: Country Administrator Login; content: 1). Login credentials along with login link will be sent to country representative to login into GIP platform.<br> 2). Country administrator can further invite & manage country nodal agencies.<br> 3). Login Panel can be accessed by the country administrator and national nodal agency. 4). you can access the GIP dashboard after logging in.">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb_60">
            <div class="container_fluid">
                <div class="flex_row">
                    <div class="col_4">
                        <div class="dashboard_registration">
                            <img src="<?php echo $base_url; ?>/assets/images/dashboard/dashboard-registration.jpg"
                                data-tour="step: 5; title: Registration; content: 1.Country administrator can send invite to nodal agencies to join the GIP platform.<br> 2.Country administrator can manage and update the login credentials of nodal agencies.<br> 2.Nodal agencies can login GIP platform.">
                        </div>
                    </div>
                    <div class="col_4">
                        <div class="dashboard_country_statistics">
                            <img src="<?php echo $base_url; ?>/assets/images/dashboard/country-statistics.jpg"
                                data-tour="step: 6; title: Country Statistics (Mining & Forest Fire); content: 1). Nodal Agencies can add / update the multiple data field..<br> 2). Country administrator can approve / edit / delete the data.">
                        </div>
                    </div>
                    <div class="col_4">
                        <div class="dashboard_country_initiative">
                            <img src="<?php echo $base_url; ?>/assets/images/dashboard/country-initiative.jpg"
                                data-tour="step: 7; title: Country Initiative (Mining / Forest Fire / Financial Options); content: 1). Nodal Agencies can add / update the multiple data field. <br> 2). Country administrator can approve / edit / delete the data.<br> 3). Program & Policies / Knowledge Resources / Design Frameworks / Technology & Tools / Others.">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer starts here -->
        <hr class="footer_top">
        <div class="bottom_footer">
            <div class="flex_row">
                <div class="col_9">
                    <p><a href="#">Website Policy</a> | <a href="#"> Disclaimer</a> | <a href="">Terms and
                            Conditions</a> | <a href="">Notifications</a> | <a href="">Filtration </a> | <a
                            href="">Hyperlinking Policy</a> | <a href="">Accessibility Statement</a></p>
                </div>
                <div class="col_3 text_right">
                    <p>©2023 . All Rights Reserved.</p>
                </div>
            </div>
        </div>


        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <script src="assets/js/jquery.min.js"></script>
        <!-- <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script> -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/custom.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/tourguidejs@1.0.1/tourguide.min.js"></script>

        <script>
        var tourguide = new Tourguide();

        window.onload = function startTour() {
            tourguide.start();
        }
        // Attach the touruide start evene to the button press
        var tourbutton = document.getElementById("tourbutton");
        tourbutton.addEventListener("onload", startTour);
        </script>
</body>

</html>