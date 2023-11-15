<?php
        session_start();
        if (isset($_POST['usuario'])) {
            $_SESSION['usuario'] = $_POST['usuario'];
            header('Location: index.php');
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

<?php
    if (isset($_SESSION["usuario"])){
?>

    <div class="bloco">
        <h1><?php echo "Bem vindo ao seu perfil " .  $_SESSION['usuario'] . "!"; ?></h1>
    </div>

</body>
</html>
<?php
    }

else{
?>
<body class="login">
    
    <div class="bloco">
        <h1><p>Faça Login para continuar!</p></h1>
        <h2>Caso não tenha login<br> insira seu nome para ser registrado!</h2>

        <?php if (isset($_SESSION["usuario"])){?>
        <form action="login.php" method="POST"> 

        <?php }else{?>

        <form action="registro.php" method="POST">
        <?php }?>

            <label for="">Usuário</label>
            <input type="text" name="usuario" placeholder="Insira seu nome aqui!" required>
            <button type="submit">Enviar</button>
        </form>
        
        
    </div>

 
</body>
</html>
    <?php
    }
    ?>