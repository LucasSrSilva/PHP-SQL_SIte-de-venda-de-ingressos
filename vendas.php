<?php
session_start();
if (isset($_SESSION['usuario'])) {

    $evento = $_GET['evento'];

    if ($evento === 'circo') {
        $eventoNome = "Circo do Patati Patatá";
    } elseif ($evento === 'weeknd') {
        $eventoNome = "The Weeknd Show";
    } elseif ($evento === 'shrek') {
        $eventoNome = "ShrekRave";
    } elseif ($evento === 'festival') {
        $eventoNome = "EletroFestival 2024";
    } elseif ($evento === 'fiesta') {
        $eventoNome = "PartyFiesta";
    } else {
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
        if (isset($eventoNome)) {
    ?>
        <div class="bloco">
            <h1>Selecione os ingressos que deseja comprar!</h1>
            <h2><?php echo $eventoNome; ?></h2>
            <form action="compra.php" method="GET">
                <label for="inteira">Quantidade de Inteira (R$50 cada):</label>
                <input type="number" name="inteira" value="0" min="0" max="2">
            
                <label for="meia">Quantidade de Meia Entrada (R$25 cada):</label>
                <input type="number" name="meia" value="0" min="0" max="2">

                <input type="hidden" name="evento" value="<?php echo $evento; ?>">
            
                <button type="submit" name="compra">Comprar</button>
            </form>
        </div>
    <?php
        }
    ?>
</body>
</html>
<?php }
else{
    header('Location: login.php');
}
