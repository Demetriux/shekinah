<?php

class FormaPagamento extends AppModel {
	var $name = 'FormaPagamento';
	var $useDbConfig = 'localhost';
	var $validate = array(
		'descricao' => array(
			'rule'    => array('notempty'),
			'message' => 'Por favor forne�a uma descric�o para a forma de pagamento!'
		)		
	);
}