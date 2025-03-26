<?php 
$titulo = 'Cinebox - Filmes';
include './includes/header.php'; 

require'./classes/Filmes.php';

$filme = new Filmes(); //passando todos os dados da classe para a variavel filme
$dadosFilmes = $filme->exibirListaFilmes(); 

include './includes/filme_lista.php';
include './includes/footer.php';

?>