
jQuery(document).scroll(function() {
    var y = jQuery(this).scrollTop();
    if (y > 30) {
      jQuery('.logo').addClass('scale');
    } else {
      jQuery('.logo').removeClass('scale');
    }

  })(jQuery);

