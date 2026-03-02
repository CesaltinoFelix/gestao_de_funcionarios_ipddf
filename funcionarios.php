<?php
$total_funcionarios = 120;
$ativos = 95;
$inativos = 25;
?>
<!DOCTYPE html>
<html lang="pt-br">
<?php include "head.php" ?>

<body>
    <?php include "sidebar.php" ?>
    <div class="main-content">
        <?php include "navbar.php" ?>
        <div class="container">
            <div class="form-cadastro">
                <h1>Funcionarios</h1>
                <form method="post" action="cadastrar_funcionario.php" enctype="multipart/form-data">
                    <input type="text" placeholder="Nome do funcionario" name="nome_funcionario">
                    <input type="text" placeholder="Cargo" name="cargo_funcionario">
                    <input type="file" name="foto_funcionario" id="foto_funcionario">
                    <button type="submit">Cadastrar Funcionário</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>