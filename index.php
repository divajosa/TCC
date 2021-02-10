<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Detector de queda/Pagina de Login</title>
	<link href='http://fonts.googleapis.com/css?family=Istok+Web:400,700' rel='stylesheet' type='text/css' />
	<link href="Resources/css/default.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="Resources/css/estilo.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>


<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
	background-image: url('Resources/img/foto2.png');
	background-color: linear-gradient;
	background-repeat: no-repeat;
	height: 78%;
	font-family: 'Numans', sans-serif;
	background-size: cover;
}

.container{
	height: 100%;
	align-content: center;
}

.card{
	height: 370px;
	margin-top: auto;
	margin-bottom: auto;
	width: 400px;
	background-color: rgba(0,0,0,0.5) !important;
	margin-right: 600px;
}

.social_icon span{
	font-size: 60px;
	margin-left: 10px;
	color: #FFC312;
}

.social_icon span:hover{
	color: white;
	cursor: pointer;
}

.card-header h3{
	color: white;
}

.social_icon{
	position: absolute;
	right: 20px;
	top: -45px;
}

.input-group-prepend span{
	width: 50px;
	background-color: #FFC312;
	color: black;
	border:0 !important;
}

input:focus{
	outline: 0 0 0 0  !important;
	box-shadow: 0 0 0 0 !important;
}

.remember{
	color: white;
}

.remember input
{
	width: 20px;
	height: 20px;
	margin-left: 15px;
	margin-right: 5px;
}

.login_btn{
	color: black;
	background-color: #FFC312;
	width: 100px;
}

.login_btn:hover{
	color: black;
	background-color: white;
}

.links{
	color: white;
}

.links a{
	margin-left: 4px;
}

li {
	color: #ffffff;
}

</style>

<body>

	
	<div class="dropdown">
		<ul class="nav justify-content-end">
			<li class="nav-item">
				<a class="nav-link active" href="view/Home.php"></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="view/QuemSomos.php">Quem Somos</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="view/Contato.php">Contato</a>
			</li>
		</ul>
	</div>

	<div class="container" style="margin-left: 10px !important; margin-top: 50px; ">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<h3><center>Login de Acesso</center></h3>
				</div>
				<div class="card-body">
					<form action="servlet/Login.php" method="POST">
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<label class="input-group-text"><i class="fas fa-user"></i></label>
							</div>
							<input type="email" id="e_mail" name="e_mail" class="form-control" placeholder="e-mail" required>

						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<label class="input-group-text"><i class="fas fa-key"></i></label>
							</div>
							<input type="password" id="senha" name="senha" class="form-control" placeholder="senha" required>
						</div>

						<div class="form-group">
							<input type="submit" value="Entrar" class="btn float-right login_btn">
						</div>
					</form>
					<script>
						(function (){
							'use Strict';
							var $form = document.querySelector('form')
							var $txtEmail = document.getElementById('e_mail');
							var $txtSenha = document.getElementById('senha');
							var $btn = document.getElementById('btn');

							$form.addEventListener('submit', function(e){
								if (!$txtEmail.value || !$txtSenha.value ){
									alert('Preencha todos os campos');
									e.preventDefault();
								}
							});
						})()
					</script>

				</div>
				<div class="card-footer">
					<div class="d-flex justify-content-center links" style="color: #ff0000;">
						Não tem uma conta?<a href="view/Cadastro_Responsavel.php">Cadastre-se Aqui</a>
					</div>
					<div class="d-flex justify-content-center">
						<a href="view/Recuperar_Senha.php">Esqueceu sua senha?</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<div class="w3-container w3-center w3-animate-top" style=" font-family: URW Chancery L, cursive; margin-top: -300px !important; margin-left: 320px; color: #ffffff;">
		<h1 style="font-size:3.5vw;">Detector de Queda de Idosos - DQI!</h1>
		<p style="font-size: 25px;">Como funciona? Segurança e confiabilidade!<br> Sensor de queda.</p>
	</div>
	
	<div id="footer">
		<p><a>® Este é um trabalho escolar reservado a aluna do IFSP-HTO 2020 - Todos os direitos reservados. Desenvolvido por Divana Josaphat.</a></p>
	</div>

</body>
</html>
