var pContainerHeight = $('.parallax-box').height();

$(window).scroll(function(){

  var wScroll = $(this).scrollTop();

  if (wScroll <= pContainerHeight) {

    $('.parallax-logo').css({
      'transform' : 'translate(0px, '+ wScroll /2 +'%)'
    });

    $('.parallax-logo-shadow').css({
      'transform' : 'translate(0px, '+ wScroll /2 +'%)'
    });

    /*$('.parallax-fore').css({
      'transform' : 'translate(0px, -'+ wScroll /40 +'%)'
    });*/

  }

 // alert("Hello! I am an alert box no2!!");

});


