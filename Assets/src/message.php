<?php
$hostname = "localhost";
$username = "root";
$passworddb = "";
$databasename = "bot";

//conectando a base de dados
  $conn = mysqli_connect($hostname, $username,$passworddb,$databasename) or die("Data error");

    //pegando a mensagem do usuario pelo ajax
  $getMesg = mysqli_real_escape_string($conn, $_POST['text']);

  //checando se a query esta na base
  $check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%'";
  $run_query = mysqli_query($conn, $check_data) or die("error");


  if(mysqli_num_rows($run_query) > 0){
    //fetching replay from the database accorde to the user
    //fetcg replay da base de dados de acordo com o solicitado pelo usuario
    $fetch_data = mysqli_fetch_assoc($run_query);

    //storing reply to a varible whitch we'll send to ajax
    //armazenando o reply enquanto devolvemos pelo ajax
    $replay = $fetch_data['replies'];
    echo $replay;
  }else{
      echo "Me desculpa, não estou entendendo o que esta querendo dizer..";
  }