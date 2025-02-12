<?php
require __DIR__ . "/../../controller/usuarioController.php";
$usuarioController = new UsuarioController();

$perfil = "Cadastro";
$acao = "create";
$usuario = [
    "nome" => "",
    "senha" => "",
    "id" => ""
];

if(isset($_GET["id"])){
    $id = $_GET["id"];
    $perfil = "Editar";
    $acao = "update";
    $usuario = $usuarioController->GetUsuarioById($id);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $perfil ?></h1>
    <form action="../../router/usuarioRouter.php?acao=<?php echo $acao?>" method="POST">
        <input type="hidden" value="<?php echo $usuario["id"]?>" name="usuario_id">
        <input type="text" name="nome" placeholder="digite o seu nome" value="<?php echo $usuario["nome"]?>">

        <input type="password" name="senha" placeholder="digite a sua senha" value="<?php echo $usuario["senha"]?>">

        <button type="submit"><?php echo $perfil ?></button>
    </form>
</body>
</html>