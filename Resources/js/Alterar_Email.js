function alterarEmail(){
	swal({
		title: 'Alterar Email ?',
		  text: "Tem certeza que deseja alterar seu email ? Essa operação não pode ser revertida !",
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',		  
		  confirmButtonText: 'Sim, alterar!',
		  cancelButtonColor: '#d33',
		  cancelButtonText: 'Não, desistir!'		  
	}).then((result) => {
		if(!result.value){
			swal({
		        type: 'error',
		        html: 'Não se preocupe nenhum dado foi registrado',
		        confirmButtonClass: 'btn btn-success',
		        buttonsStyling: false
			});
		}else{
			$.post('../servlet/Alterar_Email.php',{btAlterar:true,emailAnterior:document.getElementById("inputEmail").value,emailNovo:document.getElementById("inputNovoEmail").value,emailConf:document.getElementById("inputConfirmarEmail").value},function(responseJson){
				switch(responseJson){
					case 'emailAnterior': {
						swal({
					        type: 'error',
					        html: 'O email anterior não corresponde ao verdadeiro !',
					        confirmButtonClass: 'btn btn-success',
					        buttonsStyling: false
						});
						break;
					}
					case 'confirmaEmail':{
						swal({
					        type: 'error',
					        html: 'O novo email e a confirmação não correspondem !',
					        confirmButtonClass: 'btn btn-success',
					        buttonsStyling: false
						});
						break;
					}
					case 'erroSalvar':{
						swal({
					        type: 'error',
					        html: 'Erro ao alterar email !',
					        confirmButtonClass: 'btn btn-success',
					        buttonsStyling: false
						});
						break;
					}
					case 'ok':{
						swal({
					        type: 'success',
					        html: 'Email alterado com sucesso !',
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
	});
}