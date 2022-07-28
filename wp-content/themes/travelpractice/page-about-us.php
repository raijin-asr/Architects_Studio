<?php
/**
 * The template for displaying About us page
 *
 * This is the template that displays About us by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Travel_Practice
 */

get_header();
?>
	
				<div class="container">
					<?php if ( have_posts() ) : ?>
				    <?php while ( have_posts() ) : the_post(); ?>
				<br>


					<h2><?php the_title();?></h2><br>
				<div id="container">
    				<div id="floated">
				   <img src="<?php echo get_the_post_thumbnail_url();?>" >

				   	</div>
					
					<?php the_content();?>
				</div>
				 <?php endwhile; ?>
				<?php endif; ?>
			</div>


<?php
//get_sidebar();
get_footer();
