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
                    <img class="contact_image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/pin.svg">
                <h2><?php 
                $adress = rwmb_meta( 'adress' ); 
                echo implode(', ', $adress); 
                ?></h2> 
            </div> 
            <div class="hours"> 
                <img class="contact_image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/hour.svg">      
                <h3><?php 
                $hours = rwmb_meta( 'hours' ); 
                echo implode('<br>  ', $hours); 
                ?></h3>
            </div>
            <div class="contact">
                <img class="contact_image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/contact.svg">
                <h2><?php 
                $contact = rwmb_meta( 'contact' ); 
                echo implode('<br> ', $contact); 
                ?></h2>
            </div>
                </div>
            <div class="about_us">
                <div class="line"></div>
                <h1>My a naše burgery</h1>
                <p>Krátký text o nás a našich burgerech, z čeho jsou vyrobeny, proč to děláme atd. Plakal jo uhlím noční. Jo že inu téhož němé dobeš předtuchy. Zachovat kdy-bych nu mělkou bučí válí s zaječí </p>
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

        </div>
        <br>
    </div>
</main>


<?php  get_footer(); ?>