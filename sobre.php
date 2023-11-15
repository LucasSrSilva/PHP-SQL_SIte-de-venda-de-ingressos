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
    <div>
    Criado por: Lucas Souza Ribeiro da Silva, RGM: 33557560 e Gabriel de Souza Rodrigues 33590524
    <br>
    <br>
    PHP utilizado para o Login: foi feito uma página simples de login apenas com o usuário, assim que você inserir seu nome, o session iniciará e com o Header, redirecionará para a página principal.<br><br>
    Para a venda de Ingressos utilizei <a href="https://pt.stackoverflow.com/questions/175720/enviar-dados-para-uma-outra-p%C3%A1gina-atrav%C3%A9s-de-um-bot%C3%A3o">a href="vendas.php?evento=X"</a> para redirecionar para a página de vendas com a irfomração do evento escolhido.<br>
    Na página de vendas utilizei ifs e else ifs para selecionar o evento de acordo com o que foi selecionado na index.php,<br><br>
    Banco de dados: Foi feito um arquivo registro.php para adicionar o nome do usuario ao banco de dados, caso ele já exista, iniciará o session e será redirecionado ao index.php<br>
    Para armazenar os ingressos comprados pelo usuário, foi criado um form com um input oculto para armazenar o nome do evento,<br> criei variáveis para definir a coluna interia ou meia com o nome do evento, e usei update para somar no banco de dados o número de ingressos comprados.<br>
    Para vizualizar os ingressos utilzie um while com fetch-assoc e inseri na página.
    <hr>
        Imagens utilizadas: <br>
        <a href="https://pixabay.com/pt/illustrations/ingressos-ticket-papel-bilheteria-3238747/">Logo</a> <br>
        <a href="http://encantosdalinda.blogspot.com/2012/02/patati-patata.html">PatatiPatata</a><br>
        <a href="https://www.jointherevolution.net/concerts/shrek-rave/">Shrek</a><br>
        <a href="https://www.gq.com.au/entertainment/film-tv/hbo-the-weeknd-tv-drama/news-story/c33a51021c68f6f3dc22e49442d59b49">The Weeknd</a><br>
        <a href="https://www.istockphoto.com/br/foto/as-pessoas-da-festa-gostam-de-show-no-festival-festival-de-m%C3%BAsica-de-ver%C3%A3o-gm1324561072-409858936?phrase=party">Partyfiesta</a><br>
        <a href="https://www.istockphoto.com/br/foto/multid%C3%A3o-de-p%C3%BAblico-durante-um-show-gm546197492-98623749?utm_source=pixabay&utm_medium=affiliate&utm_campaign=ADP_photo_sponsored_P1&utm_content=https%3A%2F%2Fpixabay.com%2Fpt%2Fphotos%2Fp%25C3%25BAblico-banda-show-multid%25C3%25A3o-1853662%2F&utm_term=audience+band">
            EletroFestival 2024
        </a><br>
        <hr>
        fontes utilizadas: <br>
        <a href="https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner:wght@500&display=swap">EDU TAS Beginner</a><br>
        <hr>
        referencias e estudos:<br>
        https://br.freepik.com/vetores-premium/modelo-de-pagina-de-tela-de-login-plana-moderna_4025403.htm<br>
        https://www.youtube.com/watch?v=qxwqDcGHB50&ab_channel=Inteliogia-Dev%27sInsights<br>
        https://www.youtube.com/watch?v=Gc72ZYSZPSc&t=1596s&ab_channel=Ot%C3%A1vioMiranda<br>
        https://pt.stackoverflow.com/questions/175720/enviar-dados-para-uma-outra-p%C3%A1gina-atrav%C3%A9s-de-um-bot%C3%A3o<br>
        https://stackoverflow.com/questions/15707696/new-mysqli-vs-mysqli-connect<br>
        https://www.youtube.com/watch?v=QOeDE7nPDq0&t=300s&ab_channel=GustavoNeitzke<br>
        https://pt.stackoverflow.com/questions/295701/como-capturar-erro-do-mysql-duplicate-entry-e-exibir-uma-mensagem-na-tela-para#:~:text=A%20solu%C3%A7%C3%A3o%20para%20esse%20problema%20%C3%A9%20pegar%20o,com%20o%20c%C3%B3digo%20e%20a%20descri%C3%A7%C3%A3o%20do%20erro.<br>
        https://vocepergunta.com/library/artigo/read/48163-como-adicionar-um-campo-em-uma-tabela-mysql#:~:text=Como%20adicionar%20um%20campo%20em%20uma%20tabela%20MySQL%3F,nova%20coluna%20chamada%20WEBSITES%20para%20armazenar%2050%20caracteres.<br>
        https://pt.stackoverflow.com/questions/228839/como-inserir-o-dado-em-um-campo-espec%c3%adfico-de-uma-tabela-mysql<br>
        https://pt.stackoverflow.com/questions/243576/exibi%c3%a7%c3%a3o-de-uma-tabela-mysql-na-p%c3%a1gina-html<br>



        <hr>

    </div>
</body>
</html>