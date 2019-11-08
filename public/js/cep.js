const consultaCep = () => {
    var cep = $("#cep").val().replace(/\D/g, '');
    //Verifica se campo cep possui valor informado.
    if (cep != "") {
        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;
        //Valida o formato do CEP.
        if(validacep.test(cep)) {
            //Preenche os campos com "..." enquanto consulta webservice.
            $("#logradouro").val("...");
            $("#bairro").val("...");
            $("#cidade").val("...");
            $("#uf").val("...");                    
            //Consulta o webservice viacep.com.br/
            $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", (dados) => {
                if (!("erro" in dados)) {
                    //Atualiza os campos com os valores da consulta.
                    $("#logradouro").val(dados.logradouro);
                    $("#bairro").val(dados.bairro);
                    $("#cidade").val(dados.localidade);
                    $('#uf').children('option').val(dados.uf)
                    $('#uf').children('option').text(dados.uf).prop('selected','true');
                    
                } //end if.
                else {
                    //CEP pesquisado não foi encontrado.
                    limpa_formulario_cep();
                    $('#modal').modal('show');
                    $('#modal').find('.modal-title').text("Alert")
                    $('#modal').find('.modal-body').text("CEP não encontrado")
                }
            });
        } else {
            //cep é inválido.
            limpa_formulario_cep();
            $('#modal').modal('show');
            $('#modal').find('.modal-title').text("Alert")
            $('#modal').find('.modal-body').text("Formato de CEP invalido")
        }
    } 
}

const  limpa_formulario_cep = () =>                                                                                            {
    $("#logradouro").val("");
    $("#bairro").val("");
    $("#cidade").val("");
    $("#uf").val(""); 
}

