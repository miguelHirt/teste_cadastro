<html>
<?php session_start(); ?>

<head>
	<meta charset="UTF-8" />
	<title>teste BD</title>
</head>
<style>
	div {
		display: inline-block;
		width: 300px;
	}

	input {
		display: block;
		width: 300px;
	}

	input[type=text] {
		display: block;
		border: 1px solid black;
		width: 300px
	}
</style>

<body>
	<form name="contato" action="retorno.php" method="POST">
		<div>
			<label>Nome</label>
			<input type="text" name="nome" placeholder="nome">

			<label>CPF</label>
			<input type="text" name="cpf" placeholder="CPF">

			<label>E-mail</label>
			<input type="text" name="email" placeholder="E-mail">

			<label>Telefone para contato</label>
			<input type="text" name="fone" placeholder="Telefone para contato">

			<label>Estado Civil</label>
			<input type="text" name="estado" placeholder="Estado civil">

			<label>CEP</label>
			<input type="text" name="cep" placeholder="CEP">

			<label>Municipio</label>
			<input type="text" name="municipio" placeholder="Municipio">

			<label>Estado</label>
			<input type="text" name="estado2" placeholder="Estado">

			<label>Bairro</label>
			<input type="text" name="bairro" placeholder="Bairro">

			<label>Rua</label>
			<input type="text" name="rua" placeholder="Rua">

			<label>Número</label>
			<input type="text" name="numero" placeholder="Número">

			<label>Complemento</label>
			<input type="text" name="complemento" placeholder="Complemento">

			<label>Observações</label>
			<textarea type="text" name="observacao" placeholder="Campo para outras Informações" style="width: 300px; height: 50px;"></textarea>
			<hr>
			<input type="submit" name="enviar" value="Enviar" onClick="window.open('/retorno.php','_self');">

			<br>
			<INPUT type="reset" name="limpar" value="Cancelar">

		</div>
	</form>
	<?php
	if (isset($_SESSION['msg'])) {
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
	?>
</body>
</html>