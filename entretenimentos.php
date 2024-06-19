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


// INTEGRAÇÃO DA IMAGEM 
$file = "jpg";
$imagem = img($nome,$file);

?>
<!DOCTYPE html>
<html lang="pt-bt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/entretenimento.css">
        <link rel="stylesheet" href="./css/texto.css">
        <link rel="stylesheet" href="./css/navbar.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <div class="estrelas">
          <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
        
        <title>Entrenimentos</title>
    </head>
    <body>
        <main>
            <header class="cabecalho">
                <p class="titulo-1">ENTRETENIMENTOS</p>
            </header>
            <nav class="nav">
                <ul>
                    <li><a href="index1.php" title="Home">Home</a></li>  
                    <li><a href="#" title="Quem Somos">Quem Somos</a></li>
                    <li><a href="#" title="Serviços">Filmes</a></li>
                    <li><a href="#" title="Serviços">Séries</a></li>
                    <li><a href="#" title="Serviços">Animes</a></li>
                    <li><a href="#" title="Serviços">Jogos</a></li>  
                    <li><a href="#" title="Fale Conosco">Fale Conosco</a></li>
                         
               </ul>
            </nav>
            <div class="container">
                <section class="conteudo-principal">
                    <div class="card-filme">
                        <div class="card-imagem">
                            <figure class="imagem-filme">
                                <img class="img-filme"
                                    src="/imagens/$imagem"
                                    alt>
                            </figure>
                        </div>
                        <div class="card-descricao">
                            <div class="card-sobre">
                                <h1 class="titulo-2"><?=$nome?></h1>
                                <p><?=$faixa_etaria?> | <?=$duracao?> | <?=$tipo?> | <?=$categoria?></p>
                                <div class="card-title">
                                    <div class="filme">
                                        <p class="titulo-3"
                                            lass="titulo-3">Sobre o Filme.</p>
                                        <ul>
                                            <li>Filme: <?= $nome?></li>
                                            <li>Faixa etária:<?= $faixa_etaria?></li>
                                            <li>Duração: <?= $duracao?></li>
                                            <li>Diretor: <?= $diretor?></li>
                                            <li>Lançamento: <?= $lancamento?></li>
                                            <li>Categoria: <?= $categoria?></li>
                                        </ul>
                                        <p class="titulo-3">Avaliações: </p>
                                    </div>

                                    <p class="titulo-3">Siga nossas redes
                                        sociais</p>
                                    <ul class="redes-sociais">
                                        <li class="social-icone"><a
                                                href="#"><img
                                                    src="./imagens/instagram_4494489.png"
                                                    style="width: 30px;"
                                                    alt></a></li>
                                        <li class="social-icone"><a
                                                href="#"><img
                                                    src="./imagens/twitter_176658.png"
                                                    style="width: 30px;"
                                                    alt></a></li>
                                        <li class="social-icone"><a
                                                href="#"><img
                                                    src="./imagens/facebook-logo_2504792.png"
                                                    style="width: 30px;"
                                                    alt></a></li>
                                    </ul>

                                </div>
                            </div>
                            <div class="card-avaliacao">
                                <div class="estrelas">
                                    <label for="avaliar">Avaliar:</label>
                                    <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                                    <label for="cm_star-1"><i class="fa"></i></label>
                                    <input type="radio" id="cm_star-1" name="fb" value="1"/>
                                    <label for="cm_star-2"><i class="fa"></i></label>
                                    <input type="radio" id="cm_star-2" name="fb" value="2"/>
                                    <label for="cm_star-3"><i class="fa"></i></label>
                                    <input type="radio" id="cm_star-3" name="fb" value="3"/>
                                    <label for="cm_star-4"><i class="fa"></i></label>
                                    <input type="radio" id="cm_star-4" name="fb" value="4"/>
                                    <label for="cm_star-5"><i class="fa"></i></label>
                                    <input type="radio" id="cm_star-5" name="fb" value="5"/>
                                  </div>
                                  <div class="assistir">
                                    <p>Vou ver.</p>
                                  </div>
                                  <div class="criticas">
                                   
                                    <p>Escrever uma crítica</p>
                                  </div>
                            </div>
                        </div>
                    </div><!--Fim classe conteudo-->
                    <div class="propaganda">
                        <div class="titulo-1"><p>Propaganda:</p></div>
                        <div class="card-propaganda">
                            <h3>Espaço reservado para propaganda</h3>
                        </div>
                    </div>
                    <div class="sinopse">
                        <div class="titulo-1"><p>Sinopse:</p></div>
                        <div class>
                            <p class="texto-1">
                            <?= $sinopse?>
                            </p>
                        </div>
                    </div>
                </section> 
            </div><!--Fim da classe container-->

            <footer class="rodape">
                <h1>rodape</h1>
            </footer>
        </main>
    </body>
</html>