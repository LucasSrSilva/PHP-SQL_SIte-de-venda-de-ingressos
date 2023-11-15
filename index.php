<?php
    session_start();
    
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
    <h1 class="h1index">Próximos eventos</h1>

    <div class="eventos">    
        <div class="patati">
            <a href="vendas.php?evento=circo"> 
                    <img src="imgs/patatipatata.png" alt="Circo do patati patata">
                <p>Circo do patati patata</p>
            </a>
        </div>
        <div class="weeknd">
            <a href="vendas.php?evento=weeknd">
                    <img src="imgs/weeknd.jpg" alt="Show The Weeknd">
                <p>The weeknd Show</p>
            </a>
        </div>
        <div class="shrek">
            <a href="vendas.php?evento=shrek">
                <img src="imgs/shrek.png" alt="ShrekRave">
                <p>ShrekRave</p>
            </a>
        </div>
        <div class="festival">
            <a href="vendas.php?evento=festival">
                <img src="imgs/festival.jpg" alt="EletroFestival 2024">
                <p>EletroFestival 2024</p>
            </a>
        </div>
        <div class="festa">
            <a href="vendas.php?evento=fiesta">
                <img src="imgs/fiesta.jpg" alt="PartyFiesta">
                <p>PartyFiesta</p>
           </a>
        </div>
    </div>
   

</body>
</html>
