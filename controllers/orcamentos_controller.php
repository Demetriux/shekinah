<?php

class OrcamentosController extends AppController {
	var $name = 'Orcamentos';
	
	function index()
	{
		$this->set("title_for_layout", "Orçamentos.");
	}
	
	function novo()
	{
		$this->set("title_for_layout", "Cadastro de Orçamento.");
		
		if(!empty($this->data))
		{
			if($this->Orcamento->save($this->data))
			{
				$this->Session->setFlash("Orçamento cadastrado!");
				$this->redirect(array("action" => "index"));
			}
		}
	}
	
	function editar($id = null)
	{
		$this->set("title_for_layout", "Alterar Orçamento...");
		
		$this->Orcamento->id = $id;
		
		if(empty($this->data))
		{
			$this->data = $this->Orcamento->find('all');
		}
		else
		{
			if($this->Orcamento->save($this->data))
			{
				$this->Session->setFlash("Orçamento alterado!");
				$this->redirect(array("action" => "index"));
			}
		}
	}
	
	function excluir($id)
	{
		if($this->Orcamento->delete($id))
		{
			$this->Session->setFlash("Orçamento excluído!");
			$this->redirect(array("action" => "index"));			
		}
	}
}

?>