(function () {
    var url_atual = window.location.href;

    var parametrosDaUrl = url_atual.split("?")[1];

    chamadaAjax(`php/selectsJson.php?parametro=lista_do_setor&${parametrosDaUrl}`, lista_de_pacientes);

    chamadaAjax(`php/selectsJson.php?parametro=lista_do_setor&${parametrosDaUrl}`, cards_notificação);
})();



function lista_de_pacientes(data) {
    var tbody = document.getElementById("listadePacientesagendamento");
    if (tbody) {
        for (i = 0; i < data.length; i++) {
            var tr = document.createElement('tr');

            var cols =
                '<td>' + data[i].hora + '</td>' +
                '<td>' + data[i].atividade + '</td>'

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