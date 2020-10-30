function recuperarSenha(){
	$.post('../servlet/Recuperar_Senha.php',{btRecuperar:true,cpf:document.getElementById("inputCpf").value,email:document.getElementById("inputEmail").value},function(responseJson){
		switch(responseJson){
			case 'erroEmail': {
				swal({
			        type: 'error',
			        html: 'Erro ao enviar email !',
			        confirmButtonClass: 'btn btn-success',
			        buttonsStyling: false
				});
				break;
			}
			case 'erroSalvar':{
				swal({
			        type: 'error',
			        html: 'Erro ao recuperar senha !',
			        confirmButtonClass: 'btn btn-success',
			        buttonsStyling: false
				});
				break;
			}
			case 'ok':{
				swal({
			        type: 'success',
			        html: 'Senha recuperada com sucesso, verifique seu email !',
			        confirmButtonClass: 'btn btn-success',
			        buttonsStyling: false
				}).then((result) => {
					location.href = "../view/Portal_Cliente.php";
				});
				break;
			}
			default: console.log('erro generalizado'); break;
		}
	});
}