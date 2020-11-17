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
