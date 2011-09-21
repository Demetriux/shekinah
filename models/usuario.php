<?php
class Usuario extends AppModel {
	var $name = 'Usuario';
	var $useDbConfig = 'localhost';
	var $validate = array(
		'username' => array(
			'valida_username' 			=> array(
				'rule' 			=> array('notEmpty'),
				'required'		=> true,
				'message' 		=> 'Informe um nome de usuário!',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'valida_pwd' 				=> array(
				'rule' 			=> array('notEmpty'),
				'required'		=> true,
				'message' 		=> 'A senha não pode ficar em branco!',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'valida_pwd_between'		=> array(
				'rule'			=> array('between', 8, 20),
				'message'		=> 'A senha deve conter de 8 a 20 caracteres!'
			)
		),
		'email' => array(
			'valida_email' 				=> array(
				'rule' 			=> array('email'),
				'required'		=> true,
				'message' 		=> 'O e-mail informado é inválido',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'pergunta_secreta' => array(
			'valida_pergunta'			=> array(
				'rule'			=> array('notEmpty'),
				'required'		=> true,
				'message'		=> 'Insira uma pergunta para sua segurança!'
			), 
			'val_perg_lenght'			=> array(
				'rule'			=> array('maxLength', 100),
				'message'		=> 'O Campo suporta apenas 100 caracteres!'
			)
		),
		'resposta_secreta' => array(
			'valida_resp_sec'			=> array(
				'rule'			=> array('notEmpty'),
				'required'		=> true,
				'message'		=> 'A resposta deve ser fornecida para posterior recuperação!'
			)
		),
	);
}
// Fim classe Usuario