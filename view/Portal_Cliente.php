<?php
include_once "../util/Globais.php";
require_once "../dao/IdosoDAO"; 
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Detector de queda/Portal do Cliente</title>
  <link href='http://fonts.googleapis.com/css?family=Istok+Web:400,700' rel='stylesheet' type='text/css' />
  <link href="default.css" rel="stylesheet" type="text/css" media="all" />

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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

  <div class="container">
    <div>
      <h2 style="margin-left: 350px; ">PORTAL DO CLIENTE</h2>
    </div>

    <br><br>

    <tr>
      <p style="font-family: Times New Roman, Times, serif; font-size: 25px !important; color: #ffffff;"><strong> Bem-vindo(a)!</strong><p>
        <span id="Label1" style="font-size:18px;font-weight:bold; color: #ffffff;">
          <?=$_SESSION["nome_usuario"]?>
        <p style="margin: 18 0 0 0"> 
          <a href="Cadastro_Responsavel.php"><span class="destaque_laranja2"O ESPIRITO SANTO>Alterar dados cadastrais</span></a></p>
          <p style="margin: 5 0 0 0">
            <a href="Alterar_Senha.php"><span class="destaque_laranja2">Alterar senha de acesso</span></a></p>
            <p style="margin: 5 0 0 0">
              <!--<a href="Alterar_Email.php"><span class="destaque_laranja2">Alterar email de acesso</span></a></p>
              <p style="margin: 5 0 0 0"> -->

              </td>
            </tr> 
                <!--
                <tr>
                  <td>Fulano de tal</td>
                  <td class="far fa-edit"></td>
                  <td class="far fa-trash-alt"></td>
                </tr>
                <tr>
                    <td>Fulano de tal</td>
                    <td class="far fa-edit"></td>
                    <td class="far fa-trash-alt"></td>
                </tr>
                <tr>
                    <td>Fulano de tal</td>
                    <td class="far fa-edit"></td>
                    <td class="far fa-trash-alt"></td>
                </tr>
                -->
            </table>
          </div> 

          <?php
          include_once "template/footer.php";
          ?>
            
    </div>
  </div>
</body>
</html>