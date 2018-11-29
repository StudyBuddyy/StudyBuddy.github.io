<html>
 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <head>
	<link rel="stylesheet" href="css/style.css" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">

        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    </head>
    <body>
        <script type="text/javascript" src="cordova.js"></script>
  <body class="pane" background="background_esc.png">

<!--CÓDIGO PHP-->
	<?php
	//Remover aviso de update do MYSQL
	error_reporting(E_ALL ^ E_DEPRECATED);
	//Ligação á base de dados
	$connect = mysql_connect("localhost", "root", "") or die("Erro");
	$db = mysql_select_db("loginregisto",$connect) or die("Erro");

	//Adicionar registos á base de dados
if (isset($_POST["registar"])) {
	//$_POST, transporte de variáveis atráves de um formulário
	$nome = $_POST["nome"];
	$email = md5($_POST["email_registar"]);
	$password = md5($_POST["password_registar"]);
	$password_rep = md5($_POST["password_rep"]);
	$verificar = mysql_query("SELECT * FROM users WHERE email='$email'");
	//Verificações com "if's"
	if (mysql_num_rows($verificar)>0){
			echo '<h4 align="center">Esta conta já está registada!</h2>';
		}elseif ($_POST["email_registar"]=="") {
			echo '<h4 align="center">Tem de escrever um e-mail!</h2>';
		}elseif ($_POST["password_registar"]=="") {
			echo '<h4 align="center">Tem de escrever uma palavra-passe!</h2>';
		}elseif ($_POST["password_registar"]==!$_POST["password_rep"]) {
			echo '<h4 align="center">As palavras-passe não coincidem!</h2>';
		}elseif ($nome=="") {
			echo '<h4 align="center">Escreva o seu nome!</h2>';
		}else{
			$insert = mysql_query("INSERT INTO users (nome, email, password) VALUES ('$nome', '$email', '$password')");
			echo '<h4 align="center">Conta registada!</h2>';
		}
	}
?>	

  <div class="wrapper">
<table class="box">
  <tr>
    <td> <img src="logo.png" width="25%"> </td>
  </tr>
  <tr>
  <form method="POST">
    <td>    		
	<input id="input" type="text" name="nome" placeholder='&#61447;  Username' /></td>
  </tr>
  <tr>
  </tr>
  <tr>
  </tr>
  <tr>
  </tr>
  <tr>
  </tr>
    <tr>
    <td>    		<input id="input" type="email" name="email_registar" placeholder=' E-Mail' /></td>
  </tr>
    <tr>
  </tr>
  <tr>
  </tr>
  <tr>
  </tr>
  <tr>
  </tr>
    <tr>
    <td>    		<input id="input" type="password" name="password_registar" placeholder='&#61475;  Password' /></td>
  </tr>
    <tr>
  </tr>
  <tr>
  </tr>
  <tr>
  </tr>
  <tr>
  </tr>
    <tr>
    <td>    		<input id="input" type="password" name="password_rep" placeholder='&#61475;  Confirmar Password' /></td>
  </tr>
  <tr>
    <td>      		<input class="button" type="submit" name="registar"   value="REGISTA-TE"></form></td>
  </tr>
    <tr>
    <td>       <h1>Já tens uma conta?<a href="index.php"><h2>Faz Login!</h2></a></h1></td>
  </tr> 
  <tr> 
    <td>    
  </tr>
</table>
 


</div>
 
     
    </body>
</html>
</table>
 


</div>
 
     
    </body>
</html>
