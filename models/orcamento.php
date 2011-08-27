<?php

class Orcamento extends AppModel {
	var $name = 'Orcamento';
	var $useDbConfig = 'localhost';
	
	var $belongsTo = array(
		/*'Servico'	=> array(
			'className'	 => 'Servico',
			'foreingKey' => 'servico_id',
			'condition'  => '',
			'fields'	 => '',
			'order'		 => ''
		),*/
		'Cliente'	=> array(
			'className'  => 'Cliente',
			'foreingKey' => 'cliente_id',
			'condition'	 => '',
			'fields'	 => '',
			'order'		 => ''
		),
		'FormaPagamento' => array(
			'className'	 => 'FormaPagamento',
			'foreingKey' => 'forma_pagamento_id',
			'condition'	 => '',
			'fields'	 => '',
			'order'		 => ''
		)
	);
	
	var $validade = array(
		'servico_id' => array(
			'val_servico_id'			=> array(
				'rule'			=> array('notEmpty'),
				'required'		=> true,
			 	'message'		=> 'Selecione o serviço para cadastro!'
			)
		),
		'cliente_id' => array(
			'val_cliente_id'			=> array(
				'rule'			=> array('notEmpty'),
				'required'		=> true,
				'message'		=> 'Selecione um cliente!'
			)
		),
		'status' => array(
			'val_status'				=> array(
				'rule'			=> array('notEmpty'),
				'required'		=> true,
				'on'			=> 'update',
				'message'		=> 'Qual o status deste orcamento? Fechado, em aberto? Identifique!'
			)
		),
		'forma_pagamento_id' => array(
			'val_forma_pgto'			=> array(
				'rule'			=> array('notEmpty'),
				'required'		=> true,
				'message'		=> 'Selecione a forma de pagamento a ser utilizada!'
			)
		),
	);	
}

?>