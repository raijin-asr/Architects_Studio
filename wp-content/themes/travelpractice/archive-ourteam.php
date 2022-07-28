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

<center><h2>Our Team</h2></center>
<br>

<div class="row">
	 <?php
                // Example argument that defines three posts per page.
                $args = array('posts_per_page' => 4,'post_type' => 'ourteam');
             
                // Variable to call WP_Query.
                $the_query = new WP_Query( $args );
             
                if ( $the_query->have_posts() ) :
                // Start the Loop
                while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>

  <div class="column">
    <div class="ourteam-content">
      <img src="<?php echo get_the_post_thumbnail_url();?>" alt="Our Team" style="width:100%; border-radius:50%; height:270px;">
      <div class="container">
        <center><h2><?php the_title();?></h2>
        <p class="title"><?php the_content();?></p></center>
     
        <p><button class="button">Contact</button></p>
      </div>
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




<?php
get_footer();