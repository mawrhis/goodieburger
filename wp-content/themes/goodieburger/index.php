<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage goodieburger
 * @since goodieburger 1.0
 */
  get_header(); ?>

<main>
    <div class="main_inner">
        <div class="inner_left">
            <div class="slideshow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/burger.jpg"></div>
            <div class="about_us">
                <div class="line"></div>
                <h1>My a naše burgery</h1>
                <p>Krátký text o nás a našich burgerech, z čeho jsou vyrobeny, proč to děláme atd. Plakal jo uhlím noční. Jo že inu téhož němé dobeš předtuchy. Zachovat kdy-bych nu mělkou bučí válí s zaječí </p>
            </div>
        </div>
        <div class="inner_right">
            <div class="speciality">

                <div class="stamp"></div>
                    <h2>Specialita Týdne</h2>        
                    <div class="speciality_line"></div>
                <h3>Burger takový a makový s tou a tou přílohou</h3>
                <p>poznámky k jídlu, například detailnější ingredience, cibulka, sýr cheddar, feferonka</p>
                <div class="price">128kč</div>
                    
                </div>
                <div class="newsfeed">
                    <div class="line"></div>                    
                    <h1>Aktuality</h1>
                        <div class="fb-page" data-href="https://www.facebook.com/Goodie-Burger-364204630596330/?fref=ts" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Goodie-Burger-364204630596330/?fref=ts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Goodie-Burger-364204630596330/?fref=ts">Goodie Burger</a></blockquote></div>
                </div>
            </div>
        </div>

</main>

<?php get_footer(); ?>