<?php
require_once __DIR__ . '/auxiliares/auxiliar.php';
$id = $_GET['name'];

$sql = "SELECT * FROM listagem_entretenimentos WHERE `status` = 'ativo' and id = $id";

$query = mysqli_query($conn, $sql);

$result_list = mysqli_fetch_assoc($query);

// INTEGRAÇÃO
$nome = $result_list['nome'];
$faixa_etaria = $result_list['faixa_etaria'];
$duracao = $result_list['duracao'];
$diretor = $result_list['diretor'];
$lancamento = $result_list['lancamento'];
$sinopse = $result_list['sinopse'];

$sql = "SELECT nome FROM tipos_entretenimento WHERE id = $result_list[id_tipo]";

$query = mysqli_query($conn, $sql);

$result_type = mysqli_fetch_assoc($query);

// INTEGRAÇÃO
$tipo = $result_type['nome'];

// Conexão entre categorias e listagem de entretenimentos
$sql = "SELECT id_categorias FROM listagem_entretenimentos_connect_categorias WHERE id_listagem_entretenimentos = $id";

$query = mysqli_query($conn, $sql);

$result_conn_cat = mysqli_fetch_assoc($query);
$id_categoria = $result_conn_cat['id_categorias'];

$sql = "SELECT nome FROM categorias_entretenimento WHERE id = $id_categoria";

$query = mysqli_query($conn, $sql);

$result_categorias = mysqli_fetch_assoc($query);

// INTEGRAÇÃO
$categoria = $result_categorias['nome'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>entretenimento</title>
    <link rel="stylesheet" href="css_pesquisa.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->

</head>
<body>
    <nav>
        <div  id="titulo">
            <h1>Entretenimentos</h1>
        </div>
    </nav>
    <div class="link">
        
        <a href="">Youtube</a>
        <img src="" alt="">
        <a href="">Instagram</a>
        <img src="" alt="">
        <a href="">Facebook</a>
        <img src="" alt="">
            
    </div>
    <main>
        <h2> <?=$nome?></h2>
        <h3><?= $tipo ?> | <?=$categoria?> |  <?=$duracao?> | <?=$faixa_etaria?></h3>
        <section>
            <h4>Sobre o filme:</h4>
            <img src="transferir (2).png" alt="">
            <div class="posicao">
                <p>Filme: <?=$nome?> </p>
                <br>
                <p>Faixa etária: <?=$faixa_etaria?></p>
                <br>
                <p>Duração: <?=$duracao?></p>
                <br>
                <p>Diretor: <?=$diretor?></p>
                <br>
                <p>Lançamento: <?=$lancamento?></p>
                <br>
                <p>Categoria: <?=$categoria?></p>
                <br>   
            </div>
        </section>
        <div>
            <h4>Sinopse:</h4>
            <p> <?=$sinopse?></p>
        </div>
    </main>
    
</body>
</html>