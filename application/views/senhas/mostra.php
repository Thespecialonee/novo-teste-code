<html>
<head>
	<link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
</head>
<body>
<div class="container">
	Usuario: <?= html_escape($senha["passwords_user"])?><br/>
	Senha: <?= html_escape($senha["passwords_password"])?><br/>
	<?= auto_typography(html_escape($senha["description"]))?>
</div>
</body>
</html>
