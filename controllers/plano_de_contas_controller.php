<?php

class PlanoDeContasController extends AppController {
	var $name = 'PlanoDeContas';
	
	function index()
	{
		$this->set("title_for_layout", "Plano de Contas.");
		
	}
	
	function novo()
	{
		$this->set("title_for_layout", "Cadastro de Plano de Contas.");
		
		if(!empty($this->data))
		{
			if($this->PlanoDeConta->save($this->data))
			{
				$this->Session->setFlash("Conta cadastrada!");
				$this->redirect(array("action" => "novo"));
			}			
		}
	}
	
	function editar($id = null)
	{
		$this->set("title_for_layout", "Alteraçào de Conta...");
		
		$this->PlanoDeConta->id = $id;
		
		if(empty($this->data))
		{
			$this->data = $this->PlanoDeConta->find('all');
		}
		else
		{
			if($this->PlanoDeConta->save($this->data))
			{
				$this->Session->setFlash("Conta alterada!");
				$this->redirect(array("action" => "index"));
			}
		}
	}
	
	function excluir($id)
	{
		if($this->PlanoDeConta->delete($id))
		{
			$this->Session->setFlash("Conta excluída!");
			$this->redirect(array("action" => "index"));
		}
	}
}

?>