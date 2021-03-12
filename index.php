<html>
	
	<style>
		div {
			display: inline-block;
    		width: 300px;
				
		}
		input{
			display: inline-block;
    		width: 300px;
			
		}
		input[type=text]{ 
			display: inline-block;
			border: 1px solid black;
			width:300px
		}
	
	</style>
	<head>
	<meta charset = "UTF-8"/>
	<title>teste BD</title>
	</head>
	<body>
	
	<form name="contato" action="retorno.php" method="POST">
				<div>
                  <label>Nome</label>
                  <input type="text" name="nome" placeholder="nome"  >
				  
				  <br>
                  <label>CPF</label>
					<input  type="text" name="cpf" placeholder="CPF" >
                
                  <label>E-mail</label>
				  <input  type="text" name="email" placeholder="E-mail">
               
                  <label>Estado Civil</label>
				  <input  type="text" name="estado" placeholder="estado" >
					<hr>
                  <label>CEP</label>
				  <input  type="text" name="cep" placeholder="CEP" >
                
                  <label>Estado</label>
				  <input  type="text" name="estado2" placeholder="Estado" >

				  <label>Bairro</label>
				  <input  type="text" name="bairro" placeholder="Bairro" >

				  <label>Rua</label>
				  <input  type="text" name="rua" placeholder="Rua" >

				  <label>Número</label>
				  <input  type="text" name="numero" placeholder="Número" >

				  <label>Complemento</label>
				  <input  type="text" name="complemento" placeholder="Complemento" >
					<hr>
					<label>Observações</label>
				  <input  type="text" name="observacoes" placeholder="Campo para outras informaões" >
					<br>
					<br>
					
					<input type="submit" name="enviar" value="Enviar" onClick="window.open('/retorno.php','_self');">
				  
				  
  				<br>
				</div>
				</form>
	</body>
	<div>
	
	
</html>