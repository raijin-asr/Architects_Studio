<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Travel_Practice
 */

?>

		<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" style="margin-top: 0px !important;"> <!--<![endif]-->
    <head>
        <?php wp_head(); ?>
        <meta charset="<?php bloginfo('charset');?>">
        <title><?php bloginfo('name');?></title>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Custom Fonts -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/custom-font/fonts.css" />
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/font-awesome.min.css" />
        <!-- Bootsnav -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootsnav.css">
        <!-- Fancybox -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/jquery.fancybox.css?v=2.1.5" media="screen" />	
        <!-- Custom stylesheet -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/custom.css" />
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->


        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <!-- Gallery lightbox -->
      <script type="text/javascript">
    jQuery(document).ready(function($) {
        var images_dir = '<?php echo get_stylesheet_directory_uri() . "/images/"; ?>';
        $('.gallery-item a').lightBox({
            imageLoading: images_dir + 'lightbox-ico-loading.gif',
            imageBtnPrev: images_dir + 'lightbox-btn-prev.gif',
            imageBtnNext: images_dir + 'lightbox-btn-next.gif',
            imageBtnClose: images_dir + 'lightbox-btn-close.gif',
            imageBlank: images_dir + 'lightbox-blank.gif'
        });
    });
</script>

       
    </head>
    <body>

        <!-- Preloader -->

        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                </div>
            </div>
        </div>

        <!--End off Preloader -->

        <!-- Header -->
        <header>
            <!-- Top Navbar -->
            <div class="top_nav">
                <div class="container">
                    <ul class="list-inline info">
                        <li><a href="?page_id=33"><span class="fa fa-phone"></span> <?php esc_html_e( get_theme_mod( 'about_settingtci1' ) ); ?>
                    </a></li>
                        <li><a href="?page_id=33"><span class="fa fa-envelope"></span> <?php esc_html_e( get_theme_mod( 'about_settingtci2' ) ); ?></a></li>
                        <li><a href="?page_id=33"><span class="fa fa-clock-o"></span> <?php esc_html_e( get_theme_mod( 'about_settingtci3' ) ); ?></a></li>
                    </ul>



                    <?php dynamic_sidebar( 'social-1' ); ?>
                    		
                </div>
            </div><!-- Top Navbar end -->

            <!-- Navbar -->
            <nav class="navbar bootsnav">

                    <div class="container">
                    <!-- Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                       <a class="navbar-brand" href="<?php bloginfo('url');?>">
                                
                                <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            if ( has_custom_logo() ) {
                                    echo '<img src="'. esc_url( $logo[0] ) .'">';
                            } else {
                                    echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
                            }?>

                            </a>
                    </div>
                    <!-- Navigation -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                         <ul class="nav navbar-nav menu">
                            <?php
                                                    wp_nav_menu( array(
                            'theme_location'  => 'menu-1',
                            'depth'           => 5, // 1 = no dropdowns, 2 = with dropdowns.
                            'container'       => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id'    => 'bs-example-navbar-collapse-1',
                            'menu_class'      => 'navbar-nav mr-auto',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        ) );	?>	
                        </ul>			
                        
                    </div>
                </div>   
            </nav><!-- Navbar end -->
        </header><!-- Header end -->


       

        


        
        
