<?php
  $nome = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $contact = "horaciobarreto43@gmail.com";
  $destino = $contact;

  $assunto = "Contato - Currículo";
  $headers = 'MIME-Version: 1.0'.'\r\n';
    $headers = "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    $headers = "From: $nome <$email>";

  $enviaremail = mail($destino, $assunto, $message, $headers);
  if($enviaremail){
    $msg = "E-mail enviado!";
  }else{
    die("Deu ruim, fml");
  }
?>