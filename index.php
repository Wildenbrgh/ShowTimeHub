<?php
require_once __DIR__ . '/auxiliares/auxiliar.php';

$sql = "SELECT id, nome from listagem_entretenimentos WHERE `status` = 'ativo'";

$query = mysqli_query($conn, $sql);

$ent_list = mysqli_fetch_all($query, MYSQLI_ASSOC);

$count_ent = mysqli_num_rows($query);


// var_dump($fetch);
?>


<DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
        <title>algo</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
    </head>
    <body>
        <h1>Qualquer coisa</h1>
        <div class="nav-wrapper">
            <form action="/pagina_pesquisa/pesquisa.php" method="get">
                <div class="input-field">
                    <input type="number" name="name" id="id"  placeholder="Max <?= $count_ent ?>" required max="<?= $count_ent ?>">
                    <label class="label-icon" for="name"><i class="material-icons">Pesquisar</i></label>
                    <i class="material-icons">close</i>
<!-- <input type="number" name="name" id="id"  placeholder="Max !!!" required max="!!!">-->
<!--<label for="name">Digite o id</label>-->

                <input type="submit" value="submit" name="submit">
            </form>
        </div>

<!--
        
  <nav>
    <div class="nav-wrapper">
      <form>
        <div class="input-field">
          <input id="search" type="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>
-->

        
    </body>
</html>