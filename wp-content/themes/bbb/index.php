<?php get_header(); ?>

	<div class="section">
		<div id="content" class="col sixth">
		<?php if (have_posts()): while (have_posts()): the_post();?>
		
			<h2><?php the_title(); ?><span><?php the_category(); ?></span></h2>
			
			<?php 
				// set picture attributes

				$attr = array(
					'src'	=> $src,
					'class'	=> "attachment-$size",
					'alt'	=> trim(strip_tags( $wp_postmeta->_wp_attachment_image_alt )),
				);

			 ?>

			
			<?php the_content(); ?>

			<div class="polaroid">
				<?php get_the_post_thumbnail( $size, $attr ); ?>
				<p class="caption">
				</p>
			</div>

		</div>
		<?php endwhile; endif; ?>
		<?php get_sidebar(); ?>

		<div class="clear"></div>
	</div>
	
<?php get_footer(); ?>
</div> <!-- end #wrap -->

