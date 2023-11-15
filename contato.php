<?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        echo "<p>olá, '$nome', sua mensagem foi enviada com sucesso.</p>";
    }        
?>

<!DOCTYPE html>
<html>
<head>
    <title>ShowDeIngressos</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="conteudo">
            <div><a href="index.php"><img class="logo" src="imgs/logo.png" alt="Logo do site"></a></div>
            <a href="index.php" class="titulo"><div class="titulo">ShowDeIngressos</div>
            <div>
                <a class="hlink" href="sobre.php">Sobre</a></li>
                <a class="hlink"href="contato.php">Contato</a></li>   
                <?php
            if(isset($_SESSION["usuario"])){
                echo '<a class="hlink"href="ingressos.php">Meus ingressos</a></li>';
            }
            ?>  
            </div>
            <?php
            if(isset($_SESSION["usuario"])){
                echo '<a href="login.php"><button>Perfil</button></a>';
            }
            else{
                echo '<button><a href="login.php">Login</a></button>';
            }
            ?>
        </div>
    </header>
    <div class="bloco">
    <form method="post" action="contato.php">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="mensagem" textarea="150px">Mensagem:</label>
            <textarea rows="10" cols="50" id="mensagem" name="mensagem" required></textarea>

            <input type="submit" value="Enviar">
    </form>
    </div>