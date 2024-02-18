<?php


if (isset($_POST)) {
    $error = false;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $birthday = $_POST['birthday'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];


    if (empty($name)) {
        $error = "Nome inválido.";
    }

    if (empty($email)) {
        $error = "E-mail inválido.";
    }

    if (empty($birthday)) {
        $error = "Data de nascimento inválida.";
    }

    if (empty($password) || empty($confirm_password)) {
        $error = "Senha inválida.";
    }else if($password !== $confirm_password){
        $error = "Senhas não conferem.";
    }

    if($error){
        echo $error;
        }eslse{
            
        }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>

<body>

</body>

</html>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Registro</title>
</head>

<body>

    <main>
        <div class="container">
            <h1>Login</h1>

            <form method="post" action="">
                <div>
                    <label class="form-label" for="name">Registro</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div>
                    <label class="form-label" for="email">E-mail</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
                <div>
                    <label class="form-label" for="birthday">Data de nascimento</label>
                    <input type="text" name="birthday" id="birthday" class="form-control">
                </div>
                <div>
                    <label class="form-label" for="password">Senha</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div>
                    <label class="form-label" for="confirm_password">Confirme sua senha</label>
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control">
                </div>
                <button class="btn btn-primary mt-3" type="submit">Cadastrar</button>
            </form>
            <hr>

            <p>Já possui cadastro? <a href="index.php">Clique aqui</a></p>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>