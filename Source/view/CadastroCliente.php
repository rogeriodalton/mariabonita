<?php
  require_once $required['Database'];
  require_once $required['classSelCliente'];
  require_once $required['fnExibir'];
  require_once $required['fnUrlReferencia'];
 
  use Source\dba\classSelCliente;
  $aCliente = [];
  $Clientes = new classSelCliente($the_request);
  $Clientes->viewQry();
  $aCliente = $Clientes->aQry;
  unset($Clientes);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Maria Bonita - Cliente</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="mariabonita.js"></script>
</head>
<body>

<div class="container">
  <h2>Cadastro de Clientes</h2>
  <p>Dados cadastrais dos clientes da mariabonita website</p>

  <form action="<?php fnUrlReferencia('GravaCliente', $the_request)?>" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
        <label for="Nome">Nome:</label>
        <input type="text" class="form-control" id="Nome" name="Nome" value="<?php showArrayKey($aCliente,'Nome')?>">
    </div>

    <div class="form-group col-md-2">
        <label for="DataNascimento">Data de Nascimento:</label><br>
        <input type="date" class="form-control" id="DataNascimento" name="DataNascimento" value="<?php showArrayKey($aCliente,'param_Data_Nascimento')?>">
    </div>
      
    <div class="form-group col-md-4">
        <label for="Telefone">Telefone:</label>
        <input type="text" class="form-control" id="Telefone" name="Telefone" value="<?php showArrayKey($aCliente,'Telefone')?>">
    </div>

    <div class="form-group col-md-6">
        <label for="Email">Email:</label>
        <input type="text" class="form-control" id="Email" name="Email" value="<?php showArrayKey($aCliente,'Email')?>">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-2">
      <label for="CEP">Informe CEP:</label><br>
      <input type="CEP" class="form-control" id="cep" name="CEP" value="<?php showArrayKey($aCliente,'CEP')?>"> <button type="button" onclick="myFunction()" id='BuscaViaCEP' class="btn btn-outline-primary btn-sm">Buscar</button>
    </div>
    <div class="form-group col-md-10">
      <label for="Rua">Rua:</label>
      <input type="text" class="form-control" id="rua" name="Rua" value="<?php showArrayKey($aCliente,'Rua')?>">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-2">
      <label for="UF">UF</label>
      <select class="form-control" name="UF" id="uf" value="<?php showArrayKey($aCliente, 'UF')?>">
        <option value="AC">Acre</option>
        <option value="AL">Alagoas</option>
        <option value="AP">Amapá</option>
        <option value="AM">Amazonas</option>
        <option value="BA">Bahia</option>
        <option value="CE">Ceará</option>
        <option value="DF">Distrito Federal</option>
        <option value="ES">Espírito Santo</option>
        <option value="GO">Goiás</option>
        <option value="MA">Maranhão</option>
        <option value="MT">Mato Grosso</option>
        <option value="MS">Mato Grosso do Sul</option>
        <option value="MG">Minas Gerais</option>
        <option value="PA">Pará</option>
        <option value="PB">Paraíba</option>
        <option value="PR">Paraná</option>
        <option value="PE">Pernambuco</option>
        <option value="PI">Piauí</option>
        <option value="RJ">Rio de Janeiro</option>
        <option value="RN">Rio Grande do Norte</option>
        <option value="RS">Rio Grande do Sul</option>
        <option value="RO">Rondônia</option>
        <option value="RR">Roraima</option>
        <option value="SC">Santa Catarina</option>
        <option value="SP">São Paulo</option>
        <option value="SE">Sergipe</option>
        <option value="TO">Tocantins</option>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="Cidade">Cidade</label>
      <input type="text" class="form-control" id="cidade" name="Cidade" value="<?php showArrayKey($aCliente,'Cidade')?>">
    </div>
 
    <div class="form-group col-md-6">
      <label for="Bairro">Bairro</label>
      <input type="text" class="form-control" id="bairro" name="Bairro" value="<?php showArrayKey($aCliente,'Bairro')?>">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="Referencia">Referência:</label>
      <input type="text" class="form-control" id="referencia" name="Referencia" value="<?php showArrayKey($aCliente,'Referencia')?>">
    </div>
  </div>

    <div>
      <button type="submit" class="btn btn-primary">Gravar</button>
    </div>

  </form>
</div>

</body>
</html>

<script>
   $('#BuscaViaCEP').click(function (){
       ConsultaCEP($("#cep").val())
    });
  
</script>