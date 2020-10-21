<?php


class usuarios_model extends CI_Model
{
	public function salva($usuario)
	{
		$this->db->insert("users", $usuario);
	}

	public function buscaPorEmailSenha($email, $senha)
	{
		$this->db->where("user_email", $email);
		$this->db->where("user_password", $senha);
		$usuario = $this->db->get("users")->row_array();
		return $usuario;
	}

}
