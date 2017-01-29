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
    <title><?php get_bloginfo(). wp_title(); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400i|Roboto|Roboto+Condensed:700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">  
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">  
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
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

jQuery(document).ready(function($) {
  $(window).bind("load resize", function(){  
  setTimeout(function() {
  var container_width = $('#container').width();    
    $('#container').html('<div class="fb-page" ' + 
    'data-href="http://www.facebook.com/IniciativaAutoMat"' +
    ' data-width="' + container_width + '" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="http://www.facebook.com/IniciativaAutoMat"><a href="http://www.facebook.com/IniciativaAutoMat">Auto*Mat</a></blockquote></div></div>');
    FB.XFBML.parse( );    
  }, 100);  
}); 
});


</script>

<header>
    <div id="menu">
    <div class="language">
    <ul><?php pll_the_languages();?></ul>
    </div>
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