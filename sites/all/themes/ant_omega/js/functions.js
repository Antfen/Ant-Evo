

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


 // ANT's JS sandbox


  jQuery(document).ready(function() {
      jQuery("p").css("color", "red");

      });

      jQuery("p").click(function(){
          jQuery("p").fadeOut(1000);

  });



  //==============================