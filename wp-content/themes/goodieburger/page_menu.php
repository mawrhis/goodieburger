<?php
/*
Template Name: Menu
*/
?>

<?php  get_header(); ?>

<main>
    <div class="main_inner">


                        
                <?php $loop = new WP_Query( array( 'post_type' => 'burger_menu', 'posts_per_page' => 10 ) ); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
               


                   <div class="burger_item">
                                        <div class="burger_image">            
                                            <?php  the_post_thumbnail();?>
                                        </div>
                                        <div class="burger_text"> 
                                                <h2><?php the_title(); ?></h2>    
                                                <div class="speciality_line"></div>
                                            <h3><?php echo get_the_excerpt(get_the_ID()); ?></h3>
                                            <p>
                                                    <div >
                                                        <?php the_content(); ?> <!-- Page Content -->
                                                    </div>

                                            </p>
                                            <div class="price"><?php echo get_post_meta( get_the_ID(), 'cena', true);  ?></div>
                                        </div>
                                    </div>



                <?php endwhile; wp_reset_query(); ?>
                                              
        <div class="drinks"> 
                <div class="line"></div>         
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                        the_content();
                        endwhile; else: ?>
                        <p>Sorry, no posts matched your criteria.</p>
                        <?php endif; ?>                     
        </div>

</div> <!-- main inner -->

</main>


<?php get_footer(); ?>