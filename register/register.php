<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../login/style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Crie sua conta!</title>
    </head>
    <body>
        <div class="link-bar">
            <a href="../login/login.html" style="font-weight: 300; font-size: 15px;"><i class="fa-solid fa-arrow-left"></i> Voltar</a>
        </div>
        <div class="form-container">
            <img src="../logo/3.png" class="logo" alt="logo">
            <form action="../database_connect.php" method="post">
                <div class="field">
                    <input type="email" name="email" id="" placeholder="E-mail" required autocomplete="off">
                </div>
                <div class="field">
                    <input type="text" name="telefone" id="" placeholder="Telefone" required autocomplete="off">
                </div>
                <div class="field">
                    <input type="password" name="senha" id="" placeholder="Senha" required autocomplete="off">
                </div>
                <div class="field">
                    <button type="submit">Criar</button>
                </div>
            </form>
        </div>
    </body>
    <script src="https://kit.fontawesome.com/b5370a6cd6.js" crossorigin="anonymous"></script>
</html>