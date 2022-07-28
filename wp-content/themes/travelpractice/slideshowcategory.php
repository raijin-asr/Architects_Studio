

<section id="home" class="home">
            <!-- Carousel -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <?php
                // Example argument that defines three posts per page.
                $args = array('posts_per_page' => 4,'post_type' => 'slideshow');
             
                // Variable to call WP_Query.
                $the_query = new WP_Query( $args );
             
                if ( $the_query->have_posts() ) :
                // Start the Loop
                while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
                <!-- Carousel-inner -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/slider_img.jpg" alt="Construction">
                        <div class="overlay">
                            <div class="carousel-caption">
                                <h3>We are Certified Engineers</h3>
                                <h1>Construction Services</h1>
                                <h1 class="second_heading">Creative & Professional</h1>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                                <a  class="btn know_btn">know more</a>
                                <a  class="btn know_btn">view project</a>
                            </div>                  
                        </div>
                    </div>




                    
           
                    <div class="item">
                        <img src="images/slider_img2.jpg" alt="Construction">
                        <div class="overlay">
                            <div class="carousel-caption">
                                <?php the_content();?>
                                <a   href="<?php the_permalink();?>" class="btn know_btn">know more</a>
                            </div>                  
                        </div>
                    </div>
                     </div><!-- Carousel-inner end -->


                     <?php
                          // End the Loop
                    endwhile;
                        else:
                    // If no posts match this query, output this text.
                    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
                endif;
                wp_reset_postdata();?>
                 
                    
               


                <!-- Controls -->
                <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div><!-- Carousel end-->

        </section>


