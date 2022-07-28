<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Travel_Practice
 */

get_header();
?>



	
				<div class="container">
						<div class="service_item">
					<?php if ( have_posts() ) : ?>
				    <?php while ( have_posts() ) : the_post(); ?>
				<br>
				    	
                            <?php the_post_thumbnail();?>
                            <h3><?php the_title();?></a></h3>
                            <?php the_content();?>
                       

				 <?php endwhile; ?>
				<?php endif; ?>
				 </div>	</div>

<?php
//get_sidebar();
get_footer();
