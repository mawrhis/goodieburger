(function($) {
$('#toggle').toggle( 
    function() {
        $('#popout').animate({ left: 0 }, 'slow', function() {
            $('#toggle').html('<img src="http://localhost/goodieburger/wp-content/themes/goodieburger/img/burger.svg" alt="close" />');
        });
    }, 
    function() {
        $('#popout').animate({ left: -250 }, 'slow', function() {
            $('#toggle').html('<img src="http://localhost/goodieburger/wp-content/themes/goodieburger/img/burger.svg" alt="close" />');
        });
    }
);
})(jQuery);

