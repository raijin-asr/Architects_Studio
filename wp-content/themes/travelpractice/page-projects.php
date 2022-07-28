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




        
 <!-- Portfolio 1  Projects-->
  
<section id="portfolio">
            <div class="container portfolio_area text-center">
                <h2><?php esc_html_e( get_theme_mod( 'about_settingfoliopro1' ) ); ?></h2>
                <p><?php esc_html_e( get_theme_mod( 'about_settingfoliopro2' ) ); ?></p>

                <div id="filters">
                    <button class="button is-checked" data-filter="*"><?php esc_html_e( get_theme_mod( 'about_settingfoliopro3' ) ); ?></button>||
                    <button class="button" data-filter=".Featured"><?php esc_html_e( get_theme_mod( 'about_settingfoliopro4' ) ); ?></button>
                    <button class="button" data-filter=".Best"><?php esc_html_e( get_theme_mod( 'about_settingfoliopro5' ) ); ?></button>
                    
                </div>




                <!-- Portfolio grid -->     
                <div class="grid">
                    <div class="grid-sizer"></div>

                            <?php
                // Example argument that defines three posts per page.
               $args = array( 'post_type'=>'project', 
                    'tax_query' => array(
                                                           array(
                                                           'taxonomy' => 'team-category',
                                                           'field'    => 'slug',
                                                           'terms'    => 'bestprojects',
                                                           )
                                                     )
                 );
             
                // Variable to call WP_Query.
                $the_query = new WP_Query( $args );
             
                if ( $the_query->have_posts() ) :
                // Start the Loop
                while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>
                    <div class="grid-item Best">



                        <?php the_post_thumbnail();?>

                        <div class="titleslideshow" style=" 
                                    background: red;
                                    position: relative;
                                    bottom: 41%;
                                    padding:10px;
                                    display: inline-block;
                                    width: 100%;"><?php the_title();?></div>
                         <div class="portfolio_hover_area">
                            <a class="fancybox" href="<?php echo get_the_post_thumbnail_url();?>" data-fancybox-group="gallery" title="<?php the_title();?>"><span class="fa fa-image" alt="Slideshow"></span></a>
                            <a href="<?php the_permalink();?>"><span class="fa fa-info alt="Read More"></span></a>

                            
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
                       
                    
                        
                            <?php
                // Example argument that defines three posts per page.
               $args1 = array( 'post_type'=>'project', 
                    'tax_query' => array(
                                                           array(
                                                           'taxonomy' => 'team-category',
                                                           'field'    => 'slug',
                                                           'terms'    => 'featuredprojects',
                                                           )
                                                     )
                 );
             
                // Variable to call WP_Query.
                $the_query = new WP_Query( $args1 );
             
                if ( $the_query->have_posts() ) :
                // Start the Loop
                while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>
                <div class="grid-item Featured">

                        <?php the_post_thumbnail();?>
                        <div class="titleslideshow" style=" 
                                    background: red;
                                    position: relative;
                                    bottom: 41%;
                                    padding:10px;
                                    display: inline-block;
                                    width: 100%;">
                                    <?php the_title();?></div>
                         <div class="portfolio_hover_area">
                            <a class="fancybox" href="<?php echo get_the_post_thumbnail_url();?>" data-fancybox-group="gallery" title="<?php the_title();?>"><span class="fa fa-image"></span></a>
                            <a href="<?php the_permalink();?>"><span class="fa fa-info"></span></a>
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


                </div><!-- Portfolio grid end -->
            </div>
        </section><!-- Portfolio end -->




<?php
//get_sidebar();
get_footer();
