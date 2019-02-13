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
            <div class="col-xs-12">
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
        <!-- HEADER -->
        <div id="top" class="hidden-xs hidden-sm">
            <div class="container">
                <div class="col-xs-12">
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
                <div class="col-lg-9 hidden-md hidden-lg col-md-9 col-sm-9 col-xs-12 text-right">
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
                                        <p class="home-guarantee">We will BEAT any legitimate competitor offer or
                                            PAY
                                            YOU $500 IN CASH. GUARANTEED. </p>
                                        <h3>No Fees, No Commissions, No Closing Cost.</h3>
                                        <p>Get the Best Cash Offer - We Can Close in 7 Days!</p>
                                        <p>If you give us a referral for someone who needs to sell their home, and
                                            we
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
    </div>
</div>
<div id="top" class="col-xs-12 text-right hidden-xs hidden-md">
    <section id="nav_menu-2" class="widget header-social-widget row widget_nav_menu">
        <div class="menu-top-header-container col">
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
            <div class="social-icon" style="color: #FD8B3E"> <a href="https://www.facebook.com/elpasocashhomebuyers"
                    target="_blank"><i class="fa fa-2x fa-facebook-official" aria-hidden="true"></i></a> <a
                    href="https://twitter.com/ElPasoHomeBuyer" target="_blank"><i class="fa fa-2x fa-twitter-square"
                        aria-hidden="true"></i></a></div>
        </div>
    </section>
</div>
<div class="clearfix"></div>
</div>

<?php
get_footer();