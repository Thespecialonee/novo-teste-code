<html lang="en">
<head>
	<link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
</head>
<body>
<div class="container">
	<h1>Cadastro de nova Senha</h1>
<?php
echo form_open("Senhas/novo");

echo form_label("Usuario", "nome");
echo form_input(array(
	"name" => "nome",
	"class" => "form-control",
	"id" => "nome",
	"maxlength" => "255",
	"value" => set_value("nome", "")
));
echo form_error("nome");

echo form_label("Senha", "senha");
echo form_password(array(
	"name" => "senha",
	"class" => "form-control",
	"id" => "senha",
	"maxlength" => "255"
));
echo form_error("senha");

echo form_label("Descricao", "descricao");
echo form_textarea(array(
	"name" => "descricao",
	"class" => "form-control",
	"id" => "descricao",
	"value" => set_value("descricao", "")
));
echo form_error("descricao");

echo form_button(array(
	"class" => "btn btn-primary",
	"content" => "Cadastrar",
	"type" => "submit"
));


echo form_close();
?>
</div>
</body>
</html>
