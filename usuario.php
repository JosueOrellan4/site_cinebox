
<?php
require './classes/Filmes.php';
include './includes/header.php';

//fazer virar uma classe pra verifica se o usuario esta logado.
if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET) && $_GET['sair'] == 'true'){
    session_destroy();
    header('location:index.php');

}
if(empty($_SESSION) && !isset($_SESSION['id_pessoa'])){   
    header('location:usuario-login.php');
}



$filme = new Filmes();
$resultadoConsultafilmes = $filme->exibirListaFilmes();

?>
<section id="usuario-principal">
    <main class="container usuario-principal">
        <?php
        include_once './includes/user_header.php';
        include_once './includes/user_lista_filmes.php';

        ?>
    </main>
</section>



<?php

include './includes/footer.php';
