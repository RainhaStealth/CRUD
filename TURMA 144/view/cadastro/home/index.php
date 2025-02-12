<?php
require_once __DIR__ . "/../../controller/usuarioController.php";
$usuarioController = new UsuarioController();
$usuarios = $usuarioController->GetAllUsuarios();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HOME</h1>
    <a href="../cadastro/index.php"><button>Cadastrar usuario</button></a>
    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Senha</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($usuarios as $item){
            ?>
                 <tr>
                    <td><?php echo $item["nome"]?></td>
                    <td><?php echo $item["senha"]?></td>
                    <td>
                        <a href="../cadastro/index.php?id=<?php echo $item["id"]?>"><button>Editar</button></a>

                        <!-- <form action="../../router/usuarioRouter.php?acao=deletarUsuario" method="POST">    
                            <input type="hidden" name="usuario_id" value="<?php echo $item["id"]?>">
                        <button type="submit">Deletar</button>
                        </form> -->
                    </td>
                 </tr>
            <?php
                }
            ?>
        </tbody>
    </table>

</body>
</html>