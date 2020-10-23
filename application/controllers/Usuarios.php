<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Usuarios extends CI_Controller
{
	public function novo()
	{
		$this->form_validation->set_rules("nome", "nome", "required|min_length[5]");
		$this->form_validation->set_rules("senha", "senha", "required");
		$this->form_validation->set_rules("email", "email", "trim|required|min_length[10]");
		$this->form_validation->set_error_delimiters("<p class='alert alert-danger'>","</p>");

		$sucesso = $this->form_validation->run();
		if ($sucesso) {
			$usuarios = array(
				"user_name" => $this->input->post("nome"),
				"user_email" => $this->input->post("email"),
				"user_password" => md5($this->input->post("senha"))
			);

			$this->load->model("usuarios_model");
			$this->usuarios_model->salva($usuarios);
			$this->session->set_flashdata("success", "Cadastro realizado com sucesso");
			redirect("/");
		} else {
			$this->session->set_flashdata("danger", "Nao foi possivel realizar o cadastro");
			$this->load->view("senhas/index");
		}
	}

}