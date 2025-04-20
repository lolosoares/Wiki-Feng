<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Professor</title>
    <link type="text/css" rel="stylesheet" href="../assets/css/style_professor.css">
</head>
<body>
    <div class="container">
        <div class="top-icon">
            <img src="../assets/img/professor.jpeg" alt="Professor">
        </div>
        <h2>Cadastro de Professor</h2>
        <p style="color: red; text-align: center;">* Campos obrigatórios</p>

        <form action="cadastro_professor.php" method="POST" enctype="multipart/form-data">
            <label>Nome Completo<span style="color: red;">*</span></label>
            <input type="text" name="nome" required placeholder="*">

            <label>Email Acadêmico<span style="color: red;">*</span></label>
            <input type="email" name="email_academico" required>

            <label>Email Pessoal<span style="color: red;">*</span></label>
            <input type="email" name="email_pessoal" required>

            <label>Senha<span style="color: red;">*</span></label>
            <input type="password" name="senha" required>

            <label>Confirmar Senha<span style="color: red;">*</span></label>
            <input type="password" name="confirmar_senha" required>

            <label>Departamento<span style="color: red;">*</span></label>
            <input type="text" name="departamento" required>

            <label>Área de Atuação</label>
            <input type="text" name="area_atuacao">

            <label>Biografia</label>
            <textarea name="biografia" rows="4"></textarea>

            <label>Foto de Perfil</label>
            <input type="file" name="foto_perfil" accept="image/*">

            <div class="foto-preview">
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    if ($_POST['senha'] !== $_POST['confirmar_senha']) {
                        echo "<p style='color: red;'>As senhas não coincidem!</p>";
                    } elseif (isset($_FILES['foto_perfil']) && $_FILES['foto_perfil']['error'] === 0) {
                        $nomeTemporario = $_FILES['foto_perfil']['tmp_name'];
                        $nomeFinal = uniqid() . "_" . $_FILES['foto_perfil']['name'];
                        $caminhoFinal = "../uploads/" . $nomeFinal;

                        if (move_uploaded_file($nomeTemporario, $caminhoFinal)) {
                            echo "<p style='color: green;'>Foto enviada com sucesso!</p>";
                            echo "<img src='$caminhoFinal'>";
                        } else {
                            echo "<p style='color: red;'>Erro ao mover a foto!</p>";
                        }
                    } elseif (!isset($_FILES['foto_perfil'])) {
                        echo "<p style='color: red;'>Nenhuma foto enviada.</p>";
                    }
                }
                ?>
            </div>

            <p style="margin-top: 20px;">
                <input type="checkbox" required> Eu li e aceito a <a href="../politicas/uso.php" target="_blank">Política de Uso</a>.
            </p>

            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>
