<?php

class FormaPagamento extends AppModel {
	var $name = 'FormaPagamento';
	var $useDbConfig = 'localhost';
	
	var $validate = array(
		'descricao' => array(
			'valida_desc'					=> array(
				'rule'    		=> array('notEmpty'),
				'required'		=> true,
				'message' 		=> 'Forneça uma descrição para a forma de pagamento!'
			)
		)		
	);
}