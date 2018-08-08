//chamadas ajax



(function () {
    var url_atual = window.location.href;

    var parametrosDaUrl = url_atual.split("?")[1];


    chamadaAjax(`php/selectsJson.php?parametro=lista&${parametrosDaUrl}`, lista_de_pacientes);
    chamadaAjax(`php/selectsJson.php?parametro=total_de_pacientes&${parametrosDaUrl}`, total_de_pacientes);
})();





function total_de_pacientes(data) {
    var html = "";
    
    elem = document.getElementById('agendimentos_do_dia');
    if (elem) {
        var total_de_pacientes = data[0].total_de_pacientes;
        if (typeof total_de_pacientes === 0 || typeof total_de_pacientes === "qtd_agendamentos_do_dia") {
            console.log("verificar o json ou query nos selects.php");
        } else {
            html += '<span>' + total_de_pacientes + '</span>';
        }

        elem.innerHTML = html;
    }
}






function lista_de_pacientes(data) {
    console.log(data);
    var tbody = document.getElementById("listadePacientes");
    if (tbody) {
        for (i = 0; i < data.length; i++) {
            var tr = document.createElement('tr');

            var cols =
                '<td>' + data[i].id + '</td>'
                + '<td>' + data[i].nm_paciente + '</td>'
                + '<td>' + data[i].Hora_cirurgia + '</td>'
                + '<td>' + data[i].Cirurgia + '</td>'
                + '<td>' + data[i].Cirurgiao + '</td>'
                + '<td>' + data[i].Centro_Cirurgico + '</td>'
                + '<td>' + data[i].Observacao + '</td>'

            var linha = tr.innerHTML = cols;
            tbody.innerHTML += linha;
        }
        data_table()
    }
}

function data_table() {
    $(document).ready(function () {
        $('#tabela_pacientes').DataTable({
            language: {
                "lengthMenu": " Quantidade por Pagina _MENU_  ",
                "zeroRecords": "Não encontrado pacientes",
                "info": "Total de Pagina _PAGE_ de _PAGES_",
                "infoEmpty": " ",
                "infoFiltered": "(filtered from _MAX_ total records)",
                "search": "Filtrar:",
                "paginate": {
                    "first": " ",
                    "next": "Proxima",
                    "previous": "Anterior",
                    "last": " "
                }
            }
        });
    });
}















// (function () {
//     var url_atual = window.location.href;

//     var parametrosDaUrl = url_atual.split("?")[1];

//     chamadaAjax(`php/selectsJson.php?parametro=qtd_por_setor&${parametrosDaUrl}`, agendamentos_do_dia_por_setor);
//     chamadaAjax(`php/selectsJson.php?parametro=qtd_procedimentos&${parametrosDaUrl}`, qtd_procedimentos);
//     chamadaAjax(`php/selectsJson.php?parametro=horario_de_maior_fluxo&${parametrosDaUrl}`, horarioComMaiorPacientes);

//     chamadaAjax(`php/selectsJson.php?parametro=lista_do_setor&${parametrosDaUrl}`, lista_de_pacientes);
// })();


// function qtd_procedimentos(data){
//     var elem = document.getElementById('qtd_procedimentos');

//     var qtd_procedimentos = data[0].qtd_procedimentos;

//     elem.innerHTML = qtd_procedimentos;


// }








// function horarioComMaiorPacientes(data) {
//     var fluxodetempo = document.getElementById('fluxo');
//     var html = " ";

//     if (fluxodetempo) {
//         for (i = 0; i < data.length; i++) {
//             var j;
//             j = `<li>${data[i].intervalo_de_horas} <span> (${data[i].qtd_por_hora} pacientes)</span></li>`;
//             html += j;
//         }

//         if (data.length === 0) {
//             fluxodetempo.innerHTML = "Não ha paciente";
//             fluxodetempo.classList.add('p-msg');
//         } else if (data.length === 1) {
//             atribuiHtml(fluxodetempo, html);
//             fluxodetempo.classList.add('fluxo-1');
//         } else if (data.length === 2) {
//             atribuiHtml(fluxodetempo, html);
//             fluxodetempo.classList.add('fluxo-2');
//         } else {
//             fluxodetempo.innerHTML = "Ver Lista de Pacientes"
//             fluxodetempo.classList.add('p-msg');
//         }
//     }

// }

// function atribuiHtml(classouid, resultado) {
//     classouid.innerHTML = resultado;
// }

