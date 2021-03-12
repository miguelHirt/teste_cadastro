<?php
	include_once("conn.php");

	session_start();

	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
    	$fone = $_POST['fone'];
	$estado = $_POST['estado'];
	$cep = $_POST['cep'];
    	$estado2 = $_POST['estado2'];
	$municipio = $_POST['municipio'];
	$bairro = $_POST['bairro'];
    	$rua = $_POST['rua'];
	$numero = $_POST['numero'];
	$complemento = $_POST['complemento'];
    	$observacao = $_POST['observacao'];
	
	$result = "INSERT INTO cadastro (nome, cpf,email,fone,estado,cep,estado2,municipio,bairro,rua,numero,complemento,observacao) VALUES ('$nome','$cpf','$email','$fone','$estado','$cep','$estado2','$municipio','$bairro','$rua','$numero','$complemento','$observacao')";
	$resultado = mysqli_query($link, $result);

	if($resultado){
	$_SESSION['msg'] = "<p style='color: green;'>Cadastro efetuado!</p>";
	
	}else{
	$_SESSION['msg'] = "<p style='color: red;'>Cadastro não efetuado!</p>";
	}
	header("Location: index.php");
	?>
