<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main class="p-not-found">

	<div class="p-not-found__content">
		<div class="u-layout">
			<h1 class="p-not-found__content__heading">Page Not Found</h1>
			<p class="p-not-found__content__txt">The page you're looking for does not exists. <br >Click the button below to go back to homepage.</p>
			<a href="<?php echo home_url('/'); ?>" class="p-not-found__content__btn c-button is-pink">Home</a>
		</div>
	</div>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
