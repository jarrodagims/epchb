<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package GFF_Starter
 */

get_header(); ?>

	<div id="primary" class="content-area container blog-box">
		<main id="main" class="site-main" role="main">
		<h1>Our Blog</h1>
		<!-- START OF THE FLEX CONTAINER, THE UNORDERED LIST -->
<ul class="grid-wrap">

	<!-- WP LOOP STARTS HERE -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<!-- LIST ITEM FOR EACH POST -->
		<li class="grid-item">

			<!-- FEATURED IMAGE FOR THE POST -->
			
				<?php if ( has_post_thumbnail() ) : ?>
                        		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full' ); ?></a>
				<?php endif; ?>

			<!-- POST TITLE -->
			<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

			<!-- POST METADATA -->
			<p class="author-text">Posted on <?php echo the_time('F jS, Y');?><br> by <?php the_author_posts_link(); ?> </p>            
			<!-- POST EXCERPT -->
			<?php the_excerpt(); ?>
			
			<span><a href="<?php the_permalink(); ?>">Read More</a></span>

			<?php endwhile; ?>
			<?php endif; ?>

		<!-- END OF THE LIST ITEM -->
		</li>

	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>></div>

<!-- END OF THE FLEX CONTAINER -->      
</ul>
			
			<div class="navigation"><p><?php posts_nav_link('&#8734;','&laquo;&laquo; Go Forward 
In Time','Go Back in Time &raquo;&raquo;'); ?></p></div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
