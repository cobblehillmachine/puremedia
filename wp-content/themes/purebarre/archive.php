<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<?php if ( !is_user_logged_in() ) { ?> 
	<div class="mid-cont">
		<div class="page-title logged-out">media room login</div>
		<div class="headline">please enter your username and password below to login</div>
		<?php echo do_shortcode('[flexible-frontend-login]'); ?>
	</div>
<?php } ?>
<?php if (is_user_logged_in() ) { ?> 	
	<div class="portal-header">
		<div class="mid-cont">
			<?php echo do_shortcode('[flexible-frontend-login]'); ?>
			<div class="page-title logged-in">
				<a href="/" class="gray">Media Room</a> &gt; <?php dimox_breadcrumbs(); ?>
			
					<!-- <div class="tuto">Download Pure Barre videos by right-clicking on the link and choose the option "Save link as".<br/> To watch the video, simply click on the "watch video" link.</div> -->
				
			</div>
		</div>
	</div>


	<div class="mid-cont">
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php twentyeleven_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<article id="post-0" class="post no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<p><?php _e( 'Apologies, but no results were found for the requested document or you do not have permission to view this content. ', 'twentyeleven' ); ?></p>
					
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		<?php endif; ?>

	</div>
<?php } ?>
<?php get_footer(); ?>