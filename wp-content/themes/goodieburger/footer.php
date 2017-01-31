<footer>
<div class="footer_contact">





  			<div class="adress">
                    <img alt="adress" class="contact_image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/pin.svg">
                <?php dynamic_sidebar( 'footer_kontakty_adresa' ); ?>
            </div> 
            <div class="hours"> 
                <img alt="opening hours" class="contact_image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/hour.svg">      
                <?php dynamic_sidebar( 'footer_kontakty_doba' ); ?>
            </div>
            <div class="contact">
                <img alt="contact" class="contact_image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/contact.svg">
                <?php dynamic_sidebar( 'footer_kontakty' ); ?>
            </div>




</div>
<div class="shadow"></div>
<div class="map"><a href="https://goo.gl/maps/bgkx7up4cw82" ><?php echo do_shortcode('[google_maps id="76"]'); ?><span></span></a></div>

<div class="shadow"></div>
<div id="author">with &#x263A; by <a href="http://www.jiriprihoda.com">jiriprihoda.com</a></div>

<?php wp_footer(); ?>
</footer>
</body>
</html>