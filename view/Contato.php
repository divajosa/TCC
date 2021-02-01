<?php
include_once "../servlet/filterLogin.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Detector de queda/Contato</title>
  <link href='http://fonts.googleapis.com/css?family=Istok+Web:400,700' rel='stylesheet' type='text/css' />
  

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../Resources/css/estilo.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<style type="text/css">

html{
  overflow: hidden;
}


@import url('https://fonts.googleapis.com/css?family=Numans');
html,body{
  /*background-image: url('../Resources/img/foto4.png');*/
  background-repeat: no-repeat;
}

</style>

<body>

  <?php
    include_once "template/header.php";
  ?>

  <div class="container-fluid">

    <div>
      <h2>CONTATO</h2>
    </div>
    <br>
<form method="POST" action="Contato">
    <div id="main" class="container-fluid" style="padding-right: 2px; padding-left: 2px; width: 999px;">
      <div class="retangulo endCont" style="height: 320px; margin: auto; margin-top: 5px;">

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nome">*Nome</label>
              <input type="text" id="nome" name="nome" minlength="2" class="form-control" required>
            </div>

            <div class="form-group col-md-6">
              <label for="email">*Email</label>
              <input type="email" name="e_mail" class="form-control" id="email" placeholder=" ">
            </div>
          </div> 

          
          <div class="form-row">
            <div class="form-group col-md-6" style="margin-top: 5px;">
              <label for="assunto">*Assunto</label>
              <input type="assunto" name="assunto" id="assunto" class="form-control" >
            </div>


            <div class="form-group col-md-4" style="margin-top: 5px;">
              <label for="cidade">Cidade</label>

              <input type="cidade" name="cidade" id="cidade" class="form-control">
            </div>

            <div class="form-group col-md-2" style="margin-top: 5px;">
              <label for="estado">Estado</label>
              <select id="estado" class="form-control">
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

              <div class="form-group col-md-12">
                <div class="form-group">
                  <label for="observacao">Observação</label>
                  <textarea type="observacao" name="observacao" class="form-control" id="observacao" rows="3" placeholder=" " required/></textarea>
                </div>
              </div>

        </div>

        <div>
          <p style="color: #ffffff; margin-top: -20px;">* Campos com preenchimento obrigatório</p>
        </div>
      </div>
      <div class="col-md-12" style="margin-left:1px; margin-top: 55px; margin-bottom: 0px;">
        <p class="button-style"><a href="#" onclick="salvarContato()">Enviar</a></p>
      </div>
</form>
      <?php
      include_once "template/footer.php";
      ?>
    </div>
    <script src="../Resources/assets/js/plugins/sweetalert2.js"></script>
    <script src="../Resources/js/Contato.js"></script>
  </body>
  </html>