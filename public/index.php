<?php

if (!isset($_SESSION)) session_start();

$error = false;


if (count($_POST)) {

    if (empty($_POST['email'])) {
        $error = "Credenciais inválidas";
    }

    if (empty($_POST['password'])) {
        $error = "Credenciais inválidas";
    }

    if ($error) {
        echo $error;
    } else {
        include("database.php");

        $email =  $_POST['email'];
        $password =  $_POST['password'];

        $stmt = $mysqli->prepare("SELECT id, email, password, admin FROM users WHERE email = ? LIMIT 1");
        $stmt->bind_param("s", $email);
        $stmt->execute();

        $user = $stmt->get_result()->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['admin'] = $user['admin'];

            header("Location: home.php");
        } else {
            echo  "Credenciais inválidas";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>

    <main>
        <div class="container">
            <h1>Login</h1>

            <form method="post" action="">
                <div>
                    <label class="form-label" for="email">E-mail</label>
                    <input type="text" name="email" id="email" class="form-control" <?php if(isset($_POST['email'])) echo $_POST['email'] ?>>
                </div>
                <div>
                    <label class="form-label" for="password">Senha</label>
                    <input type="password" name="password" id="password" class="form-control" <?php if(isset($_POST['password'])) echo $_POST['password'] ?>>
                </div>
                <button class="btn btn-primary mt-3" type="submit">Entrar</button>
            </form>
            <hr>

            <p>Não possui cadastro? <a href="register.php">Clique aqui</a></p>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>