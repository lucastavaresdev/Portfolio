var ctx = document.getElementById("graficoPacientes");	
	
var myChart = new Chart(ctx, {	
    type: 'doughnut',	
    data: {	
        labels: ["Aguardando", "Em Atendimento", "Indisponivel", "Finalizado"],	
        datasets: [{	
            //label: '# of Votes',	
            data: [12, 19, 3, 3],	
            backgroundColor: [	
                'rgba(22, 159, 133, 1)',	
                'rgba(42, 128, 185, 1)',	
                'rgba(143, 68, 173, 1)',	
                'rgba(86, 86, 86, 1)',	
	
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
            position: 'right'	
       }	
    }	
});