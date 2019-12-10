	function define_operacao(operacao){
    if (operacao == "alt") {
       document.form_alteracao_exclusao_imovel.form_imovel.value = "editar";
    }
    if (operacao == "exc") {
       document.form_alteracao_exclusao_imovel.form_imovel.value = "excluir";
    }
    document.form_alteracao_exclusao_imovel.submit();
  }