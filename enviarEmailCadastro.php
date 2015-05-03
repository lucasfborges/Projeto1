<?php

//include ('conexao.php');
require_once ('phpmailer/class.phpmailer.php');

//$email = 'notificador.sistemadeprocessos@gmail.com'; //email da pessoa cujo acabou de criar a tarefa ou que criou a tarefa anteriormente
//$nome = 'Usuario '; // nome da pessoa cujo acabou de criar tarefa ou que criou a tarefa

        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $nome = $_POST['nome'];   

$email_remetente = 'notificador.sistemadeprocessos@gmail.com'; //email do disparador
$senha_remetente = '@mbientes2015'; // senha do sistema disparador

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
$PHPMailer->Password = $senha_remetente;

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
 
$mensagem = utf8_decode("Caro(a) ".$nome.",<br /> Este e um sistema automatico. Por favor nao responda. 
							 <br /> <br /> Voce foi cadastrado com sucesso.
							 <br/> Seu login: ".$login.";
							 <br /> Sua senha:".$senha.".
							 ");

$PHPMailer->Body = $mensagem;
 
// corpo da mensagem em modo texto
$PHPMailer->AltBody = 'Mensagem em texto';
 
// adiciona destinatário (pode ser chamado inúmeras vezes)
$PHPMailer->AddAddress($email);

if ($PHPMailer->Send()){
} else {
	echo "Erro: Email de notificacão não pode ser enviado! ",  $PHPMailer->ErrorInfo;
}


?>
 
