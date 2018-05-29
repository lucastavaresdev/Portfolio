var ctx = document.getElementById("graficoPacientes");
var ctx = document.getElementById("graficoPacientes").getContext("2d");
var ctx = $("#graficoPacientes");
var ctx = "graficoPacientes";

var ctx = document.getElementById("graficoPacientes");
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["Aguardando", "Em Atendimento", "Indisponivel", "Finalizado"],
        datasets: [{
            //label: '# of Votes',
            data: [12, 19, 3,3],
            backgroundColor: [
                'rgba(22, 159, 133, 0.2)',
                'rgba(42, 128, 185, 0.2)',
                'rgba(143, 68, 173, 0.2)',
                'rgba(86, 86, 86, 0.2)',

            ],
            borderColor: [
                'rgba(22, 159, 133, 1)',
                'rgba(42, 128, 185, 1)',
                'rgba(143, 68, 173, 1)',
                'rgba(86, 86, 86, 1)',
            ],
            borderWidth: 1
        }]
    },
});
