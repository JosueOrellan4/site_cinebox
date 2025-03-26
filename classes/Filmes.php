<?php
//boa pratica: criar uma classe sempre com a primeira letra maiuscula
//serve para padronizar informações
class Filmes
{

    public function exibirListaFilmes($limite=''){

        

        $dsn = 'mysql:dbname=db_cinebox;host=127.0.0.1';

        $user = 'root';

        $password = '';

        $auxScript = ''; //auxiliar 

        $banco = new PDO($dsn, $user, $password);

        if(!empty($limite)){
            $auxScript = " ORDER BY RAND() LIMIT {$limite}";
        };

        $script = 'SELECT * FROM tb_filmes' . $auxScript;

        return $banco->query($script)->fetchAll();
    }
}
