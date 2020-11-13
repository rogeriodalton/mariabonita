<?php
$required = require_once '/mariabonita/Source/route/required.php';
require_once $required['Database'];
require_once $required['classSelCliente'];
require_once $required['fnTable'];

use Source\dba\classSelCliente;

$Clientes = new classSelCliente($the_request);
$Clientes->viewQry();

$Titulos = [
    ['nome'=>'Nome',       'tamanho'=>'50', 'colspan'=>'1'],
    ['nome'=>'Dt Nasc',    'tamanho'=>'5',  'colspan'=>'1'],
    ['nome'=>'Telefone',   'tamanho'=>'5',  'colspan'=>'1'],
    ['nome'=>'Email',      'tamanho'=>'10', 'colspan'=>'1'],
    ['nome'=>'CEP',        'tamanho'=>'5',  'colspan'=>'1'],
    ['nome'=>'Rua',        'tamanho'=>'20', 'colspan'=>'1'],    
    ['nome'=>'UF',         'tamanho'=>'10', 'colspan'=>'1'],    
    ['nome'=>'Cidade',     'tamanho'=>'20', 'colspan'=>'1'],
    ['nome'=>'Bairro',     'tamanho'=>'20', 'colspan'=>'1'],
    ['nome'=>'Referência', 'tamanho'=>'20', 'colspan'=>'1'],
    ];
 
echo implode(fnTable($Clientes->aQry, $Titulos));
unset($Clientes);

?>
<script>
 function Abrir(GID, TipoDocumento, Descricao, Numero, Valor, Vencimento, Referencia){
      $.ajax
      ({
            method: 'GET',
            type: 'GET',
            dataType: 'html',
            url: 'ProtocoloItemAnonimo',
            data: {GID: GID, TipoDocumento: TipoDocumento, Descricao: Descricao, Numero: Numero, Valor: Valor, Vencimento: Vencimento , Referencia: Referencia},
            beforeSend: function () {
                  $("#Encontrar").html("Carregando...");
            },
            success: function (msg) {
                  $("#Encontrar").html(msg);
            }
      });
}
</script>    