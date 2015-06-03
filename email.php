<?php
ini_set('default_charset','UTF-8');

    $name     =   $_POST['nome']; //pega os dados que foi digitado no ID name.
    $email    =   $_POST['email']; //pega os dados que foi digitado no ID email.
    $subject  =   $_POST['assunto']; //pega os dados que foi digitado no ID subject.
    $message  =   $_POST['mensagem']; //pega os dados que foi digitado no ID message.

    $headers  = "MIME-Version: 1.0";
    $headers .= "Content-type: text/html; charset=iso-8859-1";
    $headers .= "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
 
/*abaixo será os dados que serão enviado para o email
cadastrado para receber o formulário.*/
 
       $corpo = "Formulário enviado\n";
       $corpo .= "Nome: " . $name . "\n";
       $corpo .= "Email: " . $email . "\n";
       $corpo .= "Comentários: " . $message . "\n";
 
       $email_to = 'bruno.carvalho@hotmail.de'; //substitua este email pelo seu email do seu site.
 
    $status = mail($email_to, $subject, $corpo, $headers); //enviando o email.
 
    if($status) {
        echo "<script> alert('Formulário enviado com sucesso.'); </script>"; //verifica se foi enviado o email com sucesso.
    }
    else {
        echo "<script> alert('Falha ao enviar o Formulário.'); </script>"; //se houve algum erro de envio.
    }
    echo "<script> window.location.href = 'http://bruno.url.ph'; </script>"; //aqui você coloca uma página que será redirecionada após o envio do formulário.
 
?>