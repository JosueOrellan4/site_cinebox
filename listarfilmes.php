<?php 
$titulo = 'Cinebox - Filmes';
include './includes/header.php'; 

require'./classes/Filmes.php';
require'./classes/Generos.php';

$filme = new Filmes(); //passando todos os dados da classe para a variavel filme
$dadosFilmes = $filme->exibirListaFilmes(); 

$generos = new Generos(); 
$dadosGeneros = $generos->consultarListaGeneros();

include './includes/filmes_filtro.php';

include './includes/footer.php';

?>