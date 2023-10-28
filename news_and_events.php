<?php include('includes/header.php')?>
<div class="inner_page_wrapper">
    <!--Inner Banner Start-->
    <Section class="inner_banner">
        <div class="container_fluid">
            <div class="flex_row">
                <div class="col_8">
                    <h4>Events & News</h4>
                </div>

                <div class="col_4">
                    <ul class="new_breadcrumb">
                        <li><a href="<?php echo $base_url; ?>">Home</a></li>
                        <li>Events & News</li>
                    </ul>
                </div>
            </div>
        </div>
    </Section>
    <!--Inner Banner End-->
    <section class="common_spacing gradient_container">
        <div class="container_fluid">
            <div class="flex_row">
                <div class="col_12">
                    <ul class="tabbs">
                        <li class="active"><a href="#events"> Events</a></li>
                        <li><a href="#news">News</a></li>
                        <li><a href="#training_program">Training Programs</a></li>
                    </ul>
                </div>
            </div>
            <div class="tab-content news_events" id="events">
                <div class="flex_row ">
                    <div class="col_4">
                        <div class="events_card">
                            <div class="events_card_image">
                                <img src="assets/images/events/bharat_mandapam.webp" alt="">
                            </div>
                            <div class="events_card_content">
                                <a href="events_newdelhi.php" class="blk_lnk">
                                    <h5>New Delhi Leaders’ Declaration:(9th September 2023, New Delhi)</h5>
                                    <p>9th September 2023</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col_4">
                        <div class="events_card">
                            <div class="events_card_image">
                                <img src="assets/images/events/ECSWG1.webp" alt="">
                            </div>
                            <div class="events_card_content">
                                <a href="events_bengaluru.php" class="blk_lnk">
                                    <h5>1st ECSWG meet: Bengaluru</h5>
                                    <p>February 9 to 11, 2023</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col_4">
                        <div class="events_card">
                            <div class="events_card_image">
                                <img src="assets/images/events/2nd_ECWSG.webp" alt="">
                            </div>
                            <div class="events_card_content">
                                <a href="events_gandhinagar.php" class="blk_lnk">
                                    <h5>2nd ECSWG meet: Gandhinagar</h5>
                                    <p>March 27 to 29, 2023</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col_4">
                        <div class="events_card">
                            <div class="events_card_image">
                                <img src="assets/images/events/3rd_EWCSG.webp" alt="">
                            </div>
                            <div class="events_card_content">
                                <a href="events_mumbai.php" class="blk_lnk">
                                    <h5>3rd ECSWG meet: Mumbai</h5>
                                    <p>May 21 to 23, 2023</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col_4">
                        <div class="events_card">
                            <div class="events_card_image">
                                <img src="assets/images/events/ECSWG_Chennai.webp" alt="">
                            </div>
                            <div class="events_card_content">
                                <a href="events_chennai.php" class="blk_lnk">
                                    <h5>4th ECSWG meet: Chennai</h5>
                                    <p>July 26 to 28, 2023</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--News Section-->
            <div class="tab-content news_events" id="news">
                <div class="container_fluid gradient_container">
                    <div class="news_container">
                        <h2>Update Coming Soon</h2>
                    </div>
                </div>
            </div>

            <!--Training Program-->
            <div class="tab-content news_events" id="training_program">
                <div class="training_programs_container">
                    <h2>Update Coming Soon</h2>
                </div>
            </div>
        </div>
    </section>
</div>


<?php include('includes/footer.php')?>