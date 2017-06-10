

//Set the home page top image (know has 'parallax-box') to the height of the view port

  jQuery(document).ready(function() {
    function setHeight() {
      windowHeight = jQuery(window).innerHeight();
      jQuery('.parallax-box').css('min-height', windowHeight);
    };
    setHeight();
    
    jQuery(window).resize(function() {
      setHeight();
    });
  });


  //alert("Hello! Window height has loaded");

//==============================

// Hide the Main menu until the user begins to scroll!

  (function($) {          
    jQuery(document).ready(function(){                    
        jQuery(window).scroll(function(){                          
            if ($(this).scrollTop() > 200) {//Fade menu out once we've scrolled past the 100px mark from the top of the page, other wise fade back out!
                $('.l-header').fadeIn(500);
            } else {
                $('.l-header').fadeOut(500);
            }
        });
    });
})(jQuery);