<?php

try{
    $myPDO = new PDO("pgsql:host=localhost;dbname=postgres","postgres","08499784593");
}catch(PDOException $e){
    echo $e->getMessage();
}
session_start();
$nome = $_POST['name'];
$idade = $_POST["age"];
$email = $_POST["mail"];
$cidade = $_POST["city"];
$whatsapp = $_POST["whatsapp"];
$_SESSION['email'] = '';

$sql = "INSERT INTO participante(nome,idade,email,cidade,whatsapp) VALUES('".$nome."',".$idade.",'".$email."','".$cidade."','".$whatsapp."');";
try {
    $stmt = $myPDO->prepare("select email from participante where email='$email'"); 
    $stmt->execute(); 
    $row = $stmt->fetchAll();
        if(empty($row)){
            $_SESSION['email'] = false;
            $myPDO->query($sql);
            
        }else{
            $_SESSION['email'] = true;
            header('location:dados.php');
        }
    
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="pattern.css">
        <script src="layout.js"></script>
        <title>IFdiscord</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.38">
    </head>
    
    <header>
        <h1 id="logo">HackathoN</h1>
    </header>
    <body>
        <div id="container">
            <h2><?php echo $nome?>, seu cadastro foi efetuado com sucesso<br> fique de olho no cronograma!</h2>
        </div>
        <footer id="footer">
            <h2 id="rodape">1ª Maratona de programação do IFbaiano <br> Campus Guanambi</h2>
        </footer>
    </body>
</html>