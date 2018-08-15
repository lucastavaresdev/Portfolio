//chamadas 

// chamadaAjax(`php/selectsJson.php?parametro=grid`, lista_de_pacientes);
setInterval(function () {
    chamadaAjax(`php/selectsJson.php?parametro=grid`, lista_de_pacientes);
}, 1000)

// reiniciar()
// function reiniciar() {
//     const btn = document.getElementById('reiniciar');

//     btn.addEventListener('click', function () {
//         chamadaAjax(`php/selectsJson.php?parametro=grid`, lista_de_pacientes);

//     })
// }


/*
 * -------------------------Agenda de Pacientes--------------------------------------cancel
 */

function lista_de_pacientes(data) {
    var html = "";

    for (i = 0; i < data.length; i++) {
        html +=
            '<tr>' +
            '<td>' + data[i].NM_PACIENTE + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Acuidade_Visual) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Análises_Clínicas) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Análises_Clinicas_10_andar) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Análises_Clínicas_11_andar) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Audiometria) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Cardiológica) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Clinico_Geral) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Composição_Corporal_Dobras_Cutaneas) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_de_Equilibrio) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Dermatológica) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_do_Sono) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Física) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Fisiológica_Laboratorial_Ergoespiro) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Fisioterápica) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Gastro_Procto) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Ginecológica) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Médica_Clinica_Geral_e_Esforço) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Mental_Care) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Neuromuscular) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Nutricional) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Odontológica) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Oftalmológica) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Otorrinolaringologia) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Pediatrica) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Avaliacao_Psicossocial) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Urologica) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Bioimpedanciometria) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Colpocitologia) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Colposcopia) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Complemento_Mamografia) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Densitometria_Óssea) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Ecocardiograma) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Eletrocardiograma) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Eletroencefalograma) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Endoscopia_Colonoscopia) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Mamografia) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Micológico) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Orientação_Fisioterapica) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Peso_e_Altura) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Polissonografia) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Pressao_Arterial) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Prova_de_Função_Pulmonar) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Raio_X) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Teste_Ergométrico) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Tomografia) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].ULTRASSONOGRAFIA) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Ultrassonografia_Abdomen) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Ultrassonografia_Aparelho_Urinário) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Ultrassonografia_Doppler) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Ultrassonografia_Mamas) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Ultrassonografia_Pelvica) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Ultrassonografia_Próstata) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Ultrassonografia_Tireoide) + '</td>' +
            '<td class="gridStatus">' + iconedeStatus(data[i].Ultrassonografia_Transvaginal) + '</td>' +
            '</tr>';
    }
    document.getElementById("grid").innerHTML = html;

    data_table(data)
}


function iconedeStatus(coluna) {

    switch (coluna) {
        case "Em Andamento":
            coluna = '<i class="material-icons green-text ">linear_scale</i>';
            break;
        case "Aguardando":
            coluna = '<i class="material-icons yellow-text accent-4">warning</i>';
            break;
        case "Cancelado":
            coluna = '<i class="material-icons red-text darken-2">pan_tool</i>';
            break;
        case "Concluído":
            coluna = '<i class="material-icons   blue-text darken-1">thumb_up</i>';
            break;
        default:
            coluna = '<i class="material-icons grey-text lighten-4" >do_not_disturb_alt</i>';
    }
    return coluna;
}


/*
 * -------------------------Muda de Letra para paravra--------------------------------------
*/


function MasculinoouFeminino(sexo) {
    if (sexo === "F") {
        return sexo = "Feminino"
    } else {
        return sexo = "Masculino"
    }
}


/*
 * -----------Inicializando o puglin dataTables----------------------
*/

function data_table(d) {

    $(document).ready(function () {
        var table = $('#tabela_pacientes').DataTable({

            // //destroy: true,
            // paging: false,
            // searching: false,
            // fixedColumns: {
            //     leftColumns: 1,
            // },
            // "sScrollY": "100%",
            // "scrollX": "100%",
            // "ScrollCollapse": true,
            retrieve: true,
            paging: false,
            searching: false,
            scrollY: "500px",
            scrollX: true,
            scrollCollapse: true,

            fixedColumns: {
                leftColumns: 1,
            },
            "language": {
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
            },
        });
    });



}




/*
 * -----------Responsavel pelo dropdown de mais informações da tabela----------------------
*/


/*
* -----------Total de Agendamento por Setor---------------------
*/


function atribuiHtml(classouid, resultado) {
    classouid.innerHTML = resultado;
}

