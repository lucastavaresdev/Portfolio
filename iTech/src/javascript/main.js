var $doc = $('html, body');

$('a').click(function() {
    $doc.animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
    return false;
});


window.onscroll = function() {myFunction()};


function myFunction() {
    var resolucao  = window.innerWidth;

    if (document.body.scrollTop > resolucao / 4|| document.documentElement.scrollTop > 200) {
        document.getElementById("a").className = "navbar fixed-top navbar-expand-lg navbar-light topo toponovo";
    } else {
        document.getElementById("a").className = "navbar fixed-top navbar-expand-lg navbar-light topo";
    }
}

