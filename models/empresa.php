<?php

App::import('Lib', 'Localized.BrValidation');

class Empresa extends AppModel {
	var $name = 'Empresa';
	var $useDbConfig = 'localhost';
	
	var $validate = array(
		'cnpj' => array(
			'valida_cnpj_branco'		=> array(
				'rule' 	  		=> array('notempty'),
				'message' 		=> 'Por favor, insira o cnpj!'
			),
			'valida_cnpj'				=> array(
				'rule'			=> array('ssn', null, 'br'),
				'message'		=> 'CNPJ inválido!'	
			),
			'valida_cnpj_qtd_char'		=> array(
				'rule'			=> array('maxLength', 14),
				'message'		=> 'Digite apenas os 14 números do CNPJ!'
			)
		),
		'nome' => array(
			'valida_nome_branco'		=> array(
				'rule'    		=> array('notempty'),
				'required'		=> true,
				'message' 		=> 'Por favor, insira um nome!'
			),
			'val_nome_between'			=> array(
				'rule'			=> array('between', 8, 75),
				'message'		=> 'O nome deve conter pelo menos 8 caracteres!'
			)
		),
		/*'nome_fantasia' => array(
			'rule'    => array('notempty'),
			'message' => 'Por favor, insira um nome!',
		),*/
		'logradouro' => array(
			'valida_lograd'				=> array(
				'rule' 	  		=> array('notEmpty'),
				'required'		=> true,
				'message' 		=> 'Por favor, preencha o logradouro!'
			)
		),
		'endereco' => array(
			'valida_end'				=> array(
				'rule' 	  		=> array('notEmpty'),
				'required'		=> true,
				'message' 		=> 'Por favor, insira um endereco válido!'
			)
		),
		'numero' => array(
			'valida_num'				=> array(
				'rule'	  		=> array('notEmpty'),
				'required'		=> true,
				'message' 		=> 'Por favor, informe um número!'
			)
		),
		/*'complemento' => array(
			'valida_complemento'		=> array(
				'rule'			=> array(),
				'message'		=> ''
			)
		),*/
		'bairro' => array(
			'valida_bairro'				=> array(
				'rule'			=> array('notEmpty'),
				'required'		=> true,
				'message'		=> 'Informe o bairro!'
			)
		),
		'cidade' => array(
			'valida_cidade'				=> array(
				'rule'			=> array('notEmpty'),
				'required'		=> true,
				'message'		=> 'A cidade não foi informada!'
			)
		),
		'uf' => array(
			'valida_uf'					=> array(
				'rule'			=> array('notEmpty'),
				'required'		=> true,
				'message'		=> 'Informe a Unidade Federativa (UF)!'
			)
		),
		'telefone' => array(
			'valida_tel'				=> array(
				'rule'			=> array('phone', null, 'br'),
				'required'		=> true,
				'message'		=> 'Informe um telefone válido!'
			)
		),
		'email' => array(
			'valida_email'				=> array(
				'rule'			=> array('email'),
				'required'		=> false,
				'message'		=> 'O E-mail informado é inválido!'
			)
		),
		'website' => array(
			'valida_website'			=> array(
				'rule'			=> array('url'),
				'required'		=> false,
				'message'		=> 'O site informado é inválido!'
			)
		)
	);
}
	