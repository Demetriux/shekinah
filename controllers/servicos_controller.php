<?php

class ServicosController extends AppController {
	var $name = 'Servicos';
	
	function index()
	{
		$this->set("title_for_layout", "Serviços.");
	}
	
	function novo()
	{
		$this->set("title_for_layout", "Cadastro de Serviços.");
		
		if(!empty($this->data))
		{
			if($this->Servico->save($this->data))
			{
				$this->Session->setFlash("Serviço cadastrado!");
				$this->redirect(array("action" => "novo"));
			}
		}
	}
	
	function editar($id = null)
	{
		$this->set("title_for_layout", "Alteração de Serviços.");
		
		$this->Servico->id = $id;
		
		if(empty($this->data))
		{
			$this->data = $this->Servico->find('all');
		}
		else
		{
			if($this->Servico->save($this->data))
			{
				$this->Session->setFlash("Serviço alterado!");
				$this->redirect(array("action" => "index"));
			}
		}
	}
	
	function excluir($id)
	{
		if($this->servico->delete($id))
		{
			$this->Session->setFlash("Serviço excluído!");
			$this->redirect(array("action" => "index"));
		}
	}
	
}

?>