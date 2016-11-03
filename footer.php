			<div class="row footer">
				<div class="col-xs-9">
					<div class="map">
						<div class="map-container">
							<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=WUgP1duiTyqTg58gY8tkY4yG9TTTrmii&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
						</div>
						<div class="text-container">
							<a href="/"><img src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="logo"></a>
							<div class="adres"><?php the_field('f_adres','option'); ?></div>
							<div class="tel">
								<?php the_field('f_phones','option'); ?>
							</div>
							<div class="mail"><a href="mailto:<?php the_field('f_email','option'); ?>"><?php the_field('f_email','option'); ?></a></div>
						</div>
					</div>
				</div>
				<div class="col-xs-3 foo-right">
					<?php if(is_page('contacts')): ?>
						<form id="saleform2">
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
								<input class="form-control" type="text" name="title" value="Страница контактов" />
							</div>
							<div class="centered">
								<button type="submit" class="btn btn-primary">Отправить</button>
							</div>
						</form>
					<?php else: ?>
						<script type="text/javascript" src="//vk.com/js/api/openapi.js?125"></script>

						<!-- VK Widget -->
						<div id="vk_groups"></div>
						<script type="text/javascript">
						VK.Widgets.Group("vk_groups", {redesign: 1, mode: 0, width: "200", height: "400", color1: 'FFFFFF', color2: '000000', color3: '5E81A8'}, 49653243);
						</script>
					<?php endif; ?>
				</div>
			</div>
		</div> <!-- other container -->
	</div> <!-- all container -->
	<div class="container copyright">
		<p class="webber">Разработка сайта<a href="http://webber.by" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/webber-gray.svg" alt="Webber создание сайтов">Webber Studio</a></p>
	</div>

	<!-- modal -->
	<div id="fform" style="display: none;">
		<form id="fformform" class="fform">
			<div class="title-modal-form">Обратная связь</div>
			<div class="form-group">
				<input class="form-control name" name="name" type="text" placeholder="Ваше имя:" required />
			</div>
			<div class="form-group">
				<input class="form-control tel" name="tel" type="tel" placeholder="Номер телефона:" required />
			</div>
			<div class="form-group mail-show" style="display: none;">
				<input class="form-control mail" name="mail" type="email" placeholder="Email:" />
			</div>
			<div class="form-group date-show" style="display: none;">
				<input class="form-control date" name="date" type="date" placeholder="Дата:" />
			</div>
			<div class="form-group" style="display: none;">
				<label>for robots:</label>
				<input class="form-control" type="text" name="email" />
				<input class="form-control" id="title-modal-val" type="text" name="title" value="" />
			</div>
			<button type="submit" class="btn btn-primary">Отправить</button>
		</form>
	</div>

	<!-- scroll to top -->
	<div class="scroll-to-top"></div>

	<!-- scripts -->
	<script src="<?php bloginfo('template_url'); ?>/js/dist/jquery-3.0.0-dist.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/dist/jquery.fancybox-dist.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/dist/slick-dist.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/dist/script-dist.js"></script>
	<?php wp_footer(); ?>
</body>
</html>