function salvarResponsavel(){$.post('../servlet/Cadastro_Responsavel.php',{btSalvar:true,nome:document.getElementById("nome").value,sobrenome:document.getElementById("sobrenome").value,dtNasc:document.getElementById("dtNasc").value,cpf:document.getElementById("cpf").value,email:document.getElementById("email").value,observacao:document.getElementById("observacao").value},function(responseJson){
	
	//nome,sobrenome,dtNasc,cpf,email,senha,endereco,numero,complemento,bairro,cidade,estado,cep,celular1,celular2,telefone,observacao
	$.post('../servlet/Cadastro_Responsavel.php',{btSalvar:true,nome:document.getElementById("nome").value,sobrenome:document.getElementById("sobrenome").value,dtNasc:document.getElementById("dtNasc").value,cpf:document.getElementById("cpf").value,email:document.getElementById("email").value,observacao:document.getElementById("observacao").value},function(responseJson){
		switch(responseJson){
			case 'erroSalvar':{
				swal({
			        type: 'error',
			        html: 'Erro ao salvar responsavel !',
			        confirmButtonClass: 'btn btn-success',
			        buttonsStyling: false
				});
				break;
			}
			case 'ok':{
				swal({
			        type: 'success',
			        html: 'Responsavel salvo com sucesso',
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