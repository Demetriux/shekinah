<?php

class FormaPagamentosController extends AppController {
	var $name = 'FormaPagamentos';
	
	function index()
	{
		$this->set("title_for_layout", "Formas de pagamento.");
	}
	
	function novo()
	{
		$this->set("title_for_layout", "Cadastrando uma nova Forma de Pagamento.");
		
		if(!empty($this->data))
		{
			if($this->FormaPagamento->save($this->data))
			{
				$this->Session->setFlash("A Forma de Pagamento foi salva com sucesso!");
				$this->redirect(array("action" => "index"));
			}
		}
	}
	
	function editar($id = null)
	{
		$this->set("title_for_layout", "Editando Forma de Pagamento.");
		
		$this->FormaPagmento->id = $id;
		
		if(empty($this->data))
		{
			$this->data = $this->FormaPagamento->find('all');
		}
		else
		{
			if($this->FormaPagamento->save($this->data))
			{
				$this->Session->setFlash("Forma de Pagamento alterada com sucesso!");
				$this->redirect(array("action" => "index"));
			}
		}
	}
	
	function excluir($id)
	{
		if($this->FormaPagamento->delete($id))
		{
			$this->Session->setFlash("Forma de Pagamento excluída!");
			$this->redirect(array("action" => "index"));
		}		
	}
}
	