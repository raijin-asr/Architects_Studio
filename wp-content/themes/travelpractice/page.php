<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
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
				   <img src="<?php echo get_the_post_thumbnail_url();?>" >
					<?php the_content();?>
				 <?php endwhile; ?>
				<?php endif; ?>
			</div>


<?php
//get_sidebar();
get_footer();
