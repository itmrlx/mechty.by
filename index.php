<?php get_header(); ?>

			<!-- slider top -->
			<div class="slider-top">
				<?php $slidercnt = 1; ?>
				<?php if( have_rows('m_slide','option') ): ?>
					<?php while ( have_rows('m_slide','option') ) : the_row(); ?>
						<?php $m_slide = get_sub_field('img'); ?>
						<div class="slide" style="background-image: url(<?php echo $m_slide['sizes']['large']; ?>);">
							<div class="title">
								<?php the_sub_field('text'); ?>
								<?php if(get_sub_field('link')): ?>
									<div class="centered">
										<a href="<?php the_sub_field('link'); ?>" class="btn btn-primary bg"><?php the_sub_field('btn_text'); ?></a>
									</div>
									<?php $slidercnt++; ?>
								<?php endif; ?>
							</div>
						</div>
					<?php endwhile; ?>
				<?php else : ?>
					Слайдов нет
				<?php endif; ?>
			</div>
			<!-- ours command -->
			<div class="row ours-command">
				<div class="col-xs-2 col-xs-offset-2">
					<div class="img1"></div>
					<div class="title">Наша<br>команда</div>
					<a href="/category/command" class="btn btn-primary">Познакомиться</a>
				</div>
				<div class="col-xs-2 col-xs-offset-1">
					<div class="img2"></div>
					<div class="title">Наше портфолио</div>
					<a href="/category/holidays/" class="btn btn-primary">Заглянуть</a>
				</div>
				<div class="col-xs-2 col-xs-offset-1">
					<div class="img3"></div>
					<div class="title">Наши выставки и награды</div>
					<a href="/honors/" class="btn btn-primary">Узнать</a>
				</div>
			</div>
			<!-- organization -->
			<div class="row organization">
				<div class="col-xs-12">
					<div class="organization-container">
						<div class="title">
							<span>
								<span>Мы с радостью</span><br>
								ОРГАНИЗУЕМ
							</span>
						</div>
						<div class="row org-items">
							<div class="col-xs-3">
								<img src="<?php bloginfo('template_url'); ?>/img/i1.svg" alt="Определение сценария">
								<div class="title2">Определение сценария</div>
							</div>
							<div class="col-xs-3">
								<img src="<?php bloginfo('template_url'); ?>/img/i2.svg" alt="Макияж и прическа невесте">
								<div class="title2">Макияж и прическа невесте</div>
							</div>
							<div class="col-xs-3">
								<img src="<?php bloginfo('template_url'); ?>/img/i3.svg" alt="Транспорт на свадьбу">
								<div class="title2">Транспорт на свадьбу</div>
							</div>
							<div class="col-xs-3">
								<img src="<?php bloginfo('template_url'); ?>/img/i4.svg" alt="Живая музыка">
								<div class="title2">Живая музыка</div>
							</div>
							<div class="col-xs-3">
								<img src="<?php bloginfo('template_url'); ?>/img/i5.svg" alt="Определение сроков">
								<div class="title2">Определение сроков</div>
							</div>
							<div class="col-xs-3">
								<img src="<?php bloginfo('template_url'); ?>/img/i6.svg" alt="Фото-видеосъемка">
								<div class="title2">Фото-видеосъемка</div>
							</div>
							<div class="col-xs-3">
								<img src="<?php bloginfo('template_url'); ?>/img/i7.svg" alt="Составление стиля свадьбы">
								<div class="title2">Составление стиля свадьбы</div>
							</div>
							<div class="col-xs-3">
								<img src="<?php bloginfo('template_url'); ?>/img/i8.svg" alt="Выбор шоу-программы">
								<div class="title2">Выбор шоу-программы</div>
							</div>
							<div class="col-xs-3">
								<img src="<?php bloginfo('template_url'); ?>/img/i9.svg" alt="Расчет сметы">
								<div class="title2">Расчет сметы</div>
							</div>
							<div class="col-xs-3">
								<img src="<?php bloginfo('template_url'); ?>/img/i10.svg" alt="Составление отчетов о подготовке">
								<div class="title2">Составление отчетов о подготовке</div>
							</div>
							<div class="col-xs-3">
								<img src="<?php bloginfo('template_url'); ?>/img/i11.svg" alt="Подбор звукорежиссера">
								<div class="title2">Подбор звукорежиссера</div>
							</div>
							<div class="col-xs-3">
								<img src="<?php bloginfo('template_url'); ?>/img/i12.svg" alt="Украшение и стилистика праздника">
								<div class="title2">Украшение и стилистика праздника</div>
							</div>
							<div class="col-xs-3">
								<img src="<?php bloginfo('template_url'); ?>/img/i13.svg" alt="Встреча с исполнителями">
								<div class="title2">Встреча с исполнителями</div>
							</div>
							<div class="col-xs-3">
								<img src="<?php bloginfo('template_url'); ?>/img/i14.svg" alt="Звонки всем исполнителям">
								<div class="title2">Звонки всем исполнителям</div>
							</div>
							<div class="col-xs-3">
								<img src="<?php bloginfo('template_url'); ?>/img/i15.svg" alt="Подготовка банкета">
								<div class="title2">Подготовка банкета</div>
							</div>
							<div class="col-xs-3">
								<img src="<?php bloginfo('template_url'); ?>/img/i16.svg" alt="Покупка или пошив свадебного платья">
								<div class="title2">Покупка или пошив свадебного платья</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="centered btn-org">
					<div class="btn-container">
						<a href="#fform" class="btn btn-primary fancybox" onclick="fform('Поговорить о свадьбе');">Поговорить о свадьбе</a>
					</div>
				</div>
			</div>
			<!-- how we -->
			<div class="row how-we">
				<div class="how-we-block">
					<div class="col-xs-10 col-xs-offset-1">
						<div class="line"><span></span></div>
					</div>
					<div class="col-xs-5">
						<div class="title"><?php the_field('p_title','option'); ?></div>
						<div class="desc">
							<?php the_field('p_text','option'); ?>
						</div>
					</div>
					<div class="col-xs-7">
						<div class="slider-how-we-container">
							<div class="slider-how-we">
								<?php if( have_rows('p_slide','option') ): ?>
									<?php while ( have_rows('p_slide','option') ) : the_row(); ?>
										<div class="slide">
											<?php if(get_sub_field('video')): ?>
												<?php the_sub_field('video'); ?>
											<?php else: ?>
												<?php $p_slide = get_sub_field('img'); ?>
												<img src="<?php echo $p_slide['sizes']['pslide']; ?>" alt="<?php echo $p_slide['alt']; ?>">
											<?php endif; ?>
										</div>
									<?php endwhile; ?>
								<?php else : ?>
									Слайдов нет
								<?php endif; ?>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="how-buy">
				<div class="row">
					<div class="col-xs-6">
						<div class="sale">
							<div class="desc">На организацию праздников по четвергам и воскресеньям</div>
						</div>
					</div>
					<div class="col-xs-5 col-xs-offset-1 saleform">
						<form id="saleform">
							<div class="row">
								<div class="col-xs-9">
									<div class="title-form">Оставить заявку</div>
									<div class="form-group">
										<input class="form-control name" name="name" type="text" placeholder="Ваше имя:" required />
									</div>
									<div class="form-group">
										<input class="form-control tel" name="tel" type="tel" placeholder="Номер телефона:" required />
									</div>
									<div class="form-group" style="display:none;">
										<label>for robots:</label>
										<input class="form-control" type="text" name="email" />
										<input class="form-control" type="text" name="title" value="Скидка на организацию праздников" />
									</div>
								</div>
								<div class="col-xs-3">
									<button type="submit" class="btn"></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- blog -->
			<div class="row blog-main">
				<?php $query_my = new WP_Query('category_name=blog&showposts=3'); ?>
				<?php if($query_my->have_posts()) : ?>
					<?php while($query_my->have_posts()) : $query_my->the_post(); ?>
						<div class="col-xs-4">
							<?php $post_img = get_field('post_img'); ?>
							<a href="<?php the_permalink(); ?>" class="blog-item" style="background-image: url(<?php echo $post_img['sizes']['pslide'] ?>);">
								<div class="date"><?=get_the_date(); ?></div>
							</a>
							<div class="sees"><?php if(function_exists('the_views')) { the_views(); } ?></div>
							<div class="clearfix"></div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
				<div class="col-xs-12 centered">
					<a href="/category/blog/" class="btn btn-primary">Перейти в блог</a>
				</div>
			</div>
			<!-- footer -->
			<div class="line"><span></span></div>

<?php get_footer(); ?>