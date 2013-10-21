<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>


	<?php if(is_category(22) || is_category(23)) { ?> 
		<div class="material">
			<div class="title"><?php the_title(); ?></div><br/>
			<!-- <a class="link" href="<?php the_field('file'); ?>">open file</a> -->
			<a href="<?php
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
			echo $url = $thumb['0'];
			?>" target="_blank"><?php the_post_thumbnail('thumbnail'); ?></a>
		</div>
	<?php } else {  ?>
	<div class="material">
		<div class="title"><?php the_title(); ?></div>
		<a class="link" href="<?php the_field('file'); ?>">open file</a>
	</div>
	<?php } ?>