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
    <link rel="stylesheet" href="assets/scss/main-style.min.css?v=1.1">
    <?php
        $url = 'https://www.netnivaran.net/'; 
        $url = parse_url($url, PHP_URL_SCHEME).'://'.parse_url($url, PHP_URL_HOST); 
        $base_url = trim($url, '/');
    ?>
     <?php
// Set the time zone to India Standard Time (IST)
date_default_timezone_set('Asia/Kolkata');

// Get the current date and time
$currentDateTime = date('F j, Y | H:i \h\r\s');

 $currentDateTime;
?>
</head>

<body>
    <div class="overflow_wrapper">
        <!--Header Start Here-->
        <header>
            <div class="header_topbar">
                <div class="header_top_content">
                    <div class="date_time"><span><?php echo $currentDateTime; ?></span> </div>
                    <div class="website_font_size">
                        <span>A <sup>-</sup></span>
                        <span class="font_size_selected">A</span>
                        <span>A <sup>+</sup></span>
                    </div>
                    <!-- <div class="website_language"><img src="assets/images/language/flaglanguageen.png" width="27"
                        height="14px" alt=""> English</div> -->
                    <a href="" class="dashoard_cta">GIP Dashboard</a>
                </div>
            </div>
            <nav class="navbar">
                <a href="javascript: void(0)" class="menu_toggle"><i class="icon-menu"></i></a>
                <div class="navbar_brand navbar_brand_logos_left">
                    <a href="index.php"><img src="<?php echo $base_url; ?>/development/GIP/assets/images/headerlogo/headerfirst.png" class="fst_logo">
                    <img src="assets/images/headerlogo/headersecond.png" class="second_logo"></a>
                </div>
                <ul class="navbar_nav">
                    <li class="nav_item sub_menu"><a href="javascript: void(0)">GIP</a>
                        <ul>
                            <li class="sub_menu"><a href="javascript: void(0)">About GIP</a>
                                <ul>
                                    <li><a href="about.php">History of GIP</a></li>
                                    <li><a href="delhi_declaration.php">Delhi Declaration</a></li>
                                    <li><a href="about_gip_structure.php">Structure</a></li>
                                    <li><a href="alliance.php">Alliance</a></li>
                                </ul>
                            </li>
                            <li><a href="indias_presidency.php">G20 Presidency</a></li>
                            <li><a href="indias_presidency.php">Past Presidencies</a></li>
                            <li><a href="keyhighlights.php">Key Highlights</a></li>
                            <li><a href="thematic_working_group_meetings.php">Themetic Working Group Meetings</a></li>
                        </ul>
                    </li>
                    <li class="nav_item sub_menu"><a href="javascript: void(0)">G20 Country Initiatives</a>
                        <ul>
                            <!--<li><a href="g20_country_initiatives.php">Argentina</a></li>
                            <li><a href="g20_country_initiatives.php">Australia</a></li>
                            <li><a href="g20_country_initiatives.php">Brazil</a></li>
                            <li><a href="g20_country_initiatives.php">Canada</a></li>
                            <li><a href="g20_country_initiatives.php">China</a></li>
                            <li><a href="g20_country_initiatives.php">France</a></li>
                            <li><a href="g20_country_initiatives.php">Germany</a></li>-->
                            <li><a href="g20_country_initiatives.php">India</a></li>
                            <!--<li><a href="g20_country_initiatives.php">Indonesia</a></li>
                            <li><a href="g20_country_initiatives.php">Italy</a></li>
                            <li><a href="g20_country_initiatives.php">Japan</a></li>
                            <li><a href="g20_country_initiatives.php">Mexico</a></li>
                            <li><a href="g20_country_initiatives.php">Korea</a></li>
                            <li><a href="g20_country_initiatives.php">Russia</a></li>
                            <li><a href="g20_country_initiatives.php">Saudi Arabia</a></li>
                            <li><a href="g20_country_initiatives.php">South Africa</a></li>
                            <li><a href="g20_country_initiatives.php">Turkiya</a></li>
                            <li><a href="g20_country_initiatives.php">United Kingdom</a></li>
                            <li><a href="g20_country_initiatives.php">United States</a></li>
                            <li><a href="g20_country_initiatives.php">European Union</a></li>
                            <li><a href="g20_country_initiatives.php">African Union</a></li>-->
                        </ul>
                    </li>
                    <li class="nav_item sub_menu"><a href="javascript: void(0)">Forest Fire Impacted Landscapes</a>
                                <ul>
                                    <li><a href="forest_fires_impacted_landscapes.php#policy_prgrms_section">Policy and Programs</a></li>
                                    <li><a href="forest_fires_impacted_landscapes.php#knowledge_resources">Knowledge Resources</a></li>
                                    <li><a href="forest_fires_impacted_landscapes.php">Design Frameworks</a></li>
                                    <li><a href="forest_fires_impacted_landscapes.php#technology_tools_Section">Technology & Tools</a></li>
                                </ul>
                    </li>
                    <li class="nav_item sub_menu"><a href="javascript: void(0)">Mining Affected Landscapes</a>
                                <ul>
                                    <li><a href="mining_affected_landscapes.php#policy_prgrms_section">Policy and Programs</a></li>
                                    <li><a href="mining_affected_landscapes.php#knowledge_resources">Knowledge Resources</a></li>
                                    <li><a href="mining_affected_landscapes.php#design_framework_Section">Design Frameworks</a></li>
                                    <li><a href="mining_affected_landscapes.php#technology_tools_Section">Technology & Tools</a></li>
                                </ul>
                    </li>
                    <li class="nav_item sub_menu"><a href="javascript: void(0)">Financing Options</a>
                                <ul>
                                    <li><a href="financing_option.php#policy_prgrms_section">Public Programs and Schemes</a></li>
                                    <li><a href="financing_option.php#financial_institutions">Financial Institutions</a></li>
                                    <li><a href="financing_option.php#financial_markets">Financial Markets</a></li>
                                    <li><a href="financing_option.php#probable_international_Section">Probable International Finance Options</a></li>
                                    <li><a href="financing_option.php">Private Sector Funding</a></li>
                                    <li><a href="financing_option.php">Bi/ Multilateral Environmental Agreements</a></li>
                                    <li><a href="financing_option.php">High Impact Proposals</a></li>
                                </ul>
                    </li>
                    <li class="nav_item sub_menu"><a href="javascript: void(0)">Events & News</a>
                                <ul>
                                    <li><a href="">Events</a></li>
                                    <li><a href="">News</a></li>
                                    <li><a href="">Training Programs</a></li>
                                </ul>
                    </li>
                    <!-- <li class="nav_item"><a href="">Contact</a></li> -->
                    <li class="nav_item sub_menu"><a href="javascript: void(0)">Media</a>
                                <ul>
                                    <li><a href="">Press Releases</a></li>
                                    <li><a href="">Media Coverage</a></li>
                                    <li><a href="">Event Reports</a></li>
                                    <li><a href="">Gallery</a></li>
                                </ul>
                
                    </li>
                </ul>
                <div class="navbar_brand navbar_brand_logos_right">
                    <img src="assets/images/headerlogo/g20header.png" class="fst_logo">
                </div>
            </nav>
        </header>
        <!--Header End Here-->
