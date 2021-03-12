<?php
	include_once("conn.php");

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
	
    if (!$link) {
        die('Não foi possível conectar ao Banco de Dados');
       }

	$result_msg_contato = "INSERT INTO cadastro (nome, cpf, email,fone,estado,cep,estado2,municipio,bairoo,rua,numero,complemento,observacao) VALUES ('$nome','$cpf','$email','$fone','$estado','$cep','$estado2','$municipio','$bairro','$rua','$numero','$complemento','$observacao')";
	$resultado_msg_contato = mysqli_query($link, $result_msg_contato);
