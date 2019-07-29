<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="wrapper" id="index-wrapper" itemprop="mainContentOfPage" itemscope itemtype="http://schema.org/WebPageElement">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 pb-5 pt-5 title-section">
				<h2 class="text-lighter title" itemprop="name"><?php _e('Trabalhe <b class="text-bold">conosco</b>', 'uderstrap'); ?></h2>
				<p class="text-justify text-lighter" itemprop="about" itemscope="" itemtype="http://schema.org/Thing">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat mi vel cursus rutrum. Etiam elementum velit libero, sed euismod mi fermentum non. Suspendisse potenti. Nunc semper ultricies lacinia. Etiam egestas nibh nec velit porta porttitor. Sed vel bibendum urna. Nunc a lorem ultrices, vehicula lorem non, efficitur nisl. </p>
			</div>
		</div>
	</div>

	<div class="background-secondary">
		<div class="container">
			<div class="row">
				<div class="col-12 p-5">
					<?php echo do_shortcode('[contact-form-7 id="23" title="Formulário de contato 1"]'); ?>
				</div>
			</div>
		</div>
	</div>
	<!-- jobsoffers -->
	<div class="container">
		<div class="row pt-5 pb-5">
			<div class="col-sm-12  col-lg-4 mb-5">
				<div class="card card-vaga pl-3 pr-3 pt-5 pb-0 hvr-float-shadow"  itemscope itemtype="http://schema.org/JobPosting">
					<h4 class="card-title text-primary" itemprop="occupationalCategory"><?php _e('Vaga de Mídia', 'understrap'); ?></h4>
					<p class="text-justify text-lighter" itemprop="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat mi vel cursus rutrum. Etiam elementum velit libero, sed euismod mi fermentum non. Suspendisse potenti.</p>
					<a href="#" class="float-right">+</a>
				</div>
			</div>
			<div class="col-sm-12  col-lg-4 mb-5">
				<div class="card card-vaga card-background-secondary pl-3 pr-3 pt-5 pb-0 hvr-float-shadow" itemscope itemtype="http://schema.org/JobPosting">
					<h4 class="card-title text-secondary" itemprop="occupationalCategory"><?php _e('Vaga de Mídia', 'understrap'); ?></h4>
					<p class="text-justify text-lighter" itemprop="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat mi vel cursus rutrum. Etiam elementum velit libero, sed euismod mi fermentum non. Suspendisse potenti.</p>
					<a href="#" class="float-right text-secondary">+</a>
				</div>
			</div>
			<div class="col-sm-12 col-lg-4 mb-5">
				<div class="card card-vaga card-background-danger pl-3 pr-3 pt-5 pb-0 hvr-float-shadow" itemscope itemtype="http://schema.org/JobPosting">
					<h4 class="card-title text-danger" itemprop="occupationalCategory"><?php _e('Vaga de Mídia', 'understrap'); ?></h4>
					<p class="text-justify text-lighter" itemprop="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat mi vel cursus rutrum. Etiam elementum velit libero, sed euismod mi fermentum non. Suspendisse potenti.</p>
					<a href="#" class="float-right text-danger">+</a>
				</div>
			</div>
		</div>
	</div>
	<!-- /jobsoffers -->
	<div class="card-group mb-3">
		<div class="card card-background-image p-3">
			<h4 class="card-title text-center text-white">Apis3</h4>
		</div>
		<div class="card bg-primary p-3">
			<h4 class="card-title text-center text-white">Apis3 play</h4>
		</div>
		<div class="card bg-danger p-3">
			<h4 class="card-title text-center text-white">Apis3 school</h4>
		</div>
	</div>

</div><!-- #index-wrapper -->

<?php get_footer(); ?>
