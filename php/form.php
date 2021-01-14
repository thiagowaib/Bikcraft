<?php
$nomeCli = $_POST['nome'];
$emailCli = $_POST['email'];
$telCli = $_POST['telefone'];
$msgCli = $_POST['mensagem'];
// mysqli_set_charset($con, 'utf8');

$to = "test-nfrv3hlt0@srv1.mail-tester.com";
$subject = "Novo Orçamento - Bikcraft";
$txt = "Nome do Cliente:".$nomeCli."\nEmail do Cliente:".$emailCli."\nTelefone do Cliente:".$telCli."\nMensagem:".$msgCli."";

mail($to, $subject, $txt);

// if mail() is bool:
   echo"<script language='javascript' type='text/javascript'>alert('Voce enviou o orçamento!')";
?>