<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia Treino Hard</title>
    <!--bootstrap-->
         <link rel="icon" type="image/png" href="../icon/iconth.png"/>

    <!--css-->
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../js/main.js"></script>
</head>
<body>
<?php
    include('navbar.php')
?>

    <div class="wrapper" style="margin-top:100px">
        <div class="title">Tire suas duvidas Aqui!</div>
        <div class="form">
            <!--Criando o boot-->
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Boa tarde!, como posso ajuda-lo?</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                 <input id="data" type="text" placeholder="Olá!, digite sua mensagem aqui..." required>
                 <button id="send-btn">Enviar</button>
            </div>
        </div>
    </div>

</body>
</html>