SELECT count(hora_servico_selecionado) as maior_periodo
FROM agendamento where STR_TO_DATE(data_servico_atual, '%d/%m/%Y') =  CURDATE()
and TIME(hora_servico_selecionado) BETWEEN time('9:00:00') AND TIME('9:59:00'); 


SELECT * FROM hcor.agendamento;


//lista de intervalos
SELECT  CONCAT(HOUR(hora_servico_selecionado), ':00-', HOUR(hora_servico_selecionado)+1, ':00')  intervalo_de_horas, COUNT(*) as `usage`
FROM agendamento
where STR_TO_DATE(data_servico_atual, '%d/%m/%Y') =  CURDATE()
GROUP BY HOUR(hora_servico_selecionado)



SELECT  CONCAT(HOUR(hora_servico_selecionado), ':00-', HOUR(hora_servico_selecionado)+1, ':00')  intervalo_de_horas, COUNT(*) as `usage`
FROM agendamento
where STR_TO_DATE(data_servico_atual, '%d/%m/%Y') =  CURDATE()
GROUP BY HOUR(hora_servico_selecionado)