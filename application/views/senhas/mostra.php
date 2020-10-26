
	Usuario: <?= html_escape($senha["passwords_user"])?><br/>
	Senha: <?= html_escape($senha["passwords_password"])?><br/>
	Descricao: <?= auto_typography(html_escape($senha["description"]))?>
	Data de insercao: <?= html_escape($senha["data_de_insercao"])?></br>

	<?= anchor('senhas/index', 'Voltar', array("class" => "btn btn-primary")) ?>
