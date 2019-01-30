<?php
/**
 * Template Name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package GFF_Starter
 */

get_header(); ?>

<div id="home-banner">
    <div id="top" class="visible-xs visible-sm">
        <div class="container">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <div class="logo">
                    <a href="/">
                        <picture>
                            <source srcset="<?php bloginfo("template_directory"); ?>/images/logo.png"
                                media="(min-width: 992px)" height="150" width="150">
                            <img class="img-responsive elp-logo"
                                src="<?php bloginfo("template_directory"); ?>/images/logo-mobile.png"
                                alt="el paso house for cash logo" />
                        </picture>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
    <div class="full-width" style="position:relative;">

        <div class="banner-contant">
            <div class="container">
                <div class="full-width">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="banner-left">
                                <h2>SELL YOUR HOUSE AS IS FOR CASH FAST EL PASO, TEXAS</h2>
                                <section id="custom_html-4"
                                    class="widget_text widget global-section2-widget widget_custom_html">
                                    <div class="textwidget custom-html-widget">
                                        <p class="home-guarantee">We will BEAT any legitimate competitor offer or PAY
                                            YOU $500 IN CASH. GUARANTEED. </p>
                                        <h3>No Fees, No Commissions, No Closing Cost.</h3>
                                        <p>Get the Best Cash Offer - We Can Close in 7 Days!</p>
                                        <p>If you give us a referral for someone who needs to sell their home, and we
                                            buy it, we will give you $500!</p>
                                        <h5>Get Started Now</h5>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xs-12 center-block">
                            <div class="form">
                                <?php echo do_shortcode('[contact-form-7 id="407" title="Contact Form"]') ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- HEADER -->
        <div id="top" class="hidden-xs hidden-sm">
            <div class="container">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                    <div class="logo">
                        <a href="/">
                            <picture>
                                <source srcset="<?php bloginfo("template_directory"); ?>/images/logo.png"
                                    media="(min-width: 992px)" height="150" width="150">
                                <img class="img-responsive elp-logo"
                                    src="<?php bloginfo("template_directory"); ?>/images/logo-mobile.png"
                                    alt="el paso house for cash logo" />
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 text-right">
                    <section id="nav_menu-2" class="widget header-social-widget row widget_nav_menu">
                        <div class="menu-top-header-container">
                            <?php wp_nav_menu( array(
							'menu'              => 'Main Menu',
							'menu_id' 			=> 'menu',
							'theme_location'    => 'menu-1',
							'depth'             => 3,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'bs-example-navbar-collapse-1',
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker())
						 ); ?>
                            <div class="social-icon" style="color: #FD8B3E"> <a
                                    href="https://www.facebook.com/elpasocashhomebuyers" target="_blank"><i
                                        class="fa fa-2x fa-facebook-official" aria-hidden="true"></i></a> <a
                                    href="https://twitter.com/ElPasoHomeBuyer" target="_blank"><i
                                        class="fa fa-2x fa-twitter-square" aria-hidden="true"></i></a></div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
        <!-- /HEADER -->
    </div>

    <div class="clearfix"></div>
</div>


<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <div class="home-steps-section">
            <div class="container">
                <section id="text-7" class="widget home-steps-widget widget_text">
                    <div class="textwidget">
                        <h3>Benefits:</h3>
                        <div class="row steps_benefits">
                            <div class="col-lg-6 col-md-6 col-sm-12 ">
                                <p><i class="fa fa-1x fa-check-circle-o"></i>You
                                    Pay Zero Closing Costs – Take the Entire Offer</p>
                                <p><i class="fa fa-1x fa-check-circle-o"></i>No Listing, No Realtors, No Hassle</p>
                                <p><i class="fa fa-1x fa-check-circle-o"></i>Need To Move Quickly? CASH Out in as
                                    Little as 7 Days.</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 ">
                                <p><i class="fa fa-1x fa-check-circle-o"></i>No
                                    Need to Make Repairs. We Buy Homes “as is” Condition!</p>
                                <p><i class="fa fa-1x fa-check-circle-o"></i>Cash offers in as little as 7 days. Must
                                    Have Equity!</p>
                            </div>
                        </div>
                </section>
            </div>
        </div>
        <div class="container-fluid home-steps-section">
            <div class="container">
                <section id="text-6" class="widget home-steps-widget widget_text">
                    <div class="textwidget">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                <p>&nbsp;</p>
                                <h3>Step 1:</h3>
                                <p><span class="step-content">Call us at <a href="tel: 915-229-8974">915-229-8974</a> or
                                        fill out the form on this website and we will get you the best cash offer
                                        possible.<br> </span>
                                </p>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                <p>&nbsp;</p>
                                <h3>Step 2:</h3>
                                <p><span class="step-content"><strong>Make You a CASH Offer.</strong> El Paso Cash Home
                                        Buyers will present you a fair, no-obligation offer for your home in cash.<br>
                                    </span>
                                </p>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                <p>&nbsp;</p>
                                <h3>Step 3:</h3>
                                <p><span class="step-content">You pick the date you want to close on. Whatever you
                                        choose we’re there to accommodate you.<br> </span>
                                </p>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                <p>&nbsp;</p>
                                <h3>Step 4:</h3>
                                <p><span class="step-content">Once everything is finalized, we will fulfill your offer
                                        and get you the cash you need!<br> </span>
                                </p>
                            </div>
                        </div>
                        <hr class="style13">


                        <div class="textwidget">
                            <p>For over 10 years El Paso Cash Home Buyers has been buying homes
                                El
                                Paso County and beyond getting homeowners just like you a cash offer in under 24
                                hours!</p>
                        </div>

                    </div>
            </div>
            </section>
        </div>
</div>
<div class="container benefits-section" style="padding:50px 0px;">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="home">
        <?php
            while (have_posts()) : the_post();
                get_template_part('template-parts/content', 'home');
            endwhile;
            ?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 home-widgets">
        <div class="full-width bg-gray padding20 contant-right">
            <?php dynamic_sidebar("right-widget-1"); ?>
        </div>
        <div class="video-responsive">
            <iframe width="370" height="208" src="https://www.youtube.com/embed/AX9p9JwBJEw" frameborder="0"
                allow="autoplay; encrypted-media" allowfullscreen="" style="margin-bottom: 18px;">
            </iframe>


        </div>

        <div class="video-responsive">
            <iframe width="370" height="208" src="https://www.youtube.com/embed/W07q3mleAps?rel=0" frameborder="0"
                allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>

        <div class="full-width bg-gray padding20 contant-right">
            <?php dynamic_sidebar("right-widget-2"); ?>
        </div>
        <div class="full-width bg-gray padding20 contant-right">
            <?php dynamic_sidebar("right-widget-3"); ?>
        </div>
        <div class="full-width bg-gray padding20 contant-right">
            <?php dynamic_sidebar("right-widget-4"); ?>
        </div>

    </div>
</div>
</main>
</div>

<?php
get_footer();