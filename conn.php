<?php
		session_start();

		$link = mysqli_connect('localhost', 'root', 'toor', 'teste');
		if (!$link) {
			die('Não foi possível conectar: ' . mysqli_connect());
		}
		echo 'Conexão bem sucedida';

		mysqli_connect($link);
?>