<html>
 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <head>
	<link rel="stylesheet" href="css/style.css" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">

        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    </head>
    <body>
	
	<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	$connect = mysql_connect("localhost", "root", "") or die("Erro");
	$db = mysql_select_db("loginregisto",$connect) or die("Erro");
	
	if (isset($_POST["login"])) {
		$nome = ($_POST["nome"]);
		$password = md5($_POST["password"]);
		$verificar = mysql_query("SELECT * FROM users WHERE nome='$nome' AND password='$password'");
		if (mysql_num_rows($verificar)<=0) {
			echo "<h2>Dados de login incorretos!</h2>";
		}else{
			setcookie("login",$email);
			header("Location: app.html");
		}
	}	
?>
        <script type="text/javascript" src="cordova.js"></script>
  <body class="pane" background="background_esc.png">

  <div class="wrapper">
<table class="box">
  <tr>
    <td> <img src="logo.png" width="25%"> </td>
  </tr>
  <tr>
  </tr>
    <tr>
  </tr>
  <tr>
    <td>    		<form method="POST"><input id="input" type="text" name="nome" placeholder='&#61447;  Username' /></td>
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
    <td>    		<input id="input" type="password" name="password" placeholder='&#61475;  Password' /></td>
  </tr>
  <tr>
    <td>      		<input class="button" id="button" type="submit" name="login" value="LOGIN"></form></td>
  </tr>
    <tr>
    <td>       <h1>Não tens uma conta?<a href="registo.php"><h2>Regista-te!</h2></a></h1></td>
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