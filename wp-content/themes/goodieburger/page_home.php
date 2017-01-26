<?php
/*
Template Name: Home
*/
  get_header(); ?>

<main>
    <div class="main_inner">
        <div class="inner_left">
            <div class="slideshow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/burger.jpg"></div>
            <div class="about_us">
                <div class="line"></div>
                <h1><?php the_title(); ?></h1>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                        the_content();
                        endwhile; else: ?>
                        <p>Sorry, no posts matched your criteria.</p>
                        <?php endif; ?>
            </div>
        </div>
        <div class="inner_right">
            <div class="speciality">

                    <?php $loop = new WP_Query( array( 'post_type' => 'burger_menu', 'posts_per_page' => 1, 'category_name' => 'Weekly special' ) ); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                    <div class="stamp"></div>
                    <h2><?php the_title(); ?></h2>        
                    <div class="speciality_line"></div>
                <h3><?php echo get_the_excerpt(get_the_ID()); ?></h3>
                <p><?php the_content(); ?></p>
                <div class="price"><?php echo get_post_meta( get_the_ID(), 'cena', true);  ?></div>


               





                <?php endwhile; wp_reset_query(); ?>
                    
                </div>
                <div class="newsfeed">
                    <div class="line"></div>                    
                    <h1>Aktuality</h1>
                    <div class="newsfeed_fb">
                        <div class="fb-page" data-href="https://www.facebook.com/Goodie-Burger-364204630596330/?fref=ts" data-tabs="timeline" data-small-header="false" data-width="500px" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Goodie-Burger-364204630596330/?fref=ts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Goodie-Burger-364204630596330/?fref=ts">Goodie Burger</a></blockquote></div>
                        </div>
                </div>
            </div>
        </div>

</main>

<?php get_footer(); ?>