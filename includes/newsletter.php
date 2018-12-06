<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

if ($_POST){

	$first_name = $_POST['name']; // requerido
	$last_name = $_POST['lastname']; // requerido
	$email_from = $_POST['email']; // requerido
	$country = $_POST['country']; // requerido
	$iglesia = $_POST['iglesia']; // requerido
	$email_to = "eduardo.linares@elaniin.com"; // cambiar por el correo del cliente
	$subject = 'Suscripción Creative Altar';
	$error_message = "";


	//verifica que la dirección de correo sea válida
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	if(!preg_match($email_exp,$email_from)) {
		$error_message .= 'La dirección de correo proporcionada no es válida.<br />';
	}

	//Se validan las cadenas de texto
	$string_exp = "/^[A-Za-z .'-]+$/";
	if(!preg_match($string_exp,$first_name)) {
		$error_message .= 'El formato del nombre no es válido<br />';
	}

	if(!preg_match($string_exp,$last_name)) {
		$error_message .= 'el formato del apellido no es válido.<br />';
	}

	if(!preg_match($string_exp,$iglesia)) {
		$error_message .= 'el formato de la iglesia no es válido.<br />';
	}

	function clean_string($string) {
		$bad = array("content-type","bcc:","to:","cc:","href");
		return str_replace($bad,"",$string);
	}

	//Este es el cuerpo del mensaje tal y como llegará al correo
	$email_message = "Nueva Suscripción:\n\n";
	$email_message .= "Nombre: ".clean_string($first_name)." ".clean_string($last_name)."\n";
	$email_message .= "Email: ".clean_string($email_from)."\n";
	$email_message .= "País: ".clean_string($country)."\n";
	$email_message .= "Iglesia: ".clean_string($iglesia)."\n";


	//Se crean los encabezados del correo
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	"MIME-Version: 1.0\n" . "Content-type:text/html; charset=UTF-8"."\r\n" .
	'X-Mailer: PHP/' . phpversion();

	$mail_sent = @mail($email_to, $subject, $email_message, $headers);

	if($mail_sent == 1) {
		// echo 'Se ha suscrito con éxito!';
		$msg = 'Se ha suscrito con éxito!';
	}else {
		// echo 'Error! hubo un error en la suscripción...';
		$msg = 'Error! hubo un error en la suscripción...';
	}

	// return $msg;

}

// get some variables
$page_title = 'Suscripción Creative Altar';
$page_description = 'Creative Altar Landing Page';

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="title" content="<?php echo $page_title; ?>">
<meta name="description" content="<?php echo $page_description; ?>">
<title><?php echo $page_title; ?></title>
<link rel="apple-touch-icon" href="assets/favicons/apple-touch-icon.png" sizes="128x128">
<link rel="icon" href="../assets/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" href="../assets/favicons/favicon-16x16.png" sizes="16x16">
<link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="../assets/css/master.css" rel="stylesheet" type="text/css"/>
</head>
	<body>
		<br><br><br>
		<div class="back" style="text-align: center;">
			<h2 class="news-msg" style="color: #fff;"><?php echo $msg; ?></h2>
			<a href="../index">Volver</a>
		</div>
	</body>
</html>
