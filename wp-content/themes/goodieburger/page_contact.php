<?php
/*
Template Name: Kontakt
*/
?>

<?php  get_header(); ?>

<main>
    <div class="main_inner">
        <div class="inner_left">
            <div class="speciality">
                <h2><?php echo get_post_meta( get_the_ID(), 'adresa', true);  ?></h2>        
                <h3><?php echo get_post_meta( get_the_ID(), 'otevírací doba', true);  ?></h3>
                <p><?php echo get_post_meta( get_the_ID(), 'kontakty', true);  ?></p>
                </div>
            <div class="about_us">
                <div class="line"></div>
                <h1>My a naše burgery</h1>
                <p>Krátký text o nás a našich burgerech, z čeho jsou vyrobeny, proč to děláme atd. Plakal jo uhlím noční. Jo že inu téhož němé dobeš předtuchy. Zachovat kdy-bych nu mělkou bučí válí s zaječí </p>
            </div>
            </div>
        </div>
        <div class="inner_right">
                <div class="newsfeed">
                    <div class="line"></div>                    
                    <h1>Aktuality</h1>
                        <div class="newsfeed_fb">
                        <div class="fb-page" data-href="https://www.facebook.com/Goodie-Burger-364204630596330/?fref=ts" data-tabs="timeline" data-small-header="false" data-width="500px" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Goodie-Burger-364204630596330/?fref=ts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Goodie-Burger-364204630596330/?fref=ts">Goodie Burger</a></blockquote></div>
                        </div>

                <div class="payments">
                    <div class="line"></div>                    
                    <h1> 


                        <?php

                              $custom_fields = get_post_custom(get_the_ID());
                              $my_custom_field = $custom_fields['Platba platební kartou'];
                              foreach ( $my_custom_field as $value ) {
                                echo $value . " => " . $value . "<br />";
                              }

                            ?>



                    </h1>
                    </div>

                </div>
            </div>
        </div>
        <br>
    </div>
</main>


<?php  get_footer(); ?>