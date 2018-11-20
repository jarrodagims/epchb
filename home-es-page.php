<?php
/**
 * Template Name: Home ES
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

<div class="overlay"></div>
<div class="full-width" style="position:relative;">

<div class="banner-contant">
    <div class="container">
        <div class="full-width">
           <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="banner-left"><h1>Venda su Casa Por Dinero en Effective Rápido en El Paso, Texas </h1>
					<section id="custom_html-4" class="widget_text widget global-section2-widget widget_custom_html">
						<div class="textwidget custom-html-widget">
							<h3>No pague tarifas, no pague comisiones, no pague el costo de cierre.</h3>
							<p>Obtenga la mejor oferta en efectivo. ¡Podemos cerrar en 7 días!</p>
							<h5>Empieze Ahora</h5>
						</div>
					</section>
				</div>
            </div>
             <div class="col-sm-12 col-xs-12 center-block"><div class="form"><?php echo do_shortcode('[contact-form-7 id="743" title="Home Contact Form ES"]') ?></div> </div>
            </div>
        </div>
		
    </div>
</div>

</div>

<div class="clearfix"></div>
</div>


<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    	
		<div class="container-fluid home-callout-section"><div class="container"><section id="text-7" class="widget home-callout-widget widget_text"><div class="textwidget"><p>El Paso Cash Home Buyers ha estado comprando casas en El Paso y condados circundantes por más de diez años. Obtenemos ofertas en efectivo para nuestros clientes en menos de 24 horas.</p></div></section></div></div>
    	<div class="container-fluid home-steps-section">
			
			<div class="container">
				
			<section id="text-6" class="widget home-steps-widget widget_text">
				
			<div class="textwidget"><div class="row">
			
			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12"><p>&nbsp;</p><h3>Paso #1</h3><p><span class="step-content">Llámenos al 915-228-2609 o llene la forma en este sitio. De ahí, le vamos a ofrecer la mejor oferta en efectivo<br> </span></p></div>
			
			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12"><p>&nbsp;</p><h3>Paso #2:</h3><p><span class="step-content">El Paso Cash Home Buyers le presentará una oferta de efectivo justa y sin compromiso por su casa.<br> </span></p></div>
			
			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12"><p>&nbsp;</p><h3>Paso #3:</h3><p><span class="step-content">Usted elige la fecha en la que desea cerrar. <br> </span></p></div>
			
			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12"><p>&nbsp;</p><h3>Paso #4:</h3><p><span class="step-content">Cuando todo esté finalizado,  vamos a completar su oferta y le daremos el efectivo que necesita<br> </span></p></div></div>
			
			<hr class="style13">
			<h3>Beneficios:</h3>
			<div class="row steps_benefits">
				<div class="col-lg-6 col-md-6 col-sm-12 "><p><i class="fa fa-1x fa-check-circle-o"></i>No tiene que pagar nada en costo de cierre. Nosotros nos vamos a encargar de la oferta completa.</p><p><i class="fa fa-1x fa-check-circle-o"></i>No hay agentes ni complicaciones.</p><p><i class="fa fa-1x fa-check-circle-o"></i>Si se necesita cambiar de casa rapido, le daremos su dinero en tan solo siete días.</p></div>
				<div class="col-lg-6 col-md-6 col-sm-12 "><p><i class="fa fa-1x fa-check-circle-o"></i>No tiene que reparar nada. Compramos casas en cualquier condición, tal y cual como están.</p><p><i class="fa fa-1x fa-check-circle-o"></i>Oferta en efectivo en tan solo siete días.</p></div>
			</div>
				
			</div>
				
			</section>
				
			</div>
		</div>
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
                    <section id="text-4" class="widget slider-widget widget_text">			
						<div class="textwidget"><h2 class="widget-title global-section3-widget-title" style="margin-top: 0px;">Obtenga su oferta Fair Cash: Comience abajo!</h2>
						<div class="textwidget">
						<?php echo do_shortcode('[contact-form-7 id="744" title="Contact Side ES"]') ?>
						</div>
						</div>
					</section>                
				</div>
				<div class="full-width bg-gray padding20 contant-right">
					<section id="text-3" class="widget global-section2-widget widget_text"><h2 class="widget-title global-section2-widget-title" style="margin-top:0px;">Otras áreas que servimos</h2>			<div class="textwidget"><ul>
							<li>Anthony, Texas</li>
							<li>Canutillo, Texas</li>
							<li>Clint, Texas</li>
							<li>El Chaparral, Texas</li>
							<li>Horizon City, Texas</li>
							<li>San Elizario, Texas</li>
							<li>Socorro, Texas</li>
							<li>Sunland Park, New Mexico</li>
							<li>Vinton, Texas</li>
							<li>Las Cruces, New Mexico</li>
							<li>Santa Teresa, New Mexico</li>
							</ul>
							</div>
					</section>               
				</div>

									  <div class="full-width bg-gray padding20 contant-right">
										<section id="text-5" class="widget global-section4-widget widget_text"><h2 class="widget-title global-section4-widget-title" style="margin-top:0px;">¡Conectate con nosotros!</h2>			
											<div class="textwidget"><p>Obtenga más información sobre nosotros y encuentre otros recursos para vender su casa a continuación. Como nosotros, ¡síganos, conéctese!</p>
					<div class="social-icon">
					<p>&nbsp;</p>
					</div>
					</div>
							</section><div itemscope="" itemtype="http://schema.org/Organization" itemref="social-links" class="social-icons-widget "><div class="social-links"> <a itemprop="sameAs" href="" target="_blank"></a><a itemprop="sameAs" href="" target="_blank"></a></div></div>                </div>

			</div>
        </div>
    </main>
</div>

<?php
get_footer();