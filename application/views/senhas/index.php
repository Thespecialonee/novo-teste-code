<html lang="en">
<head>
	<link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
</head>
<body>
	<div class="container">

		<?php if ($this->session->flashdata("success")) : ?>
		<p class="alert alert-success"><?= $this->session->flashdata("success") ?>
		<?php endif; ?>

		<?php if ($this->session->flashdata("danger")) : ?>
		<p class="alert alert-danger"><?= $this->session->flashdata("danger") ?>
		<?php endif; ?>


		<?php if ($this->session->userdata("usuario_logado")) : ?>
			<h1>Senhas</h1>
		<table class="table">
			<?php foreach ($senhas as $senha) : ?>
				<tr>
					<td><?= anchor("senhas/{$senha['id']}", html_escape($senha["passwords_user"]))?> </td>
					<td><?= html_escape($senha["passwords_password"])?></td>
					<td><?= character_limiter(html_escape($senha["description"]), 10)?></td>
					<td><?= html_escape($senha["user_id"])?></td>
					<td><?= html_escape($senha["data_de_insercao"])?></td>
				</tr>
			<?php endforeach; ?>
		</table>
		<?= anchor('senhas/formulario', 'Nova senha', array("class" => "btn btn-primary")) ?>
			<?= anchor('login/logout', 'Logout', array("class" => "btn btn-primary")) ?>

		<?php else : ?>

		<h1>Login</h1>
		<?php
		echo form_open("Login/autenticar");

		echo form_label("Email", "email");
		echo form_input(array(
			"name" => "email",
			"id" => "email",
			"class" => "form-control",
			"maxlength" => "255"
		));

		echo form_label("Senha", "senha");
		echo form_password(array(
				"name" => "senha",
				"id" => "senha",
				"class" => "form-control",
				"maxlength" => "255"
		));

		echo form_button(array(
			"class" => "btn btn-primary",
			"content" => "Login",
			"type" => "submit"
		));

		echo form_close();
		?>

		<h1>Cadastro</h1>
		<?php
		echo form_open("Usuarios/novo");

		echo form_label("Nome", "nome");
		echo form_input(array(
			"name" => "nome",
			"id" => "nome",
			"class" => "form-control",
			"maxlength" => "255",
			"value" => set_value("nome", "")
		));
		echo form_error("nome");

		echo form_label("Email", "email");
		echo form_input(array(
			"name" => "email",
			"id" => "email",
			"class" => "form-control",
			"maxlength" => "255",
			"value" => set_value("email", "")
		));
		echo form_error("email");

		echo form_label("Senha", "senha");
		echo form_password(array(
			"name" => "senha",
			"id" => "senha",
			"class" => "form-control",
			"maxlength" => "255",
			"value" => set_value("senha", "")
		));
		echo form_error("senha");

		echo form_button(array(
			"class" => "btn btn-primary",
			"content" => "Cadastrar",
			"type" => "submit"
		));

		echo form_close();
		?>

		<?php endif; ?>
	</div>
</body>
</html>
