<?php
/**
 * Template Name: Landing 2018
 */
?>
<?php echo get_template_part('inc/header', 'scripts'); ?>
<div class="landing">
    <div class="landing-hero">
        <div id="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-flex">
                            <div class="text hidden-xs hidden-sm"><strong>CALL NOW</strong> to get your <strong>CASH
                                    OFFER! <a href="tel:9152298974" class="hidden-xs ">915-229-8974</a></strong></div>
                            <a href="tel:9152298974"><button class="btn btn-primary">Call Us Now</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="full-width" style="position:relative;">
            <div class="banner-contant landing-banner">
                <div class="container">
                    <div class="full-width">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="banner-left">
                                    <div class="extra-padding">
                                        <h1 class="hidden-xs">SELL YOUR HOUSE AS IS FOR CASH <br />FAST EL PASO, TEXAS
                                        </h1>
                                        <section id="custom_html-4"
                                            class="widget_text widget global-section2-widget widget_custom_html">
                                            <div class="textwidget custom-html-widget">
                                                <h2 class="guarantee">Sell Your House Fast in El Paso. We will beat
                                                    any legitimate competitor offer
                                                    <br />or pay you <span class="brand">$500 in cash.</span>
                                                    Guaranteed. </h2>
                                                <h3>No Fees, No Commissions, No Closing Cost. Get the Best Cash Offer -
                                                    We Can Close in 7 Days!</h3>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-xs-12 center-block">
                                <div class="form">
                                    <?php echo do_shortcode('[contact-form-7 id="964" title="Landing Contact Form"]') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="logo" alt="">
            </div>

        </div>
    </div>
</div>
<section class="gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                    <h3><span class="brand">Why Sell?</span> Divorce, Family Death, Foreclosure, Moving,<br /> Inherited
                        Property & Financial Issues.</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="ribbon">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h3>
                    BENEFITS
                </h3>
            </div>
        </div>
    </div>
</div>

<div class="container check-lists">
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <ul class="check-list">
                <li><span>You Pay Zero Closing Costs – Take the Entire Offer</span></li>
                <li><span>No Listing, No Realtors, No Hassle</span></li>
                <li><span>Need To Move Quickly? CASH Out in as Little as 7 Days.</span></li>
            </ul>
        </div>
        <div class="col-md-6 col-xs-12">
            <ul class="check-list">
                <li><span>No Need to Make Repairs. We Buy Homes “as is” Condition!</span></li>
                <li><span>Cash offers in as little as 7 days. Must Have Equity!</span></li>
            </ul>
        </div>
    </div>
</div>

<section class="footer">

</section>

<?php wp_footer(); ?>
<?php the_field('google_code', 'option');?>

</body>

</html>