<html>
<head>
	<link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
</head>
<body>
<div class="container">
	Usuario: <?= html_escape($senha["passwords_user"])?><br/>
	Senha: <?= html_escape($senha["passwords_password"])?><br/>
	Descricao: <?= auto_typography(html_escape($senha["description"]))?>
	Data de insercao: <?= html_escape($senha["data_de_insercao"])?></br>

	<?= anchor('senhas/index', 'Voltar') ?>
</div>
</body>
</html>
