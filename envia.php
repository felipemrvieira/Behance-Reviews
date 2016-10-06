<?php

$nome= $_POST['nome'];
$email= $_POST['email'];
$doc= $_POST['doc'];
$port= $_POST['port'];

$to = "bereviewsmaceio@gmail.com";
$subject = "Incrição Behance Reviews Maceió";
$txt = "Candidato incrito: ". $nome." \nEmail: ".$email. "\nDocumento: ".$doc. "\nLink do portfólio:".$port;
$headers = "From: bereviewsmaceio@gmail.com" . "\r\n" .
"CC: felipemrvieira@gmail.com";

mail($to,$subject,$txt,$headers);

header('Location: https://www.eventick.com.br/behance-reviews-maceio');
exit;