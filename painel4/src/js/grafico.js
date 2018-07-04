chamadaAjax('php/selectsJson.php?parametro=qtdstatus', exibir);



function exibir(data) {
    arrNomesStatus = [];
    arrQuantidadeStatus = [];
    for (let i = 0; i < data.length; i++) {
        arrNomesStatus.push(data[i]['status']);
        arrQuantidadeStatus.push(data[i]['qtdStatus']);
    }

    var ctx = document.getElementById("graficoPacientes");

//o ideial é a cor vir do banco de dados
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: arrNomesStatus,
            datasets: [{
                //label: '# of Votes',	
                data: arrQuantidadeStatus,
                backgroundColor: [
                    'rgba(22, 159, 133, 1)',
                    'rgba(42, 128, 185, 1)',
                    'rgba(86, 86, 86, 1)',
                    'rgba(143, 68, 173, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Atendimento de Pacientes',
            },
            legend: {
                position: 'bottom',
                fullWidth: false,
                labels: {
                    fontSize: 12,
                    boxWidth: 15
                }
            },
            layout: {
                responsive: true
            }
        }
    });


}