<?php

class LancamentosController extends AppController {
	var $name = 'Lancamentos';
	
	function index()
	{
		$this->set("title_for_layout", "Lançamentos.");
	}
	
	function novo()
	{
		$this->set("title_for_layout", "Lançamentos...");
		
		if(!empty($this->data))
		{
			if($this->Lancamento->save($this->data))
			{
				$this->Session->setFlash("Lançamento concluído!");
				$this->redirect(array("action" => "novo"));
			}
		}
	}
	
	function editar($id = null)
	{
		$this->set("title_for_layout", "Alteração de Lançamentos...");
		
		$this->Lancamento->id = $id;
		
		if(empty($this->data))
		{
			$this->data = $this->Lancamento->find('all');
		} 
		else
		{
			if($this->Lancamento->save($this->data))
			{
				$this->Session->setFlash("Lançamento alterado!");
				$this->redirect(array("action" => "index"));
			}
		}
	}
	
	function excluir($id)
	{
		if($this->Lancamento->delete($id))
		{
			$this->Session->setFlash("Lançamento excluído!");
			$this->redirect(array("action" => "index"));
		}
	}
}

?>