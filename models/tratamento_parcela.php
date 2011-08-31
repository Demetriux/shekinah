<?php

class TratamentoParcela extends AppModel {
	var $name = 'TratamentoParcela';
	var $useDbConfig = 'localhost';
	
	var $belongsTo = array(
		'Cliente' => array(
			'className'		=> 'Cliente',
			'foreignKey'	=> 'cliente_id',
			'conditions'	=> '',
			'fields'		=> '',
			'order'			=> ''
		),
		'Orcamento' => array(
			'className'		=> 'Orcamento',
			'foreignKey'	=> 'orcamento_id',
			'conditions'	=> '',
			'fields'		=> '',
			'order'			=> ''
		)
	);
	
	var $validate = array(
		'cliente_id' => array(
			'val_cliente_id'			=> array(
				'rule'			=> array('notEmpty'),
				'message'		=> 'Selecione um cliente!'
			),
		),
		'orcamento_id' => array(
			'val_orc_id'				=> array(
				'rule'			=> array('notEmpty'),
				'message'		=> 'Selecione um Orcamento!'
			)
		),
		'data_vencimento' => array(
			'val_data_venc'				=> array(
				'rule'			=> array('date'),
				'message'		=> 'Forneça uma data válida!'
			)
		),
		'valor_parcela' => array(
			'val_valor_parcela'			=> array(
				'rule'			=> array('money', 'left'),
				'message'		=> 'Insira um valor monetário!'
			),
			'val_valor_zero'			=> array(
				'rule'			=> array('comparison', '<=', 0),
				'message'		=> ''
				
			)
		),
	);
}

?>