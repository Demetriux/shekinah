<?php

class ClientesController extends AppController {
	var $name = 'Clientes';
	
	function index()
	{
		$this->set("title_for_layout", "Clientes.");		
	}
	
	function novo()
	{
		$this->set("title_for_layout", "Cadastrando um novo Cliente.");
		
		if(!empty($this->data))
		{
			if($this->Cliente->save($this->data))
			{
				$this->Session->setFlash("Cliente cadastrado com sucesso!");
				$this->redirect(array("array" => "index"));
			}
		}
	}
	
	function editar($id = null)
	{
		$this->set("title_for_layout", "Editando Cliente.");
		
		$this->Cliente->id = $id;
		
		if(!empty($this->data))
		{
			$this->data = $this->Cliente->read();
		}
		else
		{
			if($this->Cliente->save($this->data))
			{
				$this->Session->setFlash("O cliente foi alterado com sucesso!");
				$this->redirect(array("action" => "index"));
			}
		}
	}
	
	function excluir($id)
	{
		if($this->Cliente->delete($id))
		{
			$this->Session->setFlash("O Cliente foi excluído!");
			$this->redirect(array("action" => "index"));
		}
	}
}

?>