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
            <div class="card">
                <h2><?= $total_funcionarios ?></h2>
                <p>Total de Funcionários</p>
            </div>
            <div class="card">
                <h2><?= $ativos ?></h2>
                <p>Funcionários Ativos</p>
            </div>
            <div class="card">
                <h2><?= $inativos ?></h2>
                <p>Funcionários Inativos</p>
            </div>
        </div>
    </div>
</body>

</html>