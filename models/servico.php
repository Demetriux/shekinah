<?php

class Servico extends AppModel {
	var $name = 'Servico';
	var $useDbConfig = 'localhost';
	
	var $validate = array(
		'descricao'	=> array(
			'valida_descricao'			=> array(
				'rule'			=> array('notEmpty'),
				'required'		=> true,
				'message'		=> 'A descrição não pode ficar em branco!'
			)
		),/*
		'observacoes' => array(
			'valida_obs'				=> array(
				'rule'			=> array('notEmpty'),
				'required'		=> true,
				'message'		=> 'A Observação não foi preenchida!'
			)
		),*/
		'valor' => array(
			'valida_valor'				=> array(
				'rule'			=> array('money', 'left'),
				'required'		=> true,
				'message'		=> 'Forneça um valor monetário!' 
			),
			'valida_valor_zero'		=> array(
				'rule'			=> array('comparison', '<=', 0),
				'required'		=> true,
				'message'		=> 'Insira um valor monetário maior que "zero"!'
			),
		),
	);
}

?>