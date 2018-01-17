$(document).ready(function() {
   
    $("#home a:contains('Home')").parent().addClass('active');
    $("#quem-somos a:contains('Quem Somos')").parent().addClass('active');
    $("#produtos a:contains('Produtos')").parent().addClass('active');
    $("#impermeabilizacao a:contains('Impermeabilização')").parent().addClass('active');
    $("#contato a:contains('Contato')").parent().addClass('active');

});

$(document).ready(function() {
    $(".fancybox-thumb").fancybox({
        prevEffect  : 'none',
        nextEffect  : 'none',
        helpers : {
            title   : {
                type: 'outside'
            },
            thumbs  : {
                width   : 50,
                height  : 50
            }
        }
    });
});