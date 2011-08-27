<?php

class PlanoDeConta extends AppModel {
	var $name = 'PlanoDeConta';
	var $useDbConfig = 'localhost';
	var $useTable = 'plano_de_contas';
	
	var $validate = array(
		'descricao' => array(
			'valida_desc'				=> array(
				'rule'			=> array('notempty'),
				'required'		=> true,
				'message'		=> 'Forneça uma descrição para a conta!'
			)
		),
		'ativa' => array(
			'valida_ativa'				=> array(
				'rule'			=> array('notEmpty'),
				'required'		=> true,
				'message'		=> 'Selecione um valor para o campo "Ativa"!'
			)
		),
		'saldo_anterior' => array(
			'valida_saldo_anterior'		=> array(
				'rule'			=> array('money', 'left'),
				'required'		=> true,
				'message'		=> 'Forneça um valor válido!'
			)
		),
	);
}

?>