<?php
/**
 * The template for displaying all single posts of post type project
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



				    	 <h3 class="proh"><?php the_title();?></h3>
				    	 <img src="<?php echo get_the_post_thumbnail_url();?>" style="margin-top:10px; height: 400px; width: 100%; margin-left: auto; object-fit: cover;">
				    	 <br>
				    	 
					<div class="metabox container">
						<div class="row">
							<div class="col-sm-5 col-md-5">
								Project Name: <h4><?php echo get_post_meta($post->ID, 'projectname_44712', true);?></h4></div>
							<div class="col-sm-4 col-md-4">	
								Address: <h4><?php  echo get_post_meta($post->ID, 'projectaddress_74148', true);?></h4></div>
							<div class="col-sm-3 col-md-3">
								Project Type: <h4><?php echo get_post_meta($post->ID, 'projecttype_83597', true);?></h4></div>
						</div>
						<div class="row">
							<div class="col-sm-5 col-md-5">
								Total Plinth Area:<h4><?php  echo get_post_meta($post->ID, 'projecttotalplintharea_61414', true);?></h4></div>
								
							<div class="col-sm-4 col-md-4">
								Total Carpet Area: <h4><?php  echo get_post_meta($post->ID, 'projecttotalcarpetarea_36898', true);?></h4></div>
							<div class="col-sm-3 col-md-3">
								Total Hall Area: <h4><?php  echo get_post_meta($post->ID, 'projecttotalhallarea_123', true);?></h4></div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-12">
								Client: <h4><?php echo get_post_meta($post->ID, 'projectclient_76333', true);?></h4></div>								
						</div>
						  
						</div>
                            
                           <br><br>
                            <?php the_content();?>


				 <?php endwhile; ?>
				<?php endif; ?>
				 </div>	</div>


<?php
//get_sidebar();
get_footer();

