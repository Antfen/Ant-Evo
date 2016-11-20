var pContainerHeight = $('.parallax-box').height();

$(window).scroll(function(){

  var wScroll = $(this).scrollTop();

  if (wScroll <= pContainerHeight) {

    $('.parallax-logo').css({
      'transform' : 'translate(0px, '+ wScroll /2 +'%)'
    });

    $('.parallax-logo-shadow').css({
      'transform' : 'translate(0px, '+ wScroll /4 +'%)'
    });

    /*$('.parallax-fore').css({
      'transform' : 'translate(0px, -'+ wScroll /40 +'%)'
    });*/

  }

});
