<?php
/*
Template Name: Kontakt
*/
?>

<?php  get_header(); ?>

<main>
    <div class="main_inner">
        <div class="inner_left">
            <div class="speciality" id="contact_box">

            <div class="adress">
                    <img  alt="adress" class="contact_image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/pin.svg">
                <h2><?php dynamic_sidebar( 'footer_kontakty_adresa' ); ?></h2> 
            </div> 
            <div class="hours"> 
                <img  alt="opening hours" class="contact_image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/hour.svg">      
                <h3><?php dynamic_sidebar( 'footer_kontakty_doba' ); ?></h3>
            </div>
            <div class="contact">
                <img alt="contact" class="contact_image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/contact.svg">
                <h2><?php dynamic_sidebar( 'footer_kontakty' ); ?></h2>
            </div>
                </div>
            <div class="about_us">
                <div class="line"></div>
                <h1><?php 
                        echo rwmb_meta( 'info_nadpis' );
                        ?></h1>
                <p><?php 
                        echo rwmb_meta( 'info' );
                        ?>  </p>
            </div>
            </div>
             <div class="inner_right">
                <div class="newsfeed">
                    <div class="line"></div>                    
                    <h1>Kde nás najdete</h1>

                    <div class="map"><?php echo do_shortcode('[google_maps id="76"]'); ?></div>

                <div class="payments">
                    <div class="line"></div>                    
                    <h1> <?php 
                        echo rwmb_meta( 'doprava_nadpis' );
                        ?>
                    </h1>
                    <p><?php 
                        echo rwmb_meta( 'doprava' );
                        ?>                    
                    </p>
                    </div>

                </div>
            </div>
        </div>

</main>


<?php  get_footer(); ?>