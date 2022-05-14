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

<main id="top">

	<div class="p-contact">
		<div class="u-layout">
			<div class="p-contact__inner">
				<h2 class="p-contact__inner__title">Get In Touch</h2>
				<!-- <form class="c-form" action="index.html" method="post">
					<table class="c-form__table">
						<tr class="c-form__table__row">
							<td class="c-form__table__row__td with-mb">
								<input type="text" name="fname" value="" placeholder="First Name" class="c-form__input">
							</td>
							<td class="c-form__table__row__td">
								<input type="text" name="lname" value="" placeholder="Last Name" class="c-form__input">
							</td>
						</tr>
						<tr class="c-form__table__row">
							<td class="c-form__table__row__td with-mb">
								<input type="email" name="email" value="" placeholder="Email" class="c-form__input">
							</td>
							<td class="c-form__table__row__td">
								<input type="tel" name="tel" value="" placeholder="Phone" class="c-form__input">
							</td>
						</tr>
						<tr class="c-form__table__row">
							<td colspan="2" class="c-form__table__row__td">
								<input type="text" name="subject" value="" placeholder="Subject" class="c-form__input">
							</td>
						</tr>
						<tr class="c-form__table__row">
							<td colspan="2" class="c-form__table__row__td">
								<textarea name="message" rows="8" cols="80" placeholder="Enter message here..." class="c-form__textarea"></textarea>
							</td>
						</tr>
					</table>
					<button type="submit" name="send" class="c-button c-form__send">Send Email</button>
				</form> -->
				<?php echo do_shortcode('[contact-form-7 id="20" title="contact form"]'); ?>

			</div>
		</div>
	</div>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
