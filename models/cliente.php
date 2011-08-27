<?php

App::import('Lib', 'Localized.BrValidation'); 

class Cliente extends AppModel {
	var $name = 'Cliente';
	var $useDbConfig = 'localhost';
	var $belongsTo = array(
		'Empresa' 		=> array(
			'className'		=> 'Empresa',
			'foreignKey'	=> 'empresa_id',
			'conditions'	=> '',
			'fields'		=> '',
			'order'			=> ''
		)	
	);
	
	var $validate = array(
		'empresa_id' 			=> array(
			'valida_empresa_id'			=> array(
				'rule'						=> array('notEmpty'),
				'message'					=> 'A clínica não foi selecionada!'
			)
		),
		'nome'					=> array(
			'valida_nome' 				=> array(
				'rule'						=> array('notEmpty'),
				'message'					=> 'O nome não pode ficar em branco!'
			)
		),
		'sobrenome'				=> array(
			'valida_sobrenome'			=> array(
				'rule'						=> array('notEmpty'),
				'message'					=> 'O sobrenome não pode ficar em branco!'
			)
		),
		'sexo'					=> array(
			'valida_sexo'				=> array(
				'rule'						=> array('notEmpty'),
				'message'					=> 'Escolha um sexo para o cliente!'
			)
		),
		'cpf'					=> array(
			'val_cpf_branco'			=> array(
				'rule'						=> array('notEmpty'),
				'message'					=> 'O CPF não pode ficar em branco!'
			),
			'val_cpf_invalido'			=> array(
				'rule'						=> array('ssn', null, 'br'),
				'message'					=> 'CPF inválido!'												
			)
		),
		'rg'					=> array(
			'valida_rg_branco'			=> array(
				'rule'						=> array('notEmpty'),
				'message'					=> 'O RG não pode ficar em branco!'
			)
		),
		'data_nascimento'		=> array(
			'valida_data'				=> array(
				'rule'						=> array('date'),
				'message'					=> 'A data informada é inválida!'
			)
		),
		'local_trabalho'		=> array(
			'valida_local_trabalho'		=> array(
				'rule'						=> array('notEmpty'),
				'message'					=> 'O local de trabalho não foi informado!'
			)
		),
		'telefone'				=> array(
			'valida_telefone'			=> array(
				'rule'						=> array('phone', null, 'br'),
				'message'					=> 'O telefone informado é inválido!'
			)
		),
		'celular'				=> array(
			'valida_celular'			=> array(
				'rule'						=> array('phone', null, 'br'),
				'message'					=> 'O celular informado não é válido!'
			)
		),
		/*'indicacao'				=> array(
			'valida_indicacao'			=> array(
				'rule'						=> array('notEmpty'),
				'message'					=> 'A indicação não foi informada!'
			)
		)*/
	);	
	
}

?>
