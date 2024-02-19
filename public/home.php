<?php

if(!isset($_SESSION)) session_start();

if(isset($_SESSION['id'])) header('Location: index.php');

include("database.php");

$stmt = $mysqli->prepare("SELECT * FROM albuns WHERE user_id = ?");
$stmt->bind_param("i", $_SESSION['id']);
$stmt->execute();

$photos = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Álbum</title>
</head>

<body>

    <head>
        <nav>
            <a href="">Álbum</a>
            <a href="">Perfil</a>
            <a href="">Logout</a>
        </nav>
    </head>

    <main>
        <ul>
            <?php 

                while($photo = $photos->fetch_assoc()){

                }
            ?>
        </ul>
    </main>

</body>

</html>