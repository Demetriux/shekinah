<?php

class FormaPagamento extends AppModel {
	var $name = 'FormaPagamento';
	var $useDbConfig = 'localhost';
	var $validate = array(
		'descricao' => array(
			'rule'    => array('notempty'),
			'message' => 'Por favor forneça uma descricão para a forma de pagamento!'
		)		
	);
}