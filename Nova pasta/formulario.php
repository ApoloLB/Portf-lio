<?php

    $nome = addslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $assunto = addcslashes($_POST['assunto']);
    $mensagem = addcslashes($_POST['mensagem'])
    
    $destino = "apololbastos@gmail.com";
    $coletadedados = "Contato - Portifolio Apolo";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Assunto: ".$assunto."\n"."Mensagem: ".$mensagem;

    if(mail($destino,$assunto,$corpo)){
        echo("E-mail enviado com sucesso!")
    }else{
        echo("Houve um erro ao enviar o email")
    }



?>