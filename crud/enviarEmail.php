<?php

//include ('conexao.php');
require_once ('phpmailer/class.phpmailer.php');


$email = 'notificador.sistemadeprocessos@gmail.com'; //email da pessoa cujo acabou de criar a tarefa ou que criou a tarefa anteriormente
$nome = 'Usuario '; // nome da pessoa cujo acabou de criar tarefa ou que criou a tarefa

$email_remetente = 'notificador.sistemadeprocessos@gmail.com'; //email do disparador
$senha = '@mbientes2015'; // senha do sistema disparador

	echo "Inicio" ;
$PHPMailer = new PHPMailer();
 
// define que será usado SMTP
$PHPMailer->IsSMTP();
 
// envia email HTML
$PHPMailer->isHTML( true );
 
// codificação UTF-8, a codificação mais usada recentemente
$PHPMailer->Charset = 'utf-8';
 
// Configurações do SMTP
$PHPMailer->SMTPAuth = true;
$PHPMailer->Mailer = 'smtp'; 
$PHPMailer->SMTPSecure = 'ssl';
$PHPMailer->Host = 'smtp.gmail.com';
$PHPMailer->Port = 465;
$PHPMailer->Username = $email_remetente;
$PHPMailer->Password = $senha;

// E-Mail do remetente (deve ser o mesmo de quem fez a autenticação
// nesse caso seu_login@gmail.com)
$PHPMailer->From = $email;
 
 
$remetente = utf8_decode('Sistema Notificador Gerenciamento de Processos');
// Nome do rementente
$PHPMailer->FromName = $remetente;		

// corpo da mensagem em modo texto
$PHPMailer->AltBody = 'Mensagem em texto';
// assunto da mensagem
$PHPMailer->Subject = utf8_decode('[NOVO] Nova Tarefa Registrada - Sistema Gerenciador de Processos');
 
$mensagem = utf8_decode("Caro(a) ".$nome.",<br /> Este e um sistema automatico. Por favor nao responda.  <br /> <br /> Voce possui uma nova tarefa.");

$PHPMailer->Body = $mensagem;
 
// corpo da mensagem em modo texto
$PHPMailer->AltBody = 'Mensagem em texto';
 
// adiciona destinatário (pode ser chamado inúmeras vezes)
$PHPMailer->AddAddress($email);

if ($PHPMailer->Send()){
	include("\crud\projeto.php");		
} else {
	echo "Erro: Email de notificacão não pode ser enviado! ",  $PHPMailer->ErrorInfo;
}


?>
 
