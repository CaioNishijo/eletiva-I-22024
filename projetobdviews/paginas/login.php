<?php 
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try{
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            if($email != '' && $senha != ''){
                if($email == 'adm@adm.com' && $senha == '123'){
                    $_SESSION['nome'] = 'Administrador';
                    $_SESSION['acesso'] = true;
                    header('Location: dashboard.php');
                } else {
                    $erro = 'Email ou senha inválidos';
                }
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    require_once 'cabecalho.php'; 
?>

<div class="container mt-5">
    <h2>Login</h2>
    <form method="post" action="">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" name="senha" class="form-control" id="senha" required>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
    <?php
        if(isset($erro)){
            echo '<div class="alert alert-danger mt-3" role="alert">'.$erro.'</div>';
        }
    ?>
</div>
<?php

?>

<?php require_once 'rodape.php'; ?>
