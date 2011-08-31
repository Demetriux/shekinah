<?php

class TipoLancamento extends AppModel {
	var $name = 'TipoLancamento';
	var $useDbConfig = 'localhost';
	var $useTable = 'tipo_lancamentos';
	
	var $validate = array(
		'descricao'					=> array(
			'val_desc'			=> array(
				'rule'		=> array('notEmpty'),
				'message'	=> 'Informe uma Descrição para o tipo de lançamento!'
			),
		),
	);
}

?>