<?php
include_once "../servlet/filterLogin.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Detector de queda/Alterar Senha</title>
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
 /* background-image: url('../Resources/img/foto4.png');*/
  background-repeat: no-repeat;
}
</style>

<body>

  <?php
    include_once "template/header.php";
  ?>

  <div class="container-fluid">
    <div>
      <h2>ALTERAR SENHA</h2>
    </div>
    <br><br>


    <div id="main" class="container-fluid" style="padding-right: 2px; padding-left: 2px; width: 999px;">
      <div class="retangulo endAltSen" style="height: 150px; margin: auto;" >
          <div class="form-row">
            <div class="col-md-4" style="top: 40px;">
              <label for="inputSenha">*Senha Anterior</label>
              <input type="text" class="form-control" placeholder=" " id="inputSenha">
            </div>

            <div class="col-md-4" style="top: 40px;">
              <label for="inputSenha">*Nova Senha</label>
              <input type="text" class="form-control" placeholder=" " id="inputNovaSenha">
            </div>

            <div class="col-md-4" style="top: 40px;">
              <label for="inputConfirmarSenha">*Confirmar Senha</label>
              <input type="password" class="form-control" id="inputConfirmarSenha" placeholder=" ">
            </div>
          </div>
      </div>

      <div>
        <p style="color: #ffffff;">* Campos com preenchimento obrigatório</p>
      </div>

      <div class="form-group col-md-12">
        <p class="button-style" style="margin-top: 40px; margin-bottom: 80px;"><a href="#" onclick="alterarSenha()">Alterar</a></p>
      </div>
    </div>

    <?php
    include_once "template/footer.php";
    ?>
  </div>
  <script src="../Resources/assets/js/plugins/sweetalert2.js"></script>
  <script src="../Resources/js/Alterar_Senha.js"></script>
</body>
</html>
