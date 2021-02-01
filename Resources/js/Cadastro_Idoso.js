function salvarIdoso(){
	//nome,sobrenome,dtNasc,cpf,email,senha,endereco,numero,complemento,bairro,cidade,estado,cep,celular1,celular2,telefone,observacao
	$.post('../servlet/Cadastro_Idoso.php',{btSalvar:true,nome:document.getElementById("nome").value,sobrenome:document.getElementById("sobrenome").value,cpf:document.getElementById("cpf").value,dtNasc:document.getElementById("dtNasc").value,endereco:document.getElementById("endereco").value,numero:document.getElementById("numero").value,complemento:document.getElementById("complemento").value,bairro:document.getElementById("bairro").value,cidade:document.getElementById("cidade").value,estado:document.getElementById("estado").value,cep:document.getElementById("cep").value},function(responseJson){
		switch(responseJson){
			case 'erroSalvar':{
				swal({
			        type: 'error',
			        html: 'Erro ao salvar idoso !',
			        confirmButtonClass: 'btn btn-success',
			        buttonsStyling: false
				});
				break;
			}
			case 'ok':{
				swal({
			        type: 'success',
			        html: 'Idoso salvo com sucesso',
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