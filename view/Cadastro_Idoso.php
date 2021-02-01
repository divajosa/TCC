<?php
include_once "../servlet/filterLogin.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Detector de queda/Cadastro Idoso</title>
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
 /* background-image: url('../Resources/img/foto5.png');*/
  background-repeat: no-repeat;
}

</style>

<body >

<?php
    include_once "template/header.php";
    ?>
<form method="POST" action="Cadastro_Idoso">
  <div class="container-fluid">
    <div>
      <h2 style="margin-left: 500px;">CADASTRO DO IDOSO</h2>
    </div>
    <br>

    <div id="main" class="container-fluid" style="width: 999px; ">
      <div class="retangulo endCadIds" style="height: 550px; margin: auto; margin-top: 10px; border-radius: 12px;">
        <div class="form row">
            <div class="col-md-6" style="margin-top: 10px;">
              <label for="nome">*Nome</label>
              <input type="text" id="nome" name="nome" minlength="2" class="form-control" required>
            </div>

            <div class="col-md-6" style="margin-top: 10px;">
              <label for="sobrenome">*Sobrenome</label>
              <input type="text" name="sobrenome" id="sobrenome" class="form-control" placeholder=" ">
            </div>

            <div class="col-md-4">
              <br><label for="cpf">*CPF</label>
              <input type="number" name = "cpf" class="form-control" id="cpf" placeholder=" " style="
                height: 30%;">
            </div>

              <div class="col-md-4" style="margin-top: 2.5%;">
                <label for="dtNasc">Data Nascimento</label>
                <div class='input-group date' style= "width: 210px;" id='datetimepicker1'>
                  <input type="date" id="dtNasc" class="form-control" style="height: 28%; padding-top: 1px;padding-bottom: 1px;">
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

          <div class="form-row col-md-12" style="  padding-left: 2px;
          padding-right: 2px;" >
          <div class="col-md-7">
            <br><label for="endereco" style="margin-left: 12px;">*Endereço</label>
            <input type="text" class="form-control" style= "width: 550px; margin-left: 12px; height: 30%;" id="endereco" placeholder="rua, av, pass etc... ">
          </div>

          <div class="col-md-2">
            <br><label for="numero">*Número</label>
            <input type="number" class="form-control" id="numero" placeholder=" " style="
                height: 30%;">
          </div>

          <div class="col-md-3">
            <br><label for="complemento">*Complemento</label>
            <input type="text" class="form-control" id="complemento" placeholder="nº apto " style="
                height: 30%;">
          </div>
        </div>

        <div class="col-md-4">
          <br><label for="bairro">*Bairro</label>
          <input type="text" class="form-control" id="bairro" placeholder=" " style="
                height: 30%;">
        </div>

        <div class="col-md-3">
          <br><label for="cidade">*Cidade</label>
          <input type="text" class="form-control" id="cidade" style="
                height: 30%;">
        </div>

        <div class="col-md-2">
          <br><label for="estado">*Estado</label>
          <select id="estado" class="form-control" style="
                height: 30%;">
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

        <div class="col-md-3">
          <br><label for="cep">*CEP</label>
          <input type="number" class="form-control" id="cep" style="
                height: 30%;">
        </div>

        <script>
          var cep = '01234-050';

          function isValidCEP(srt){
            var regex = /\d{5}-\d{3}/gi;
            return regex.test(str);
          }
        </script>

        <div class="col-md-12">
          <div class="form-group">
            <label for="observacao">*Observação</label>
            <textarea type="observacao" class="form-control" id="observacao" rows="3" placeholder=" " required/></textarea>
          </div>
        </div>

        <div><br>
          <p style="color: #ffffff; margin-top: -30px; margin-left: 20px;">* Campos com preenchimento obrigatório</p>
        </div>

          <div class="col-md-4"><br>
            <input type="submit" class="btn btn-primary active" value="Cadastrar" style="background-color: #5532A3 !important; border: 1px solid #442881;  margin-top: 20px;  margin-left: -105% !important;" onclick="salvarIdoso()"/>
          </div><br><br><br><br><br><br>
    </div>
 
  </div>
</div>
</div>

<!--<div class="container-fluid">



  <div class=" col-md-4" style="margin-left: 300px; margin-top: 150px; margin-bottom: 80px;">
    <p class="button-style"><a href="#">Excluir</a></p>
  </div>
  
</div>-->
</form>

<?php
    include_once "template/footer.php";
    ?>
  </div>
  <script src="../Resources/assets/js/plugins/sweetalert2.js"></script>
  <script src="../Resources/js/Cadastro_Idoso.js"></script>

</div>
</body>
</html>
</div>
</div>

</html>