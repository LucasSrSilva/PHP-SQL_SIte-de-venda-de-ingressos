<?php
    session_start();
    $usuario = $_SESSION['usuario'];

    $db_host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "db_showdeingressos";

    $conexao = new mysqli($db_host, $db_username, $db_password, $db_name);
    $sql = "SELECT * FROM meusingressos WHERE usuario = '$usuario'";

    if ($conexao->connect_errno) {
        die("Erro na conexão: " . $conexao->connect_error);
    } else {
        $result = mysqli_query($conexao, $sql);
        if (mysqli_query($conexao, $sql)->num_rows > 0) {
        

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
        <?php
            while ($row = $result->fetch_assoc()) {
              
                echo '<h2>' . $row['usuario'] . '</h2>';
                echo '<p>Circo do Patati e Patata: ' . '<br>' . 'Inteira - ' . $row['circo'] . ', Meia - ' . $row['circomeia'] . '</p>';
                echo '<br>';
                echo '<p>The Weeknd Show:' . '<br>' . 'Inteira - ' . $row['weeknd'] . ', Meia - ' . $row['weekndmeia'] . '</p>';
                echo '<br>';
                echo '<p>ShrekRave:' . '<br>' .  'Inteira - ' . $row['shrek'] . ', Meia - ' . $row['shrekmeia'] . '</p>';
                echo '<br>';
                echo '<p>EletroFestival 2024:' . '<br>' .  ' Inteira - ' . $row['festival'] . ', Meia - ' . $row['festivalmeia'] . '</p>';
                echo '<br>';
                echo '<p>PartyFiesta:' . '<br>' .  ' Inteira - ' . $row['fiesta'] . ', Meia - ' . $row['fiestameia'] . '</p>';
            
        ?>
    </div>
</body>
</html>
<?php
        }
    }
}
?>