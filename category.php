<?php get_header(); ?>

<h1 class="title-page"><?php single_cat_title(); ?></h1>
<div class="line"><span></span></div>

<?php if(is_category('blog')): ?>
	<div class="row blog">
		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<div class="col-xs-4">
					<a href="<?php the_permalink(); ?>" class="blog-item">
						<?php $post_img = get_field('post_img'); ?>
						<div class="img" style="background-image: url(<?php echo $post_img['sizes']['pslide'] ?>);"></div>
						<h2 class="title-item"><?php the_title(); ?></h2>
						<div class="desc"><?php echo wp_trim_words(get_the_content(),17,'...'); ?></div>
						<div class="sees"><?php if(function_exists('the_views')) { the_views(); } ?></div>
						<div class="date"><?=get_the_date(); ?></div>
						<div class="clearfix"></div>
					</a>
				</div>
			<?php endwhile; ?>
			<div class="clearfix"></div>
			<nav class="centered">
				<?php if(function_exists('proPagination')) { proPagination(); } ?>
			</nav>
		<?php endif; ?>
	</div>

<?php elseif(is_category('command')): ?>
	<div class="row command command-container">
		<div class="col-xs-12">
			<ul class="tabs-menu" id="nav-tab">
				<li class="active"><a class="one" href="#one">Ведущие</a></li>
				<li><a class="two active" href="#two">Фотографы</a></li>
				<li><a class="two2 active" href="#two2">Видеооператоры</a></li>
				<li><a class="three" href="#three">Декор</a></li>
			</ul>
		</div>
		<div class="col-xs-12 tabs-container">
			<div class="row tabs-pane active" id="one">
				<?php $query_my = new WP_Query('category_name=vedushhie&showposts=50'); ?>
				<?php if($query_my->have_posts()) : ?>
					<?php while($query_my->have_posts()) : $query_my->the_post(); ?>
						<div class="col-xs-4">
							<div class="command-item">
								<div class="command-container">
									<?php $post_img = get_field('post_img'); ?>
									<div class="img"><img src="<?php echo $post_img['sizes']['thumbnail'] ?>" alt="command"></div>
									<h2 class="command-title"><?php the_field('v_name'); ?></h2>
									<div class="status"><?php the_field('v_status'); ?></div>
									<div class="desc"><?php echo wp_trim_words(get_field('v_desc'),12,'...'); ?></div>
									<a href="<?php the_permalink(); ?>" class="btn btn-primary">Подробнее</a>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="row tabs-pane" id="two">
				<?php $query_my = new WP_Query('category_name=fotografyi&showposts=50'); ?>
				<?php if($query_my->have_posts()) : ?>
					<?php while($query_my->have_posts()) : $query_my->the_post(); ?>
						<div class="col-xs-4">
							<div class="command-item">
								<div class="command-container">
									<?php $post_img = get_field('post_img'); ?>
									<div class="img"><img src="<?php echo $post_img['sizes']['thumbnail'] ?>" alt="command"></div>
									<h2 class="command-title"><?php the_field('v_name'); ?></h2>
									<div class="status"><?php the_field('v_status'); ?></div>
									<div class="desc"><?php echo wp_trim_words(get_field('v_desc'),12,'...'); ?></div>
									<a href="<?php the_permalink(); ?>" class="btn btn-primary">Подробнее</a>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="row tabs-pane" id="two2">
				<?php $query_my = new WP_Query('category_name=videooperatoryi&showposts=50'); ?>
				<?php if($query_my->have_posts()) : ?>
					<?php while($query_my->have_posts()) : $query_my->the_post(); ?>
						<div class="col-xs-4">
							<div class="command-item">
								<div class="command-container">
									<?php $post_img = get_field('post_img'); ?>
									<div class="img"><img src="<?php echo $post_img['sizes']['thumbnail'] ?>" alt="command"></div>
									<h2 class="command-title"><?php the_field('v_name'); ?></h2>
									<div class="status"><?php the_field('v_status'); ?></div>
									<div class="desc"><?php echo wp_trim_words(get_field('v_desc'),12,'...'); ?></div>
									<a href="<?php the_permalink(); ?>" class="btn btn-primary">Подробнее</a>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="row tabs-pane" id="three">
				<?php $query_my = new WP_Query('category_name=dekor&showposts=50'); ?>
				<?php if($query_my->have_posts()) : ?>
					<?php while($query_my->have_posts()) : $query_my->the_post(); ?>
						<div class="col-xs-4">
							<div class="command-item">
								<div class="command-container">
									<?php $post_img = get_field('post_img'); ?>
									<div class="img"><img src="<?php echo $post_img['sizes']['thumbnail'] ?>" alt="command"></div>
									<h2 class="command-title"><?php the_field('v_name'); ?></h2>
									<div class="status"><?php the_field('v_status'); ?></div>
									<div class="desc"><?php echo wp_trim_words(get_field('v_desc'),12,'...'); ?></div>
									<a href="<?php the_permalink(); ?>" class="btn btn-primary">Подробнее</a>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>

<?php elseif(is_category('shows') || is_category('portfolio')): ?>
	<div class="row show <?php if(is_category('portfolio')){ echo 'portfolio'; }; ?>">
		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<div class="col-xs-4">
					<div class="show-item">
						<?php $post_img = get_field('post_img'); ?>
						<div class="img" style="background-image: url(<?php echo $post_img['sizes']['pslide'] ?>);"></div>
						<h2 class="show-title"><?php the_title(); ?></h2>
						<a href="<?php the_permalink(); ?>" class="btn btn-primary">Подробнее</a>
					</div>
				</div>
			<?php endwhile; ?>
			<div class="clearfix"></div>
			<nav class="centered">
				<?php if(function_exists('proPagination')) { proPagination(); } ?>
			</nav>
		<?php endif; ?>
	</div>

<?php elseif(is_category('holidays') || is_category('services')): ?>
	<div class="row prazdnik">
		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<div class="col-xs-4">
					<div class="prazdnik-item">
						<?php $post_img = get_field('post_img'); ?>
						<img src="<?php echo $post_img['sizes']['pslide'] ?>" alt="<?php echo $post_img['alt']; ?>">
						<h2 class="prazdnik-title"><?php the_title(); ?></h2>
						<div class="desc">
							<?php echo wp_trim_words(rShCode(get_the_content()),12,'...'); ?>
						</div>
						<a href="<?php the_permalink(); ?>" class="btn btn-primary">Подробнее</a>
					</div>
				</div>
			<?php endwhile; ?>
			<div class="clearfix"></div>
			<nav class="centered">
				<?php if(function_exists('proPagination')) { proPagination(); } ?>
			</nav>
		<?php endif; ?>
	</div>

<?php else: ?>
	Нет шаблона для данной рубрики, обратитесь к администратору.
<?php endif; ?>

<div class="line"><span></span></div>

<?php get_footer(); ?>