<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller
{
	public function autenticar()
	{
		$this->load->model("usuarios_model");
		$user_email = $this->input->post("email");
		$user_password = md5($this->input->post("senha"));
		$usuario = $this->usuarios_model->buscaPorEmailSenha($user_email, $user_password);

		if ($usuario) {
			$this->session->set_userdata("usuario_logado", $usuario);
			$this->session->set_flashdata("success", "Logado com sucesso");
		} else {
			$this->session->set_flashdata("danger", "Usuario ou senha incorreta");
		}
		redirect('/');

	}

	public function logout()
	{
		$this->session->unset_userdata("usuario_logado");
		$this->session->set_flashdata("success", "Deslogado com sucesso");
		redirect('/');
	}

	
}
