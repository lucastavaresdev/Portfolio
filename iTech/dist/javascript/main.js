var $doc = $('html, body');

$('a').click(function () {
    $doc.animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
    return false;
});


window.onscroll = function () {
    myFunction()
};


function myFunction() {
    var resolucao = window.innerWidth;

    if (document.body.scrollTop > resolucao / 4 || document.documentElement.scrollTop > 200) {
        document.getElementById("a").className = "navbar fixed-top navbar-expand-lg navbar-light topo toponovo";
    } else {
        document.getElementById("a").className = "navbar fixed-top navbar-expand-lg navbar-light topo";
    }
}


//animações

//verifica se a pagina tem javacript
var root = document.documentElement;
root.className += ' js';


function boxTop(idBox) {
  var boxOffset = $(idBox).offset().top;
  return boxOffset;
}

$(document).ready(function() {
  var $target = $('.anime'),
      animationClass = 'animated  bounceInRight',
      windowHeight = $(window).height(),
      offset = windowHeight - (windowHeight / 4);

  function animeScroll() {
    var documentTop = $(document).scrollTop();
    $target.each(function() {
      if (documentTop > boxTop(this) - offset) {
        $(this).addClass(animationClass);
      } else {
        $(this).removeClass(animationClass);
      }
    });
  }

  animeScroll();

  $(document).scroll(function() {
    animeScroll();
  });
});