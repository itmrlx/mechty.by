<?php /*
template name: Контакты
*/ ?>

<?php get_header(); ?>

		<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
			<h1 class="title-page"><?php the_title(); ?></h1>
			<div class="line"><span></span></div>
		<?php endwhile; ?>
		<?php endif; ?>

<?php get_footer(); ?>