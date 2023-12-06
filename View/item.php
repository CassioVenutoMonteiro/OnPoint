<?php

session_start();
if (isset($_SESSION["id"])) {
    $id = $_SESSION["id"];
}else{
    header('Location: ./login.php');
}
require_once '../Controller/conecta.php';

$sql = "SELECT * FROM item WHERE usuario_fk = :id";
$stmt = FabricaConexao::Conexao()->prepare($sql);
$stmt->bindParam(':id',$id,PDO::PARAM_INT);
$stmt->execute();
$itens = $stmt->fetchAll(PDO::FETCH_CLASS);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
    <a href="addItem.php">adicionar item</a>
visualizar itens:<br>
    <?php

        foreach($itens as $itens){
            ?>
                <div class="card">
                    <li>
                        <ul><img src="<?= $itens->arquivo ?>" alt="item"></ul>
                        <ul>Nome: <?= $itens->nome ?></ul>
                        <ul>Tipo: <?= $itens->tipo ?></ul>
                        <ul>Evento: <?= $itens->evento ?></ul>
                        <ul>Cor: <?= $itens->cor ?></ul>
                    </li>
                    

                </div>
            <?php
        }
    
    ?>
    </section>
</body>
</html>
