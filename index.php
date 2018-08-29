<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link href="css/reset.css" rel="stylesheet" type="text/css">
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script src="js/jquery.validate.min.js" type="text/javascript"></script>
		<script>
			$.validator.setDefaults({
				submitHandler: function() {
					alert("submitted!");
				}
			});

			$().ready(function() {
				// validate the comment form when it is submitted
				$("#formCadastro").validate();

				// validate signup form on keyup and submit
				$("#formCadastro").validate({
					rules: {
						nome: {
							required: true
						},
						descricao: {
							required: true
						},
						preco: {
							required: true
						}
					},
					messages: {
						nome: {
							required: "Por favor digite o nome"
						},
						descricao: {
							required: "Por favor digite a descricao"
						},
						preco: {
							required: "Por favor digite o preço"
						}
					}
				});
			};
		</script>
		</head>
		<body>
			<div class="container">
				<div class="row">
  					<div class="col-md-12">
  						<div class="productTitle">
  							Cadastro de Produtos
  						</div>
  					</div>
  				</div>

  				<div class="row">
  					<div class="col-md-12">
  						<p></p>
						<form action="insert.php" method="post" name="formCadastro" id="formCadastro">
							<div class="form-group">
								<label for="produto">Produto:</label>
								<input type="text" name="nome" id="nome" class="form-control" />
							</div>
							
							<div class="form-group">
								<label for="descricao">Descrição:</label>
								<textarea cols="20" rows="5" name="descricao" id="descricao" class="form-control" /></textarea>
							</div>

							<div class="form-group">
								<label for="preco">Preço:</label>
								<input type="text" name="preco" id="preco" class="form-control" />
							</div>

							<input type="submit" name="enviar" id="enviar" value="Enviar dados" class="btn btn-success" />
							<input type="reset" name="limpar" id="limpar" value="Limpar dados" class="btn btn-danger" />
						</form>
					</div>
				</div>
			</div>
		</body>
</html>