<?php
    session_start();
    $_SESSION['email']='';
    $nome = $_POST["name"];
    $_SESSION['nome'] = $nome;
    ?>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="pattern.css">
        <link rel="stylesheet" href="signup.css">
        <script src="layout.js"></script>
        <title>Página</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.38">
    </head>

    <header>
        <h1 id="logo">HachathoN</h1>
    </header>
    <body>
    
        <div id="container">
        <?php if($_SESSION['email'] != true ){echo '<script>alert("Email já cadastrado")</script>';}?>
            <form id="form" action = "conect.php" method="POST">
                <h2>NOME</h2>
                <input type="text" name="name" required>
                <h2 id="dr">IDADE</h2>
                <input type="number" name="age" required>
                <h2>E-MAIL</h2>
                <input type="email" name="mail" id="mail" required>
                <h2>CIDADE</h2>
                <input type="address" name="city" required>
                <h2>WHATSAPP</h2>
                <input type="tel" name="whatsapp" id="whatsapp" required>
                <input id="but" type="submit" name="signupp" value="PRONTO"></input>
            </form>
        </div>
        <footer id="footer">
            <h2 id="rodape">1ª Maratona de programação do IFbaiano <br> Campus Guanambi</h2>
        </footer>
    </body>
</html>