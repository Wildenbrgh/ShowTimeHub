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
    <title>parte de cima</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <link rel="stylesheet" href="css_index.css">
    
</head>
 <body>
      <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!">one</a></li>
        <li><a href="#!">two</a></li>
        <li class="divider"></li>
        <li><a href="#!">three</a></li>
      </ul>
      <nav>
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo" style="margin-left: 10px;">ShowTimeHub</a>
          <ul class="right hide-on-med-and-down">
          </ul>
        </div>
      </nav>
    </div>
    <div class="pesquisar">
    <p>Pesquise o Id do entretenimento</p>
         
        <nav>
      <div class="nav-wrapper">
        <form action="pesquisa.php" method="get">
          <div>
              <div class="valign-wrapper center-align" class="row">
                  <div class="valign" class="row">
                    <div class="your-div" class="input-field col s6">
                      <input placeholder="Id Max: <?= $count_ent?>" name="name" type="number" class="validate" max="<?= $count_ent?>" min="1">
                    </div>
                  </div>
              </div>
          </div>
        </form>
      </div>
    </nav>
  </div>

 </body>
</html>