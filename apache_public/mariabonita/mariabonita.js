function CadastroCliente(ClienteID){
    $.ajax 
    ({
            method: 'GET',
            type: 'GET',
            dataType: 'html',
            url: 'CadastroCliente',
            data: {ClienteID : ClienteID},
            beforeSend: function () {
                  $("#dados").html("Carregando...");
            },
            success: function (msg){
                  $("#dados").html(msg);
            }
    });
}

function ListarClientes(){
    $.ajax 
    ({
            method: 'GET',    
            type: 'GET',
            dataType: 'html',
            url: 'ListarClientes',
            beforeSend: function () {
                  $("#dados").html("Carregando...");
            },
            success: function (msg){
                  $("#dados").html(msg);
            }
    });
}

function ConsultaCEP(CEP){
      $.ajax 
      ({
              method: 'GET',    
              type: 'GET',
              dataType: 'json',
              url: `https://viacep.com.br/ws/${CEP}/json/`,
              data: {CEP : CEP},
              beforeSend: function () {
                  $("#cidade").val("Aguarde ...");
                  $("#uf").val("");
                  $("#bairro").val("Aguarde ...");
                  $("#rua").val("Aguarde ...");
                  $("#complemento").val("Aguarde ...");
              },              
              success: function (msg){
                  $("#cidade").val(msg.localidade);
                  $("#uf").val(msg.uf);
                  $("#bairro").val(msg.bairro);
                  $("#rua").val(msg.logradouro);
                  $("#complemento").val(msg.complemento);
              },
              error : function(erro) {
                  $("#cidade").val("");
                  $("#uf").val("");
                  $("#bairro").val("");
                  $("#rua").val("");
                  $("#complemento").val("");
                  alert("CEP não encontrado.");
              } 
      });
}