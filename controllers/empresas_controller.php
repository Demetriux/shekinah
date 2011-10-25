<?php

class EmpresasController extends AppController {
	var $name = 'Empresas';
	var $scaffold;
	
	//TODO: Implementar e criar as wiews
	function index()
	{
		$this->set("title_for_layout", "Empresas.");
	}
	
	function _listarEmpresas()
	{
		$this->set("empresas", $this->Empresa->find('all'));
	}
	
	function novo()
	{
		$this->set("title_for_layout", "Cadastrando uma nova Empresa.");
		
		if(!empty($this->data))
		{
			if($this->Empresa->save($this->data))
			{
				$this->Session->setFlash("Empresa cadastrada com sucesso!");
				$this->redirect(array("action" => "index"));
			}
		}
	}
	
	function editar($id = null)
	{
		$this->set("title_for_layout", "Editando Empresa.");
		
		$this->Empresa->id = $id;
		
		if(empty($this->data))
		{
			$this->data = $this->Empresa->read();
		}
		else
		{
			if($this->Empresa->save($this->data))
			{
				$this->Session->setFlash("A Empresa foi alterada com sucesso!");
				$this->redirect(array("action" => "index"));
			}
		}
	}
	
	function excluir($id)
	{
		if($this->Empresa->delete($id))
		{
			$this->Session->setFlash("A Empresa foi excluída!");
			$this->redirect(array("action" => "index"));
		}
	}
}

?>