<!DOCTYPE html>
<html>
<head>
  <title>Maria Bonita</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="mariabonita.js"></script>
</head>
<body style="font-family:Verdana;color:#aaaaaa;">

<div style="background-color:#e5e5e5;padding:8px;text-align:center;">
    <h1><b>MARIA BONITA </b></h1>
</div>

<div style="overflow:auto">
  <div class="menu">
    <button type='button' id='Listar_Clientes' class='btn btn-default btn-sm btn-block'>Listar Clientes</button>  
    <button type='button' id='Cadastro_Cliente' class='btn btn-default btn-sm btn-block'>Cadastrar Cliente</button>
    <button onclick="window.location.href='https://www.linkedin.com/in/daltonralv';" class='btn btn-default btn-sm btn-block'>ir para o Linkedin do Dalton</button>
  </div>

  <div class="main">
     <div id="dados">© copyright Maria Bonita 2020</div>
  </div>

</div>

<div style="background-color:#e5e5e5;text-align:center;padding:5px;margin-top:1px;">© copyright Maria Bonita 2020</div>

</body>

</html>

<script>
   $('#Listar_Clientes').click(function (){
        ListarClientes($().val())
    });

    $('#Cadastro_Cliente').click(function () {
        CadastroCliente($().val())
    });
  
</script>

<?php
echo '';

?>