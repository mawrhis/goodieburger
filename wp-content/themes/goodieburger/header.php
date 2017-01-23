<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage goodieburger
 * @since goodieburger 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <title><?php wp_title(); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400i|Roboto|Roboto+Condensed:700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">  
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">  
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/cs_CZ/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<header>
        <div id="menu">
    <nav>

                    <div id="toggle">
                    <img src="http://localhost/goodieburger/wp-content/themes/goodieburger/img/burger.svg" alt="Show" /></div>
                    <div id="popout">
                            <div class="buttons">
                                <?php wp_nav_menu(); ?>
                            </div>
                    </div>


    </nav>
            </div>
    <a href="<?php $url = home_url();echo esc_url( $url );?>"><div class="logo"></div></a>

</header>