<?php

class Lancamento extends AppModel {
	var $name = 'Lancamento';
	var $useDbConfig = 'localhost';
	
	var $validate = array(
		'tipo_lancamento_id' => array(
			'tip_lanc_id_blank'			=> array(
				'rule'			=> array('notEmpty'),
				'required'		=> true,
				'message'		=> 'Tipo de Lancamento não informado!'
			)
		),
		'descricao' => array(
			'valida_descricao'			=> array(
				'rule'			=> array('notEmpty'),
				'required'		=> true,
				'message'		=> 'Descricao não pode ficar em branco!'
			)
		),
		'tratamento_parcela_id' => array(
			'val_trat_parc_id'			=> array(
				'rule'			=> array('notEmpty'),
				'required'		=> true,
				'message'		=> 'A parcela não foi selecionada!'
			)
		),
		'plano_de_conta_id' => array(
			'val_plano_contas_id'		=> array(
				'rule'			=> array('notEmpty'),
				'required'		=> true,
				'message'		=> 'Informe uma conta do plano de contas!'
			)
		),
		'valor' => array(
			'val_valor_empty'				=> array(
				'rule'			=> array('notEmpty'),
				'required'		=> true,
				'message'		=> 'O valor deve ser forneceido!'
			),
			'val_valor_moeda'				=> array(
				'rule'			=> array('money', 'left'),
				'required'		=> true,
				'message'		=> 'Informe um valor monetário!'
			)
		),
	);
}