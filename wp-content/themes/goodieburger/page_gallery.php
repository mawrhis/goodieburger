<?php
/*
Template Name: Galerie
*/
?>
<?php  get_header(); ?>
<main>
    <div class="main_inner">
</div>         
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                        the_content();
                        endwhile; else: ?>
                        <p>Sorry, no posts matched your criteria.</p>
                        <?php endif; ?>                     
        </div>

</div> <!-- main inner -->

</main>


<?php get_footer(); ?>