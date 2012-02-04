<?php 
/* 
    Copyright 3Birds Soluções Web - 2012	

    This file is part of 'Template Em Breve'.

    'Template Em Breve' is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    Foobar is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with 'Template Em Breve'.  If not, see <http://www.gnu.org/licenses/>.
*/

	/*	Variáveis			*/
	/*	Variáveis de email 		*/
	$remetenteUsuario="";	// usuário de email do seu site, ex: contato@nomedosite.com.br
	$remetenteSenha="";	// senha do email do seu site
	$remetenteSMTP="";	// endereço de smtp, ex: stmp.nomedosite.com.br
	$remetenteNome="";	// Nome que irá aparecer como remetente da mensagem
	$mensagemAssunto="";	// Assunto do email que será enviado

	/*	Variáveis de banco de dados	*/
	$bdNome="";		// Nome do banco de dados
	$bdHost="";		// Host do banco de dados
	$bdUsuario="";		// Nome de usuário do banco de dados
	$bdSenha="";		// Senha do banco de dados
	$tabelaNome="";		// Nome da tabela de newsletter
	$colunaNome="";		// Nome da coluna da tabela	

	$site_url="";		// Url do site



/****  PHP validate email *  http://www.webtoolkit.info/ ***/
 function isValidEmail($email){return eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email);}

/* Verifica qual é sistema operacional do servidor para ajustar o cabeçho de forma correta.  */
if(PATH_SEPARATOR == ";") $quebra_linha = "\r\n"; //Se for Windows
else $quebra_linha = "\n"; //Se "não for Windows" 

$email=$_POST['email'];

/**Cadastro na base**/
$con = mysql_connect($bdHost, $bdUsuario, $bdSenha) or die(mysql_error("Erro ao conectar com o banco de dados"));
mysql_select_db($bdNome) or die(mysql_error("Erro ao conectar com o banco de dados"));

/** Envia email de confirmação							------------------------------------**/
require_once('phpmailer/class.phpmailer.php');
$body ="
		<img src='".$site_url."imagem-exemplo-por-gustavo-resende.png'/>
		<h1>Olá ".$email.", agradecemos o interesse em se inscrever em nossa newsletter para ficar sabendo das novidades do site.</h1>
		<br/><br/>Atenciosamente,<br/><br/>
		<br/><br/>
		<strong>".$nomeDoSite."</strong>
		<p>
			<br/><br/><br/>
			<small>Se você não pediu para se cadastrar em ".$site_url." simplesmente desconsidere esta mensagem.</small>
		</p>";
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = $remetenteSMTP;
$mail->SMTPAuth = true;
$mail->Username = $remetenteUsuario;
$mail->Password = $remetenteSenha;
$mail->From = $remetenteUsuario;
$mail->FromName = $remetenteNome;
$mail->AddReplyTo($remetenteUsuario);
$mail->AltBody    = "Para visualizar a mensagem, por favor, use um visualizador e-mail compatível!";
$mail->AddAddress($email);
$mail->IsHTML(true);
$mail->Subject = $mensagemAssunto;
$mail->Body = $body;

/*Verificações*/

if(!isValidEmail($email)){
	exit ("<script type=\"text/javascript\">alert(\"Esse email não é válido :(\");history.go(-1);</script>\n");	
}else{
	if(mail && isValidEmail($email) && $mail->Send()){
		echo "<script type=\"text/javascript\">alert(\"Cadastro efetuado com sucesso!\");window.location = \"email-adicionado-com-sucesso\";</script>\n";
		mysql_query("insert into ".$tabelaNome." (".$colunaNome.") values ('$email')") or die(mysql_error());
	}else {
		echo "<script type=\"text/javascript\">alert(\"Ocorreu um erro.\");history.go(-1);</script>\n";
	}
}

// Fecha a conexão
mysql_close($con);

?>

