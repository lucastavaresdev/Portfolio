







var cards = document.getElementsByClassName("card");





var cores = function () {
    //divs que irao alterar
    linha = this.querySelector('.fita');
    icones = this.querySelector('.icones')
    titulo_setor = this.querySelector('.titulo-setor')

    escolha = 'roxo';

    if (escolha) {
        linha.classList.add(escolha);
        icones.classList.add(escolha);
        titulo_setor.classList.add(escolha + '-c');
    }
};

for (var i = 0; i < cards.length; i++) {
    cards[i].addEventListener('dblclick', cores, false);
}











// (function() {


//     var card = document.querySelectorAll(".");

//     card.addEventListener("dblclick", function (e) {
//         alert(e.target.class);
//     });

// })();







