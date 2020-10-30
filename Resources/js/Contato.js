function salvarContato(){
	
	$.post('../servlet/Contato.php',{btSalvar:true,nome:document.getElementById("nome").value,email:document.getElementById("email").value,assunto:document.getElementById("assunto").value,cidade:document.getElementById("cidade").value,estado:document.getElementById("estado").value,nome:document.getElementById("observacao").value},function(responseJson){
		switch(responseJson){
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