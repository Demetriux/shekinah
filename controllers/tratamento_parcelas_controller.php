<?php

class TratamentoParcelasController extends AppController {
	var $name = 'TratamentoParcelas';
	
	function index()
	{
		$this->set("title_for_layout", "Parcelas.");
	}
	
	function novo()
	{
		$this->set("title_foi_layout", "Cadastro de Parcelas de Tratamento Odontológico.");
		
		if(!empty($this->data))
		{
			if($this->TratamentoParcela->save($this->data))
			{
				$this->Session->setFlash("Parcela cadastrada!");
				$this->redirect(array("action" => "novo"));
			}
		}
	}
	
	function editar($id = null)
	{
		$this->set("title_for_layout", "Alteração de Parcelas de Tratamento Odontológico.");
		
		$this->TratamentoParcela->id = $id;
		
		if(empty($this->data))
		{
			$this->data = $this->TratamentoParcela->find('all');
		}
		else
		{
			if($this->TratamentoParcela->save($this->data))
			{
				$this->Session->setFlash("Parcela alterada!");
				$this->redirect(array("action" => "index"));
			}
		}
	}
	
	function excluir($id)
	{
		if($this->TratamentoParcela->delete($id))
		{
			$this->Session->setFlash("Parcela excluída!");
			$this->redirect(array("action" => "index"));
		}
	}
}

?>