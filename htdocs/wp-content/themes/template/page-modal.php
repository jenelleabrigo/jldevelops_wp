<div class="p-index__works__inner__modal">
	<span class="p-index__works__inner__modal__close">&times;</span>
	<div class="p-index__works__inner__modal__content">
		<div class="">
			<p class="p-index__works__inner__modal__content__title u-text is-big is-pink u-font-serif"><?php the_field('title'); ?></p>
			<div class="p-index__works__inner__modal__content__techstack">
				<?php
					$values = get_field('language');
					if ($values) :
					foreach ($values as $value) :
				 ?>
				 <img src="<?php echo $value['value'];?>" alt="<?php echo $value['label'];?>"  title="<?php echo $value['label'];?>" class="p-index__works__inner__modal__content__techstack__logo">
			 <?php endforeach; endif; ?>
			</div>
		</div>
		<a href="<?php the_field('link'); ?>" target="_blank" class="p-index__works__inner__modal__content__link">Visit Website</a>
		<p class="p-index__works__inner__modal__content__text"><?php the_field('content'); ?></p>
		<div class="p-index__works__inner__modal__content__slide">
			<section id="image-carousel" class="splide" aria-label="Beautiful Images">
				<div class="splide__track">
					<ul class="splide__list">
						<?php if (get_field('image1')):?>
							<li class="splide__slide">
								<img class="p-voice-post__section__item__detail__img" src="<?php the_field('image1');?>" alt="image">
							</li>
						<?php endif;?>
						<?php if (get_field('image2')):?>
							<li class="splide__slide">
								<img class="p-voice-post__section__item__detail__img" src="<?php the_field('image2');?>" alt="image">
							</li>
						<?php endif;?>
						<?php if (get_field('image3')):?>
							<li class="splide__slide">
								<img class="p-voice-post__section__item__detail__img" src="<?php the_field('image3');?>" alt="image">
							</li>
						<?php endif;?>
					</ul>
				</div>
			</section>
		</div>
	</div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/data/js/splide/splide.min.js" charset="utf-8"></script>
