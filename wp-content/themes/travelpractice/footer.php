<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Travel_Practice
 */

?>
<!-- Footer -->
<footer>
            <!-- Footer top -->
            <div class="container footer_top">
                <div class="row">
                    <div class="col-lg-4 col-sm-7">
                        <div class="footer_item">
                            <h4><?php esc_html_e( get_theme_mod( 'about_settingfooaboutus1' ) ); ?></h4>
                            
                            <p><?php esc_html_e( get_theme_mod( 'about_settingfooaboutus2' ) ); ?></p>


                            <?php dynamic_sidebar( 'foosocial-1' ); ?> 

                         
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-5">
                        <div class="footer_item">
                            <h4><?php esc_html_e( get_theme_mod( 'about_settingfoomenu1' ) ); ?></h4>
                            <ul id="abc" class="list-unstyled footer_menu">
                                
                                <?php
                                                    wp_nav_menu( array(
                            'theme_location'  => 'menu-2',
                            
                        ) );    ?>  
                  
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-7">
                        <div class="footer_item" style="color:white;">                    
                            
                                 <?php dynamic_sidebar( 'rposts-1' ); ?> 
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-5">
                        <div class="footer_item">
                            <h4><?php esc_html_e( get_theme_mod( 'about_settingfoocon1' ) ); ?></h4>
                            <ul class="list-unstyled footer_contact">
                                <li><span class="fa fa-map-marker"></span> <?php esc_html_e( get_theme_mod( 'about_settingfoocon2' ) ); ?></li>
                                <li><span class="fa fa-envelope"></span> <?php esc_html_e( get_theme_mod( 'about_settingfoocon3' ) ); ?></li>
                                <li><span class="fa fa-mobile"></span><p><?php esc_html_e( get_theme_mod( 'about_settingfoocon4' ) ); ?><br /><?php esc_html_e( get_theme_mod( 'about_settingfoocon5' ) ); ?></p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- Footer top end -->

            <!-- Footer bottom -->
            <div class="footer_bottom text-center">
                <p class="wow fadeInRight">
                    <?php esc_html_e( get_theme_mod( 'about_settingcopy1' ) ); ?>
                    <i class="fa fa-heart"></i>
                    <?php esc_html_e( get_theme_mod( 'about_settingcopy2' ) ); ?> 
                    <a target="_blank" href="http://bootstrapthemes.co"><?php esc_html_e( get_theme_mod( 'about_settingcopy3' ) ); ?></a> &copy; <?php the_date('Y');?>
                    <?php esc_html_e( get_theme_mod( 'about_settingcopy4' ) ); ?>
                </p>
            </div><!-- Footer bottom end -->
        </footer><!-- Footer end -->

        <!-- JavaScript -->
        <script src="<?php echo get_template_directory_uri();?>/js/jquery-1.12.1.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>

        <!-- Bootsnav js -->
        <script src="<?php echo get_template_directory_uri();?>/js/bootsnav.js"></script>

        <!-- JS Implementing Plugins -->
        <script src="<?php echo get_template_directory_uri();?>/js/isotope.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/isotope-active.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/jquery.fancybox.js?v=2.1.5"></script>

        <script src="<?php echo get_template_directory_uri();?>/js/jquery.scrollUp.min.js"></script>

        <script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
    

<?php //wp_footer(); ?>

</body>
</html>
