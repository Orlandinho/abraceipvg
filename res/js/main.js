$(document).ready(function($) {

            function limpa_formulario_cep() {
                // Limpa valores do formulário de cep.
                $("#inputAddress").val("");
                $("#inputBairro").val("");
                $("#inputCity").val("");
                $("#inputZip").val("");
            }

            $("#inputCel").mask("00000-0000");
            $("#inputTel").mask("0000-0000");
            $("#inputZip").mask("00000-000");
            
            //Quando clica no botão ao lado do campo de cep.
            $("#buttonZip").on('click', function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $("#inputZip").val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#inputAddress").val("...");
                        $("#inputBairro").val("...");
                        $("#inputCity").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#inputAddress").val(dados.logradouro);
                                $("#inputBairro").val(dados.bairro);
                                $("#inputCity").val(dados.localidade);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulario_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulario_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulario_cep();
                }
            });
        });