SELECT * FROM hcor.servicos;
SELECT * FROM hcor.agendamento;

SELECT distinct(nome_paciente) , data_servico_atual
FROM agendamento where STR_TO_DATE(data_servico_atual, '%d/%m/%Y') =  CURDATE();