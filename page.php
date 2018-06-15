<?php
/**
 * The template for displaying all pages
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

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="container" style="padding:50px 0px;">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <?php
                    while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content', 'home' );
                    endwhile;
                ?>
            </div>
             <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 home-widgets">
                <div class="full-width bg-gray padding20 contant-right">
                    <?php dynamic_sidebar("right-widget-1"); ?>
                </div>
				 <?php if (is_page('5')) {?><div class="full-width bg-gray padding20 contant-right"><h3>Other Areas We Serve</h3><iframe src="https://www.google.com/maps/d/embed?mid=1se79yYh_sa3ajMQEbyQ9HIJtl-0" width="100%" height="480"></iframe> </div><?php } else { ?> <div class="full-width bg-gray padding20 contant-right"><?php dynamic_sidebar("right-widget-2"); ?></div><?php };?>
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