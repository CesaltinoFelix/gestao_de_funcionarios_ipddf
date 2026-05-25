<?php
    include "conexao.php";

    if(isset($_POST['email']))
    {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //pegar usuarios;
        $query = "select * from usuarios where email = '$email' and senha = '$senha'";

        $res = mysqli_query($con, $query);
        while($row = mysqli_fetch_assoc($res))
        {
            var_dump($row);
        }
        
        //codigo para insert dos dados
        //  $query = "insert into usuarios values (NULL, 'teste', '$email', '$senha')";
        // $res = mysqli_query($con, $query);

        
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<?php include "head.php" ?>
<body>
    <div class="main-content">
        <div class="container">
            <div class="form-cadastro">
                <h1>Login</h1>
                <form method="post" action="#">
                    <input type="email" placeholder="Email" name="email">
                    <input type="text" placeholder="senha" name="senha">
                    <button type="submit">Log in</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>