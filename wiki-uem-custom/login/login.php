<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Login - Wiki UEM</title>
    <link rel="stylesheet" href="../assets/css/style_login.css">
</head>
<body>
    <div class="container-login">
        <h2>Entrar na Wiki Acadêmica</h2>
        <form method="POST" action="login_processa.php">
            <label>Email institucional:</label><br>
            <input type="email" name="email" required><br>

            <label>Senha:</label><br>
            <input type="password" name="senha" required><br>

            <button type="submit">Entrar</button>
        </form>
        <p>
            <a href="../cadastro/tipo_usuario.php">Criar uma conta</a> |
            <a href="recuperar_senha.php">Esqueceu a senha?</a>
        </p>
    </div>
</body>
</html>

