	function define_operacao(operacao){
    if (operacao == "alt") {
       document.form_alteracao_exclusao_cliente.form_user.value = "editar";
    }
    if (operacao == "exc") {
       document.form_alteracao_exclusao_cliente.form_user.value = "excluir";
    }
    document.form_alteracao_exclusao_cliente.submit();
  }