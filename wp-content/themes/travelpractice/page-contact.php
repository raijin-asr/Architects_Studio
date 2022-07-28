<?php
/**
 * The template for displaying contact page
 *
 * This is the template that displays contact pages by default.
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

	
				<div class="container contact" style="margin-top: 20px;">
					<div class="contact-icon">
						<h4><i class="fa fa-info-circle" aria-hidden="true" style="font-size: 25px;"></i> CONTACT INFORMATION:</h4>
					</div>
					<div class="contact-content">
							<?php if ( have_posts() ) : ?>
						    <?php while ( have_posts() ) : the_post(); ?>
							<br>
							<?php the_content();?>
						 <?php endwhile; ?>
						<?php endif; ?>
					</div>	
			</div>


<?php
//get_sidebar();
get_footer();
