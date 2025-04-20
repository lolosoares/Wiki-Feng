<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Funcionário</title>
    <link rel="stylesheet" href="../assets/css/style_funcionario.css">
</head>
<body>

<div class="container">
    <div class="icon-top">
        <img src="../assets/img/funcionario.jpeg" alt="Funcionário">
    </div>

    <h2>Cadastro de Funcionário</h2>
    <p class="obrigatorio">* Campos obrigatórios</p>

    <form action="cadastro_funcionario.php" method="POST" enctype="multipart/form-data">
        <label>Nome Completo <span style="color: red;">*</span></label>
        <input type="text" name="nome" required>

        <label>Email Institucional <span style="color: red;">*</span></label>
        <input type="email" name="email" required>

        <label>Senha <span style="color: red;">*</span></label>
        <input type="password" name="senha" required>

        <label>Confirmar Senha <span style="color: red;">*</span></label>
        <input type="password" name="confirmar_senha" required>

        <label>Departamento <span style="color: red;">*</span></label>
        <input type="text" name="departamento" required>

        <label>Cargo ou Função <span style="color: red;">*</span></label>
        <input type="text" name="cargo" required>

        <label>Telefone (opcional)</label>
        <input type="text" name="telefone">

        <label>Biografia ou Descrição Profissional</label>
        <textarea name="biografia" rows="4"></textarea>

        <label>Foto de Perfil</label>
        <input type="file" name="foto_perfil" accept="image/*">
        
        <p style="margin-top: 20px;">
                <input type="checkbox" required> Eu li e aceito a <a href="../politicas/uso.php" target="_blank">Política de Uso</a>.
            </p>

        <button type="submit" class="btn">Cadastrar Funcionário</button>
    </form>
</div>

</body>
</html>
