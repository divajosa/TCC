<?php
require_once("../util/Conexao.php");
include_once "../servlet/filterLogin.php";
include_once("../dao/ResponsavelDAO");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Detector de queda/Cadastro Responsável</title>
	<link href='http://fonts.googleapis.com/css?family=Istok+Web:400,700' rel='stylesheet' type='text/css' />
	

	<link href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
	<script src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../Resources/css/estilo.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>

<style>

@import url('https://fonts.googleapis.com/css?family=Numans');
html,body{
	/*background-image: url('../Resources/img/foto6.png');*/
	background-repeat: no-repeat;
}

</style>
<body>
	<?php
    include_once "template/header.php";
  	?>
<form method="POST" action="../servlet/Cadastro_Responsavel.php"> 
	<div class="container-fluid">
		<div>
			<h2 style="margin-left: 450px;">CADASTRO DO RESPONSÁVEL</h2>
		</div>
		<br>

		<div id="main" class="container-fluid" style="padding-right: 2px; padding-left: 2px; width: 999px; height: 700px !important;">
			<div class="retangulo endResp" style="height: 580px;  margin-top: 25px;">
				
					<div class="container">
						<h3>Dados Pessoais</h3>            

						<div class="form row">
							<div class="form-group col-md-4">
								<label for="nome">*Nome</label>
								<input type="text" id="nome" name="nome" minlength="2" class="form-control" required>
							</div>

							<div class="form-group col-md-5">
								<label for="sobrenome">*Sobrenome</label>
								<input type="text" name="sobrenome" id="sobrenome" class="form-control" placeholder=" ">
							</div>

							<div class="form-group col-md-2">
								<label for="dtNasc">Data Nascimento</label>
								<div class='input-group date' style= "width: 200px;" id='dtNasc'>
									<input type="date" id="dtNasc" name="dtNasc" class="form-control" style="height: 28px; padding-top: 1px;padding-bottom: 1px;">
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div>

							<script type="text/javascript">
								$(function () {
									$('#datetimepicker1').datetimepicker();
								});
							</script>

							<div class="form-group col-md-3">
								<label for="cpf">*CPF</label>
								<input type="number" name = "cpf" maxlength="14" class="form-control" id="cpf" placeholder="somente número">
								<span class='msg-erro msg-cpf'></span>
							</div>

					
							<div class="form-group col-md-6">
								<label for="email">*Email</label>
								<input type="text" id="email" name="email" class="form-control" id="email" placeholder=" ">
							</div>

							<div class="form-group col-md-3">
								<label for="senha">*Senha</label>
								<input type="password" name="senha" class="form-control" style= "width: 200px;" id="senha" placeholder=" ">
							</div>
						</div>
					</div>


					<div>
						<div class="container">
							<h3>Dados Cadastrais</h3>

							<div class="form-group row" style="padding-right: 2px; padding-left: 2px;padding-right: 2px;padding-left: 2px; width: 978px; height: 325px;margin-right: 5px; margin-bottom: 5px;padding-right: 2px; padding-left: -50px; border-left-width: 2px; margin-left: -20;">
								<div class="form-group col-md-5">
									<label for="endereco">Endereço</label>
									<input type="text" id="endereco" name="endereco" class="form-control" placeholder="rua, av, pass etc... ">
								</div>

								<div class="form-group col-md-2">
									<label for="numero">*Número</label>
									<input type="number" id="numero" name="numero" class="form-control" id="numero" placeholder=" ">
								</div>

								<div class="form-group col-md-2">
									<label for="complemento">Complemento</label>
									<input type="text" id="complemento" name="complemento"  class="form-control" id="complemento" placeholder="apto ">
								</div>

								<div class="form-group col-md-3">
									<label for="bairro">*Bairro</label>
									<input type="text" id="bairro" name="bairro"  class="form-control" id="bairro" placeholder=" ">
								</div>

								<div class="form-group col-md-7">
									<label for="cidade">*Cidade</label>
									<input type="text" id="cidade" name="cidade"  class="form-control" id="cidade">
								</div>

								<div class="form-group col-md-2">
									<label for="estado">*Estado</label>
									<select id="estado" id="estado" name="estado" class="form-control" style="font-size: 12px; padding-top: 1px;padding-bottom: 1px;">
										<option selected>Escolher...</option>
										<option  selected value=" ">
											<option value=AC>AC</option> 
											<option value=AL>AL</option> 
											<option value=AP>AP</option>
											<option value=AM>AM</option> 
											<option value=BA>BA</option> 
											<option value=CE>CE</option> 
											<option value=DF>DF</option> 
											<option value=ES>ES</option> 
											<option value=GO>GO</option>
											<option value=MA>MA</option>
											<option value=MT>MT</option> 
											<option value=MS>MS</option>
											<option value=MG>MG</option>
											<option value=PA>PA</option> 
											<option value=PB>PB</option>
											<option value=PR>PR</option> 
											<option value=PE>PE</option> 
											<option value=PI>PI</option> 
											<option value=RJ>RJ</option> 
											<option value=RN>RN</option> 
											<option value=RS>RS</option>
											<option value=RO>RO</option> 
											<option value=RR>RR</option> 
											<option value=SC>SC</option> 
											<option value=SP>SP</option> 
											<option value=SE>SE</option> 
											<option value=TO>TO</option>
										</option>
									</select>
								</div>

								<div class="form-group col-md-3">
									<label for="cep">*CEP</label>
									<input type="number" id="cep" name="cep" class="form-control" id="cep">
								</div>

								<script>
							        var cep = '01234-050';

							        function isValidCEP(srt){
							        var regex = /\d{5}-\d{3}/gi;
							            return regex.test(str);
							        }
       							</script>

								<div class="form-group col-md-4">
									<label for="celular1">*Celular</label>
									<input type="number" id="celular" name="celular" class="form-control" id="celular1" placeholder=" ">
								</div>

								<!--<div class="form-group col-md-4">
									<label for="celular2">Celular 2</label>
									<input type="number" class="form-control" id="celular2" placeholder=" ">
								</div>-->

								<div class="form-group col-md-4">
									<label for="telefone">Telefone</label>
									<input type="number" id="telefone" name="telefone" class="form-control" id="telefone" placeholder=" ">
								</div>

								<div class="form-group col-md-12">
									<div class="form-group">
										<label for="observacao">Observação</label>
										<textarea type="observacao" name="observacao" class="form-control" id="observacao" rows="3" placeholder=" " required/></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div>
					<p style="color: #ffffff; margin-top: 55px; margin-left: 20px;">* Campos com preenchimento obrigatório</p>
				</div>
				<div class="container" style="margin-left: 0px; margin-top: 70px; margin-bottom: 80px;">
					
					<div class="col-md-4">
						<input type="submit" name="Salvar" class="btn btn-primary active" style="background-color: #5532A3 !important; border: 1px solid #442881; margin-top: -25% !important; />

					</div>

					<!--<div class="col-md-4" style="margin-left: 145px; margin-top: -6% !important; margin-bottom: 0px; margin-left: 10%">
						<p class="button-style"><a href="Cadastro_Idoso.php">Cadastrar Idoso</a></p>
					</div>-->
				</div>
		</div>
	</div>
</div>

</form>

	<?php
    include_once "template/footer.php";
    ?>
  </div>
  <script src="../Resources/assets/js/plugins/sweetalert2.js"></script>
  <script src="../Resources/js/Cadastro_Responsavel.js"></script>

</body>
</html>