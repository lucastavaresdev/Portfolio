SELECT exs.codigo_servico as id, s.servico as setor ,count(distinct(a.nome_paciente)) as agendamento_do_dia, count(a.nome_paciente) as exames FROM agendamento as a
INNER JOIN exame_servico as exs on a.codigo_exame = exs.codigo_exame
inner join servicos as s on exs.codigo_servico = s.id
where STR_TO_DATE(data_servico_atual, '%d/%m/%Y') =  CURDATE() group by(exs.codigo_servico);