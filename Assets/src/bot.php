<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abertura de Empresa -</title>
    <!--css-->
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="title">Chat - OpenSys</div>
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

    <script>
        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);

                $.ajax({
                    url: 'message.php',
                    type:'POST',
                    data: 'text='+$value,
                    success:function(result){
                         $replay = ' <div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                         $(".form").append($replay);

                         //when chat goes down the scroll bar automatically come to the bottom
                         $(".form").scrollTop($(".form")[0].scrollHeight); 
                    }
                });
            });
        });
    </script>
</body>
</html>