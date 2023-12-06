<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <label for="tipo">Tipo:</label>
        <input type="text" name="tipo" id="tipo">
        <label for="evento">Evento:</label>
        <input type="text" name="evento" id="evento">
        <label for="cor">Cor:</label>
        <input type="text" name="cor" id="cor">
        <label for="img">Imagem:</label>
        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
        <input type="file" name="img" id="img">
        <input type="submit" name="add" value="adicionar">
    </form>
</body>

</html>
<?php
try {
    if (isset($_POST['add'])) {
        // var_dump($_FILES['img']['name']);
        $uploaddir = "../Assets/img/";
        $uploadfile = $uploaddir . basename($_FILES['img']['name']);
        if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)){
            echo "arquivo enviado com sucesso!!";
        }else{
            echo "Ups! Algo deu errado.";
        }
        print_r($uploadfile);
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
?>