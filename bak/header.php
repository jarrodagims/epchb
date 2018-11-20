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

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117345659-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117345659-1');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MZMX5LG');</script>
<!-- End Google Tag Manager -->
<meta name="google-site-verification" content="yj98Gy-PkkOf0yI_yBgFNCw5RP4wHOTsqN6DWgXCub0" />
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel=preload rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
<?php the_field('facebook_pixel_code', 'option');?>
<?php the_field('google_webmaster_code', 'option');?>


<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
	
<?php 
	if(is_page('incio')){
		
		echo'<style>
		#top{margin-bottom:-275px!important;background: none!important;}
		.menu-top-header-container{display:none;}
		.col-lg-2.col-md-2.col-sm-2.col-xs-12 img {
			margin: 0 auto;
		}
		.col-lg-2.col-md-2.col-sm-2.col-xs-12 {
			width: 100%;
			float: none;
			text-align: center;
		}
		.slicknav_menu{z-index: 20;position: relative;}
		#page {z-index: 10;position: relative;}
		</style>
		
		
		';
		
	}
?>	

	<!-- Default Statcounter code for EP Cash Home Buyers
http://www.elpasocashhomebuyers.com/ -->
<script type="text/javascript">
var sc_project=11681621; 
var sc_invisible=1; 
var sc_security="617a5fa9"; 
</script>
<script type="text/javascript"
src="https://www.statcounter.com/counter/counter.js"
async></script>
<noscript><div class="statcounter"><a title="Web Analytics
Made Easy - StatCounter" href="http://statcounter.com/"
target="_blank"><img class="statcounter"
src="//c.statcounter.com/11681621/0/617a5fa9/1/" alt="Web
Analytics Made Easy - StatCounter"></a></div></noscript>
<!-- End of Statcounter Code -->


	
	
	<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "RealEstateAgent",
  "name": "El Paso Cash Home Buyers - Zaragoza",
  "image": "http://www.elpasocashhomebuyers.com/wp-content/themes/elpaso/images/logo.png",
  "url": "http://www.elpasocashhomebuyers.com/",
  "telephone": "(915) 229-8974",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "2077 N. Zaragosa B201",
    "addressLocality": "El Paso",
    "addressRegion": "TX",
    "postalCode": "79938",
    "addressCountry": "US"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 31.7678269,
    "longitude": -106.2626128
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
      "Sunday"
    ],
    "opens": "00:00",
    "closes": "23:59"
  },
  "sameAs": [
    "https://www.facebook.com/elpasocashhomebuyers",
    "https://twitter.com/ElPasoHomeBuyer"
  ]
}
</script>
	
	<!-- Begin Inspectlet JS Code -->
<script type="text/javascript" id="inspectletjs">
(function() {
window.__insp = window.__insp || [];
__insp.push(['wid', 131858148]);
var ldinsp = function(){
if(typeof window.__inspld != "undefined") return; window.__inspld = 1; var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = "inspsync"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cdn.inspectlet.com/inspectlet.js?wid=131858148&r=' + Math.floor(new Date().getTime()/3600000); var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x); };
setTimeout(ldinsp, 0);
})();
</script>
<!-- End Inspectlet JS Code -->
</head>

<body <?php body_class(); ?>>
<a href="tel:915-229-8974" class="phone-icon visible-xs">915-229-8974</a>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MZMX5LG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="page" class="site">

	<a class="skip-link screen-reader-text hide" href="#content"><?php esc_html_e( 'Skip to content', 'gff-starter' ); ?></a>
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
	
    <div id="top" <?php if(!is_front_page()){ echo 'style="margin-bottom:0;background:#000;"';} ?>>
      <div class="container">
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <div class="logo">
                    <a href="/">
                    <picture>
                        <source srcset="<?php bloginfo("template_directory"); ?>/images/logo.png"
                                media="(min-width: 992px)" height="150" width="150">
                        <img class="img-responsive elp-logo"  src="<?php bloginfo("template_directory"); ?>/images/logo-mobile.png" alt="el paso house for cash logo" />
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
						<div class="social-icon" style="color: #FD8B3E"> <a href="https://www.facebook.com/elpasocashhomebuyers" target="_blank"><i class="fa fa-2x fa-facebook-official" aria-hidden="true"></i></a> <a href="https://twitter.com/ElPasoHomeBuyer" target="_blank"><i class="fa fa-2x fa-twitter-square" aria-hidden="true"></i></a></div>
					</div>
				</section>

			</div>
       </div>
    </div>	
	
	

    
    
	<div id="content" class="site-content">