<?php
require_once __DIR__ . '/auxilares/auxiliar.php';

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
        
    </head>
    <body>
        <h1>Qualquer coisa</h1>
        <form action="" method="get">
            <label for="name">Digite o id</label>
            <input type="number" name="name" id="id"  placeholder="Max <?= $count_ent ?>" required max="<?= $count_ent ?>">
        </form>

        
    </body>
</html>