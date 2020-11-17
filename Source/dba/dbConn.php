<?php

abstract class dbConn extends mysqli {
    private $IConn = [0 => ['host' => 'localhost', 
                            'user' => 'root', 
                            'pass' => 'ujdk23$', 
                            'db'   => 'mariabonita',
                            'port' => 3306],
                   
                      1 => ['host' => 'conexao_web.com.br', 
                            'user' => 'login_web', 
                            'pass' => 'senha_web1234', 
                            'db'   => 'nome_do_banco',
                            'port' => 3306]                           
                     ];

    public $aSql  = [];
    public $aJson = '';
    public $aQry  = [];
    public $Encontrados = 0;
    public $NomeCampo = [];
    public $MensagemServidor = '';

    public function __construct(array $sql) {
        $w = 0;  // 0 LOCAL  1 WEB
        parent::__construct($this->IConn[$w]['host'], 
                            $this->IConn[$w]['user'], 
                            $this->IConn[$w]['pass'] , 
                            $this->IConn[$w]['db'], 
                            $this->IConn[$w]['port']);
        $this->set_charset('utf8');
        $this->get_charset();
        $this->aSql = $sql;

        if (mysqli_connect_error()) {
            die('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
        }
    }

    public function viewQry(): void
    {
        $Linha = [];
        $Resultado = $this->query(implode($this->aSql));
        $this->Linhas = $Resultado->num_rows;
        $this->Encontrados = $Resultado->num_rows;
        if ($this->Linhas == 1)
            $this->aQry = $Resultado->fetch_assoc();
        else
        {
            $this->aQry = [];
            while ($Linha = ($Resultado->fetch_assoc())) 
            array_push($this->aQry, $Linha);
        }    

        $this->Tem   = (bool)($this->Linhas > 0);
        $this->aJson = json_encode($this->aQry);
        unset($Resultado);
    }

    public function execQry(): void
    {
        $executed = false;
        $executed = $this->query(implode($this->aSql));
        if (!$executed){
          $this->MensagemServidor = "Error updating record: " . mysqli_error($this);
          die($this->MensagemServidor);
        }
            
    }

}

