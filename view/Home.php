<?php
include_once "../servlet/filterLogin.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Detector de queda/Home</title>
	<link href='http://fonts.googleapis.com/css?family=Istok+Web:400,700' rel='stylesheet' type='text/css' />
	<link href="default.css" rel="stylesheet" type="text/css" media="all" />

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
	/*background-image: url('../Resources/img/foto4.png');*/
	background-repeat: no-repeat;
}
</style>

<body>
	<div class="conteiner">
		<?php
		    include_once "template/header.php";
		  ?>

		<div id="page-wrapper">
			<div class="page">
				<div id="content">
					<div>
						<h2 style=" color: #000000; margin-left: 55%;">HOME</h2><br><br>
						<p align= "justify" style="color: #000000; margin-left: 20%;"> Estudos realizados apontam para o crescimento da população idosa no mundo inteiro, de acordo com dados da Organização Mundial da Saúde (OMS) a população mundial com mais de 60 anos passara de 2 bilhões em 2050, o que indica novos desafios no controle de doenças que são adquiridas com o passar do tempo e passará a ser uma questão de ordem pública, pois países que não possuírem estrutura para lidar com o envelhecimento de sua população terá desafios maiores ainda para cuidar de seus idosos.</p>

						<p align= "justify" style="color: #000000; margin-left: 20%;"> E partindo desses dados surgiu a ideia de apresentar um dispositivo de detecção de quedas esta pesquisa mostrará alguns dos principais fatores que provocam a queda de idosos, que pode estar atrelado ao dia-a-dia de muitas famílias e o quanto um dispositivo desta natureza poderá ajudar em um socorro imediato e com mais qualidade. </p>
						<figure style="float:left; ">

						<!--<p align= "justify" style="color: #ffffff; margin-left: 10%;"> Como funciona. Segurança e confiabilidade/ sensor de queda</p> -->
						<figure style="float:left; ">
					</div>
				</div>
			</div>
		</div>

		<?php
		    include_once "template/footer.php";
		?>
	</div>
</body>
</html>