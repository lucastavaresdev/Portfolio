chamadaAjax(`php/selectsJson.php?parametro=lista_total`, lista_de_pacientes);



function lista_de_pacientes(data) {
    console.log(data);
    var tbody = document.getElementById("listadePacientes");
    if (tbody) {
        for (i = 0; i < data.length; i++) {
            var tr = document.createElement('tr');

            if(data[i].hora.length === 4){
                hora = `0${data[i].hora}`;
            }else{
                hora = data[i].hora
            }

      

            var cols =
                '<td>' + data[i].sala + '</td>'
                + '<td>' + hora + '</td>'
                + '<td>' + data[i].nm_paciente + '</td>'
                + '<td>' + data[i].Cirurgia + '</td>'
                + '<td>' + data[i].Cirurgiao + '</td>'
                + '<td>' + data[i].Anestesista + '</td>'
                + '<td>' + data[i].convenio + '</td>'
                + '<td> - </td>'

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

