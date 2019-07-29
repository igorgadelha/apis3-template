<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>


<div class="wrapper" id="wrapper-footer">

	<footer class="site-footer pt-3 pb-5" id="colophon" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
		<div class="container">

			<div class="row p-3">

				<div class="col-md-5 col-lg-4" itemscope itemtype="http://schema.org/LocalBusiness">
					<img src="<?php echo get_template_directory_uri(). '/src/img/logo-apis3-branco.svg'; ?>" class="img-fluid" alt="">
					<p class="text-white" itemscope itemtype="http://schema.org/PostalAddress"><?php _e('<span itemprop="streetAddress">Av. Cardoso de Melo 878</span> - <span itemprop="addressLocality">Vila Olímpia</span> - <span itemprop="addressRegion">São Paulo</span>','understrap') ?></p>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-6">
							<a href="mailto:contato@apis3.com" class="text-white" itemprop="email">contato@apis3.com</a><br>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-6">
							<a href="tel:+55112364-9621" class="text-white" itemprop="telephone"><?php _e('+55 11 2364-9621','understrap'); ?></a>
						</div>
						<div class="col-sm-12 col-md-12">
							<img src="<?php echo get_template_directory_uri(). '/src/img/social.png'; ?>" class="img-fluid" alt="">
						</div>
					</div>
				</div><!--col end -->

				<div class="col-md-1 col-lg-2"></div>

				<div class="col-sm-12 col-md-2 justify-content-center">
					<h4 class="text-white text-lighter newsletter"><?php _e('<small>Receba nossa</small> <strong>newsletter</strong>','understrap'); ?></h4>
				</div><!--col end -->

				<div class="col-md-4">
					<form class="row newsletter">
						<div class="form-group col-md-12 col-lg-6">
							<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome">
						</div>
						<div class="form-group col-md-12 col-lg-6">
							<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Sobrenome">
						</div>
						<div class="form-group col-md-12 col-lg-6">
							<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="E-mail">
						</div>
						<div class="form-group col-md-12 col-lg-6">
							<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Empresa">
						</div>
						<div class="form-group col-md-12">
							<button type="submit" class="btn btn-gold float-right text-right text-uppercase" name="button"><?php _e('enviar', 'understrap'); ?></button>
						</div>
					</form>
				</div><!--col end -->

			</div><!-- row end -->
		</div><!-- container end -->
		<ul class="nav justify-content-center navfooter">
			<li class="nav-item">
				<a class="nav-link hvr-underline-from-center text-white" href="#">Carreiras</a>
			</li>
			<li class="nav-item">
				<a class="nav-link hvr-underline-from-center text-white" href="#">Cultura Apis3</a>
			</li>
			<li class="nav-item">
				<a class="nav-link hvr-underline-from-center text-white" href="#">Serviços</a>
			</li>
			<li class="nav-item">
				<a class="nav-link hvr-underline-from-center text-white" href="#">Clientes</a>
			</li>
			<li class="nav-item">
				<a class="nav-link hvr-underline-from-center text-white" href="#">Polinize</a>
			</li>
			<li class="nav-item">
				<a class="nav-link hvr-underline-from-center text-white" href="#">Contato</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white hvr-back-pulse btn btn-outline-light btn-sm" href="#">Trabalhe Conosco</a>
			</li>
		</ul>
	</footer><!-- #colophon -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
