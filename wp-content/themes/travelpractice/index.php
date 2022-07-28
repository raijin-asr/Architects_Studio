<?php
/**
Template Name:Home
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Travel_Practice
 */

get_header();
?>


<!-- Smart slider -->
<?php 
echo do_shortcode('[smartslider3 slider=2]');
?>


<!-- Tagline -->

 <section id="why_ustag" style="background: lightgreen; padding:15px; margin-top: 10px;" >
            <div class="container text-center">
                <div class="head_title">
 <h2><?php esc_html_e( get_theme_mod( 'about_settingtag1' ) ); ?></h2>
 <?php esc_html_e( get_theme_mod( 'about_settingtag2' ) ); ?>
</div>
</section>





 <!-- Projects-->
        <section id="why_us">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="head_title">
                            <h2><?php esc_html_e( get_theme_mod( 'about_settingpro1' ) ); ?></h2>
                            <p><?php esc_html_e( get_theme_mod( 'about_settingpro2' ) ); ?></p>

                        </div>
                    </div>
                </div>
                <div class="row">

            <?php
                // Example argument that defines three posts per page.
                $args = array('posts_per_page' => 4,'post_type' => 'project');
             
                // Variable to call WP_Query.
                $the_query = new WP_Query( $args );
             
                if ( $the_query->have_posts() ) :
                // Start the Loop
                while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>



                    <div class="col-md-3 col-sm-6">
                        <div class="why_us_item">
                           <a href="<?php the_permalink();?>"><img src="<?php echo get_the_post_thumbnail_url();?>" style="width: 100%; height: 189px;"></a><br><br>
                            <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                            <?php echo get_excerpt(125); ?>
                            <hr size="20">
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

                </div><br>
                 <a href="?page_id=29" class="btn know_btn" style="float: right;"><?php esc_html_e( get_theme_mod( 'about_settingmorepro1' ) ); ?></a>
            </div><br>
            
        </section><!-- Project end -->



        

        <!-- Services -->
        <section id="why_us1" style="background: lightcyan;">
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
                $args = array('posts_per_page' => 4,'post_type' => 'services');
             
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
                             <?php echo get_excerpt(125); ?>
                            <hr size="20">
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

                </div><br>
                 <a href="?cat=4" class="btn know_btn" style="float: right;"><?php esc_html_e( get_theme_mod( 'about_settingmoreser1' ) ); ?></a>
            </div><br>
            
        </section><!-- Services end -->


<!-- Contact form -->
<section id="contact_form">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2><?php esc_html_e( get_theme_mod( 'about_settingform1' ) ); ?></h2>
                        <h2 class="second_heading"><?php esc_html_e( get_theme_mod( 'about_settingform2' ) ); ?></h2>
                    </div>

                    
                   <?php echo do_shortcode( '[contact-form-7 id="103" title="Contact form 1"]');
                   ?>
                   
                        
                </div>
            </div>
        </section><!-- Contact form end -->
    






<?php
//get_sidebar();
get_footer();



