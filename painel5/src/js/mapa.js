chamadaAjax(`php/selectsJson.php?parametro=lista_total`, lista_de_pacientes);



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

