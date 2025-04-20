<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['foto_perfil']) && $_FILES['foto_perfil']['error'] === 0) {
        $nomeTemporario = $_FILES['foto_perfil']['tmp_name'];
        $nomeFinal = uniqid() . "_" . $_FILES['foto_perfil']['name'];
        $caminhoFinal = "../uploads/" . $nomeFinal;

        if (move_uploaded_file($nomeTemporario, $caminhoFinal)) {
            echo "<p style='color: green; text-align: center;'>Foto enviada com sucesso!</p>";
            echo "<p style='text-align: center;'><img src='$caminhoFinal' width='150' style='border-radius: 50%;'></p>";
        } else {
            echo "<p style='color: red;'>Erro ao mover a foto!</p>";
        }
    } else {
        echo "<p style='color: red;'>Erro no upload da foto!</p>";
    }
}
?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Aluno - Wiki UEM</title>
    <link rel="stylesheet" href="../assets/css/style_aluno.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
        <img src="../assets/img/aluno.jpeg" alt="Aluno" class="icon">
        <h1>Cadastro de Aluno</h1>
        <p style="color: red; text-align: center;">* indica Campos obrigatórios</p>

        <form method="POST" action="#" enctype="multipart/form-data">
            <label>Nome completo:<span style="color: red;">*</span></label>
            <input type="text" name="nome" required>

            <label>Email acadêmico (uem.ac.mz):<span style="color: red;">*</span></label>
            <input type="email" name="email_academico" required  pattern=".+@uem\.ac\.mz">

            <label>Email pessoal:<span style="color: red;">*</span></label>
            <input type="email" name="email_pessoal" required>

            <label>Foto de Perfil:</label>
            <input type="file" name="foto_perfil" accept="image/*" required>

            <label>Senha:</label>
            <input type="password" name="senha" required>

            <label>Confirmar senha:</label>
            <input type="password" name="confirmar_senha" required>

            <label>Idade:<span style="color: red;">*</span></label>
            <input type="number" name="idade" min="17" required>

            <label>Curso:</label>
            <select name="curso" required>
                <option value="">-- Selecione --</option>
                <option>Engenharia do Ambiente</option>
                <option>Engenharia Electrica</option>
                <option>Engenharia Electronica</option>
                <option>Engenharia informatica</option>
                <option>Engenharia Civil</option>
                <option>Engenharia Quimica</option>
                <option>Engenharia Mecanica</option>
                <option>Engenharia de Manutencao industrial</option>          
            </select>

            <label>Turno:</label>
            <select name="turno" required>
                <option value="">-- Selecione --</option>
                <option>Manhã</option>
                <option>Noite</option>
            </select>

            <label>Ano do curso:</label>
            <select name="ano" required>
                <option value="">-- Selecione --</option>
                <option>1º Ano</option>
                <option>2º Ano</option>
                <option>3º Ano</option>
                <option>4º Ano</option>
                <option>5º Ano</option>
            </select>

            <label>Áreas de interesse:</label>
            <textarea name="interesses" rows="3" placeholder="Ex: IA, Redes, Desenvolvimento Web..."></textarea>

            <label>Biografia:</label>
            <textarea name="bio" rows="4" placeholder="Conte um pouco sobre você..."></textarea>

            <p style="margin-top: 20px;">
                <input type="checkbox" required> Eu li e aceito a <a href="../politicas/uso.php" target="_blank">Política de Uso</a>.
            </p>

            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>
