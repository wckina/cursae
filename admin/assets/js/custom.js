$(document).ready(function (){

    //Url amigável automática
    $('#slug').slugify('#nome');


	 //Busca CEP
    $("#cep").on('focusout',function(){

                cep = $(this).val();

                $.getJSON("http://cep.websix.com.br/"+cep,{},function(dados){
                $("#logradouro").val(dados.tipo_logradouro +' '+ dados.logradouro);

                  $("#id_cidade option").each(function(){
                      if($(this).text() == dados.cidade){
                        $(this).attr('selected', true);
                      }
                  });

                  $("#id_bairro option").each(function(){
                      if($(this).text() == dados.bairro){
                        $(this).attr('selected', true);
                      }
                  })

                   $("#numero").focus();

                }).fail(function(){
                    console.log("CEP Inválido, tente novamente");
                    //$("#btn-search-cep").show();
                    //$("#loading-message").hide();
                    //$("#input-payment-postcode").focus();
                    return false;
                });
    })

    //Validae Form
    $('form').parsley();
    Parsley.addMessages('pt-br', {
      defaultMessage: "Este valor parece ser inválido.",
      type: {
        email:        "Este campo deve ser um email válido.",
        url:          "Este campo deve ser um URL válida.",
        number:       "Este campo deve ser um número válido.",
        integer:      "Este campo deve ser um inteiro válido.",
        digits:       "Este campo deve conter apenas dígitos.",
        alphanum:     "Este campo deve ser alfa numérico."
      },
      notblank:       "Este campo não pode ficar vazio.",
      required:       "Este campo é obrigatório.",
      pattern:        "Este campo parece estar inválido.",
      min:            "Este campo deve ser maior ou igual a %s.",
      max:            "Este campo deve ser menor ou igual a %s.",
      range:          "Este campo deve estar entre %s e %s.",
      minlength:      "Este campo é pequeno demais. Ele deveria ter %s caracteres ou mais.",
      maxlength:      "Este campo é grande demais. Ele deveria ter %s caracteres ou menos.",
      length:         "O tamanho deste campo é inválido. Ele deveria ter entre %s e %s caracteres.",
      mincheck:       "Você deve escolher pelo menos %s opções.",
      maxcheck:       "Você deve escolher %s opções ou mais",
      check:          "Você deve escolher entre %s e %s opções.",
      equalto:        "Este valor deveria ser igual."
    });

    Parsley.setLocale('pt-br');


    //Confirm Delete
    $(".confirm").on("click",function(evt){
        evt.preventDefault();
        var link = $(this).attr('href');
        swal({
            title: "Confirme a exclusão",
            text: "Você tem certeza que deseja excluir essa item?",
            type: "error",
            showCancelButton: true,
            cancelButtonClass: 'btn-white btn-md waves-effect',
            confirmButtonClass: 'btn-danger btn-md waves-effect waves-light',
            confirmButtonText: 'Sim'
        }, function (isConfirm) {
            if (isConfirm) {
                window.location = link;
            }
        });
    })


    //MaskMoney
    $('.money').maskMoney();    

})