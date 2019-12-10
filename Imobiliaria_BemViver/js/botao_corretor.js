	function define_operacao(operacao){
    if (operacao == "alt") {
       document.form_alteracao_exclusao_corretor.form_corretor.value = "editar";
    }
    if (operacao == "exc") {
       document.form_alteracao_exclusao_corretor.form_corretor.value = "excluir";
    }
    document.form_alteracao_exclusao_corretor.submit();
  }