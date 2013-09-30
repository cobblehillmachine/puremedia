<?php get_header(); ?>
		<?php if ( !is_user_logged_in() ) { ?> 
			<div class="mid-cont">
				<div class="page-title">
					media room login
				</div>
				<div class="headline">please enter your username and password below to login</div>
				<?php echo do_shortcode('[flexible-frontend-login]'); ?>
			</div>
		<?php } ?>


		<?php if (is_user_logged_in() ) { ?> 
			<div class="portal-header">
				<div class="mid-cont">
					<div class="page-title">media room</div>
					<?php echo do_shortcode('[flexible-frontend-login]'); ?>
					Welcome to the Pure Barre media room. Below are our current assets and materials available for media.
				</div>
			</div>

			<div id="videos-coverage" class="portal-cont">
				<div class="mid-cont">
					<div class="portal-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/videos_choreo.jpg" /></div>
					<div class="portal-info">
						<div class="title">video coverage</div>
						
					</div>
					<div class="link-cont">
						<a class="cat-item" href="/category/video-coverage">view video coverage &nbsp;&gt;</a>
					</div>
				</div>
			</div>

			<div id="pr-kit" class="portal-cont">
				<div class="mid-cont">
					<div class="portal-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/videos_writeup.jpg" /></div>
					<div class="portal-info">
						<div class="title">pr kit</div>
						
					</div>
					<div class="link-cont">
						<a class="cat-item" href="/category/pr-kit">view pr-kit &nbsp;&gt;</a>
					</div>
				</div>
			</div>

			<div id="hi-res-photos" class="portal-cont">
				<div class="mid-cont">
					<div class="portal-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/resources.jpg" /></div>
					<div class="portal-info">
						<div class="title">hi-res photos</div>
						<span></span>
					</div>
					<div class="link-cont">
						<a class="cat-item" href="/category/hi-res-photos">view hi-res photos &nbsp;&gt;</a>
					</div>
				</div>
			</div>

			<div id="dvd-covers" class="portal-cont">
				<div class="mid-cont">
					<div class="portal-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/tutorials.jpg" /></div>
					<div class="portal-info">
						<div class="title">dvd covers</div>
						<span></span>
					</div>
					<div class="link-cont">
						<a class="cat-item" href="/category/dvd-covers">view dvd covers &nbsp;&gt;</a>
					</div>
				</div>
			</div>
	<?php } ?>
<?php get_footer(); ?>