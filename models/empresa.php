<?php

class Empresa extends AppModel {
	var $name = 'Empresa';
	var $useDbConfig = 'localhost';
	var $validate = array(
		'cnpj' => array(
			'rule' 	  => array('notempty'),
			'message' => 'Por favor, insira o cnpj!'
		),
		'nome' => array(
			'rule'    => array('notempty'),
			'message' => 'Por favor, insira um nome!'
		),
		/*'nome_fantasia' => array(
			'rule'    => array('notempty'),
			'message' => 'Por favor, insira um nome!',
		),*/
		'logradouro'  => array(
			'rule' 	  => array('notempty'),
			'message' => 'Por favor, preencha o logradouro!'
		),
		'endereco'  => array(
			'rule' 	  => array('notempty'),
			'message' => 'Por favor, insira um endereco válido!'
		),
		'numero' => array(
			'rule'	  => array('notempty'),
			'message' => 'Por favor, informe um número!'
		)
	);
}
	