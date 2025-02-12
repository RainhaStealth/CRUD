<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./router/loginRouter.php?acao=validarLogin" method="POST">
        <input type="text" name="nome" placeholder="Digite o seu nome">
        <input type="password" name="senha" placeholder="Digite a sua senha">
        <button type="submit">Entrar</button>
    </form>

    <a href="./view/cadastro/index.php">Crie sua conta agora</a>

    
</body>
</html>