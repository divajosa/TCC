function alterarSenha(){
	swal({
		title: 'Alterar Senha ?',
		  text: "Tem certeza que deseja alterar sua senha ? Essa operação não pode ser revertida !",
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
			$.post('../servlet/Alterar_Senha.php',{btAlterar:true,senhaAnterior:document.getElementById("inputSenha").value,senhaNova:document.getElementById("inputNovaSenha").value,senhaConf:document.getElementById("inputConfirmarSenha).value},function(responseJson){
				switch(responseJson){
					case 'senhaAnterior': {
						swal({
					        type: 'error',
					        html: 'A senha anterior não corresponde a verdadeira !',
					        confirmButtonClass: 'btn btn-success',
					        buttonsStyling: false
						});
						break;
					}
					case 'confirmaSenha':{
						swal({
					        type: 'error',
					        html: 'A nova senha e a confirmação não correspondem !',
					        confirmButtonClass: 'btn btn-success',
					        buttonsStyling: false
						});
						break;
					}
					case 'erroSalvar':{
						swal({
					        type: 'error',
					        html: 'Erro ao alterar senha !',
					        confirmButtonClass: 'btn btn-success',
					        buttonsStyling: false
						});
						break;
					}
					case 'ok':{
						swal({
					        type: 'success',
					        html: 'Senha alterada com sucesso !',
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