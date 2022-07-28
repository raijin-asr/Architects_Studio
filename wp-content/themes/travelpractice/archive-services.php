<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Travel_Practice
 */

get_header();
?>



 <!-- Services -->
        <section id="why_us1">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="head_title">
                            <h2><?php esc_html_e( get_theme_mod( 'about_settingser1' ) ); ?></h2>
                            <p><?php esc_html_e( get_theme_mod( 'about_settingser2' ) ); ?></p>

                        </div>
                    </div>
                </div>
                <div class="row">

			<?php
				// Example argument that defines three posts per page.
				$args = array('post_type' => 'services' );
			 
				// Variable to call WP_Query.
				$the_query = new WP_Query( $args );
			 
				if ( $the_query->have_posts() ) :
			    // Start the Loop
			    while ( $the_query->have_posts() ) : $the_query->the_post();
			?>



                    <div class="col-md-3 col-sm-6">
                        <div class="why_us_item">
                             <a><img src="<?php echo get_the_post_thumbnail_url();?>" style="width: 100%; height: 189px;"></a><br><br>
                            <h3><a><?php the_title();?></a></h3>
                            <p><?php the_excerpt();?> </p>
                        </div>
                    </div>
                   
                    	<?php
				          // End the Loop
				    endwhile;
						else:
				    // If no posts match this query, output this text.
				    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
				endif;
				wp_reset_postdata();
				 
				?>

                </div>
            </div>
        </section><!-- Services end -->


        <?php
//get_sidebar();
get_footer();
