<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GFF_Starter
 */

?>
<?php echo get_template_part('inc/header', 'scripts'); ?>
<a href="tel:915-229-8974" class="phone-icon visible-xs"><span>CALL NOW</span></a>
<div id="page" class="site">

    <a class="skip-link screen-reader-text hide"
        href="#content"><?php esc_html_e( 'Skip to content', 'gff-starter' ); ?></a>
    <div id="top-bar">
        <div class="container">
            <div class="col-xs-12">
                <?php
			  if(!is_page('incio')){
           echo'<h2><span>CALL NOW</span> to get your <span>CASH OFFER</span>! <a href="tel:915-229-8974">915-229-8974</a></h2>';
			  }
			  else echo'<h2><span>¡LLAMA AHORA</span> para obtener tu  <span>OFERTA EN EFECTIVO!</span>! <a href="tel:915-229-8974">915-229-8974</a></h2>'; 
			 ?>
            </div>
        </div>
    </div>
    <?php if(!is_front_page()) : ?>
    <!-- HEADER -->
    <div id="top" <?php if(!is_front_page()){ echo 'style="margin-bottom:0;background:#000;"';} ?>>
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
    <?php endif; ?>





    <div id="content" class="site-content">