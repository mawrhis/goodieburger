<footer>
<div class="footer_contact">





  			<div class="adress">
                    <img class="contact_image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/pin.svg">
                <?php dynamic_sidebar( 'footer_kontakty_adresa' ); ?>
            </div> 
            <div class="hours"> 
                <img class="contact_image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/hour.svg">      
                <?php dynamic_sidebar( 'footer_kontakty_doba' ); ?>
            </div>
            <div class="contact">
                <img class="contact_image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/contact.svg">
                <?php dynamic_sidebar( 'footer_kontakty' ); ?>
            </div>




</div>
<div class="shadow"></div>
<div class="map"><?php echo do_shortcode('[google_maps id="76"]'); ?></div>

<div class="shadow"></div>
with loooove by jiriprihoda.com

<?php wp_footer(); ?>
</footer>
</body>
</html>