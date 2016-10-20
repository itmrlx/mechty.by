<?php get_header(); ?>

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
	<h1 class="title-page"><?php the_title(); ?></h1>
	<div class="line"><span></span></div>

	<div class="single-page images">
		<?php the_content(); ?>
		<?php  $images = get_field('portfolio_imgs'); if( $images ): ?>
		<div class="clearfix"></div>
		<div class="row gallery">
			<?php foreach( $images as $image ): ?>
				<div class="col-xs-4 gallery-item">
					<a href="<?php echo $image['sizes']['large']; ?>">
						<img src="<?php echo $image['sizes']['pslide']; ?>" alt="<?php echo $image['alt']; ?>" />
					</a>
				</div>
			<?php endforeach; ?>
		</div>
		<?php endif; ?>
		<div class="clearfix"></div>
			<strong>Поделиться:</strong>
			<script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
			<script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
			<div class="ya-share2" data-services="vkontakte,facebook,gplus,twitter,odnoklassniki" data-counter=""></div>
	</div>

	<div class="clearfix"></div>
	<div class="line"><span></span></div>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>