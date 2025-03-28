<?php

require'./classes/Filmes.php';
require'./classes/Generos.php';
$id_filme = $_GET['id'];


include './includes/header.php';
$dados = new Filmes(); 
$dadosFilmes = $dados->consulta();

$generos = new Generos(); 
$dadosGeneros = $generos->consultarGeneroByIdFilme($id_filme);

if (isset($_GET['id']) && !empty($_GET['id'])) {
    
    include './includes/filmes_detalhe.php';
} else {
    header('location:index.php');
}

include_once './includes/footer.php';

?>
