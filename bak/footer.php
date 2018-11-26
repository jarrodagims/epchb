<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GFF_Starter
 */

?>

	</div>
	
	<div id="footer-cta">
    <div class="overlay"></div>
<div class="container">
        <?php
			if(!is_page('incio')){
           		echo '<h3>Call us today and find out why El Paso Cash Home Buyers is the most trusted home cash buyer to do business with.</h3>';
			    }
			else{
				echo'<h3>Llámenos hoy y descubra por qué El Paso Cash Home Buyers es el comprador de efectivo doméstico más confiable para hacer negocios.</h3>';
			}
		?>
<a href="tel:9152298974">(915) 229-8974</a>
<p>We are open 24/7</p>

    </div>
</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13568.39020136501!2d-106.2626129!3d31.7678252!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1fedacac5d172437!2sEl+Paso+Cash+Home+Buyers+-+Zaragoza!5e0!3m2!1sen!2sus!4v1526490788231" width="100%" height="300" frameborder="0" style="border:0; margin-bottom: -10px !important;" allowfullscreen></iframe>

	
    <div class="full-width bg-blue"><div class="container">
		
		<div class="full-width footer-nav text-center ">
			
			<?php
			if(!is_page('incio')){
           		echo '
			<ul id="menu-footer-menu" class="menu"><li id="menu-item-346" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-6 current_page_item menu-item-346"><a href="http://www.elpasocashhomebuyers.com/">Home</a></li><li id="menu-item-345" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-345"><a href="http://www.elpasocashhomebuyers.com/get-a-cash-offer/">Get a Cash Offer Today</a></li><li id="menu-item-349" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-349"><a href="http://www.elpasocashhomebuyers.com/faq/">FAQ’s</a></li><li id="menu-item-348" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-348"><a href="http://www.elpasocashhomebuyers.com/how-it-works/">How it Works</a></li><li id="menu-item-343" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-343"><a href="http://www.elpasocashhomebuyers.com/testimonials/">Testimonials</a></li><li id="menu-item-347" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-347"><a href="http://www.elpasocashhomebuyers.com/contact-us/">Contact Us</a></li><li id="menu-item-342" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-342"><a href="http://www.elpasocashhomebuyers.com/privacy-policy/">Privacy Policy</a></li><li id="menu-item-344" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-344"><a href="http://www.elpasocashhomebuyers.com/sitemap/">Sitemap</a></li></ul>';
	}
	?>
		
		
	<section id="custom_html-6" class="widget_text widget global-section4-widget row widget_custom_html"><div class="textwidget custom-html-widget">
		
			<?php 
				if(!is_page('incio')){
					
           			echo '<p>We are a real estate solutions and investment firm that specializes in helping homeowners get rid of burdensome houses fast. We are investors and problem solvers who can buy your house fast with a fair all cash offer.<br><br> © 2017 El Paso Cash Homebuyer</p>';
					}
		
				else{
					
					echo'<p>Somos una firma de inversión y soluciones inmobiliarias que se especializa en ayudar a los propietarios a deshacerse rápidamente de las casas agobiantes. Somos inversores y solucionadores de problemas que pueden comprar su casa rápidamente con una oferta justa en efectivo</p><br><br> © 2017 El Paso Cash Homebuyer</p>';}
		
			?>
	<div class="footer-social-icon"> <a href="https://www.facebook.com/elpasocashhomebuyers" target="_blank"></a> <a href="https://twitter.com/ElPasoHomeBuyer" class="twitter" target="_blank"></a></div></div></section></div></div></div>
	
	
</div>


<script>
	jQuery(function(){
		jQuery('#menu').slicknav();
	});
	
</script>




<?php wp_footer(); ?>
<?php the_field('google_code', 'option');?>
</body>
</html>
