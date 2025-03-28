<?php
//boa pratica: criar uma classe sempre com a primeira letra maiuscula e com o mesmo nome do arquivo
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

    public function exibirDetalhesFilmes(){

        $dsn = 'mysql:dbname=db_cinebox;host=127.0.0.1';

        $user = 'root';

        $password = '';

        $banco = new PDO($dsn, $user, $password);

        $id_filme = $_GET['id'];
        

        $script = 'SELECT tb_filmes.*,tb_generos.cor,tb_filme_genero.* FROM tb_filme_genero INNER JOIN tb_filmes ON tb_filmes.id = tb_filme_genero.filme_id INNER JOIN tb_generos ON tb_generos.id = tb_filme_genero.genero_id WHERE tb_filme_genero.id =' . $id_filme; 
        
        return $banco->query($script)->fetch();
    }
    public function consulta(){
        $dsn = 'mysql:dbname=db_cinebox;host=127.0.0.1';

        $user = 'root';

        $password = '';

        $banco = new PDO($dsn, $user, $password);

        $id_filme = $_GET['id'];

        $script = "SELECT * FROM tb_filmes WHERE id = $id_filme";
        
        return $banco->query($script)->fetch();

    }
}
