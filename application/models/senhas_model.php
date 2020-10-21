<?php


class senhas_model extends CI_Model
{
	public function buscaTodos()
	{
		return $this->db->get("passwords")->result_array();
	}

	public function salva($senha)
	{
		$this->db->insert("passwords", $senha);
	}

	public function busca($id)
	{
		return $this->db->get_where("passwords", array(
			"id" => $id
		))->row_array();
	}

}
