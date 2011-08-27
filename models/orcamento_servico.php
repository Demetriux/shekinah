<?php

class OrcamentoServico extends AppModel {
	var $name = 'OrcamentoServico';
	var $useDbConfig = 'localhost';
	var $useTable = 'orcamento_servicos';
	
	var $hasAnBelongsToMany = array(
		'Servico' => array(
			'className'		=> 'Servico',
			'forengKey'		=> 'servico_id',
			'conditions'	=> '',
			'fields'		=> '',
			'order'			=> ''
		),
		'Orcamento' => array(
			'className'		=> 'Orcamento',
			'foreingKey'	=> 'orcamento_id',
			'conditions'	=> '',
			'fields'		=> '',
			'order'			=> ''
		),
	);
	
	var $validate = array(
		'servico_id' => array(
			'valida_servico_id'			=> array(
				'rule'		=> array('notEmpty'),
				'required'	=> true,
				'message'	=> 'Selecione um serviço a ser vinculado ao orçamento!'
			)
		),
		'orcamento_id' => array(
			'valida_orcamento_id'		=> array(
				'rule'		=> array('notEmpty'),
				'required'	=> true,
				'message'	=> 'O orçamento deve ser selecionado!'
			),
		),
	);
}

?>