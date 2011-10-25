<?php

class TipoLancamentosController extends AppController {
	var $name = 'TipoLancamentos';
	
	function index()
	{
		$this->set("title_for_layout", "Tipos de Lançamentos.");
	}
	
	function novo()
	{
		$this->set("title_for_layout", "Cadastro de tipos de Lançamentos.");
		
		if(!empty($this->data))
		{
			if($this->TipoLancamento->save($this->data))
			{
				$this->Session->setFlash("Tipo de Lançamento cadastrado!");
				$this->redirect(array("action" => "novo"));
			}
		}
	}
	
	function editar($id = null)
	{
		$this->set("title_for_layout", "Alteração de Tipo de Lançamento.");
		
		$this->TipoLancamento->id = $id;
		
		if(empty($this->data))
		{
			$this->data = $this->TipoLancamento->find('all');
		}
		else
		{
			if($this->TipoLancamento->save($id))
			{
				$this->Session->setFlash("Tipo de Lançamento alterado!");
				$this->redirect(array("action" => "index"));
			}
		}
	}
	
	function excluir($id)
	{
		if($ithis->TipoLancamento->delete($id))
		{
			$this->Session->setFlash("Tipo de Lançamento excluído!");
			$this->redirect(array("action" => "index"));
		}
	}
}

?>