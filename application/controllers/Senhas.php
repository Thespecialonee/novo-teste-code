<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Senhas extends CI_Controller
{
	public function mostra($id)
	{
		$this->load->model("senhas_model");
		$senha = $this->senhas_model->busca($id);

		$dados = array("senha" => $senha);
		$this->load->view("senhas/mostra", $dados);
	}

	public function index()
	{
		$this->load->model("senhas_model");
		$senhas = $this->senhas_model->buscaTodos();


		$dados = array("senhas" => $senhas);
		$this->load->view("senhas/index.php", $dados);
	}

	public function formulario()
	{
		$this->load->view("senhas/formulario");
	}

	public function novo()
	{
		$this->form_validation->set_rules("nome", "nome", "required|min_length[5]");
		$this->form_validation->set_rules("senha", "senha", "required");
		$this->form_validation->set_rules("descricao", "descricao", "trim|required|min_length[10]");
		$this->form_validation->set_error_delimiters("<p class='alert alert-danger'>","</p>");

		$sucesso = $this->form_validation->run();
		if ($sucesso) {
			$usuarioLogado = $this->session->userdata("usuario_logado");
			$senha = array(
			"passwords_user" => $this->input->post("nome"),
			"passwords_password" => $this->input->post("senha"),
			"description" => $this->input->post("descricao"),
			"user_id" => $usuarioLogado["id"],
			"data_de_insercao" =>dataPtBrMysql($this->input->post("data"))
			);
			$this->load->model("senhas_model");
			$this->senhas_model->salva($senha);
			$this->session->set_flashdata("success", "Senha salva com sucesso");
			redirect("/");
		} else {
			$this->load->view("senhas/formulario");
		}

	}

}
