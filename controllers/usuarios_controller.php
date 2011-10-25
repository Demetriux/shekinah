<?php
class UsuariosController extends AppController {

	var $name = 'Usuarios';
	
	var $scaffold;
	
	/*
	function index()
	{
		$this->set("title_for_layout", "Usuários.");
	}
	
	function novo()
	{
		$this->set("title_for_layout", "Cadastro de Usuários.");
		
		if(!empty($this->data))
		{
			if($this->Usuario->save($this->data))
			{
				$this->Session->setFlash("Usuário cadastrado!");
				$this->redirect(array("action" => "novo"));
			}
		}
	}
	
	function editar($id = null)
	{
		$this->set("title_for_layout", "Alteração de Usuário.");
		
		$this->Usuario->id = $id;
		
		if(empty($this->data))
		{
			$this->data = $this->Usuario->find('all');
		}
		else
		{
			if($this->Usuario->save($this->data))
			{
				$this->Session->setFlash("Usuário alterado!");
				$this->redirect(array("action" => "index"));
			}
		}
	}
	
	function excluir($id)
	{
		if($this->Usuario->delete($id))
		{
			$this->Session->setFlash("Usuário excluído!");
			$this->redirect(array("action" => "index"));
		}
	}
*/
}
