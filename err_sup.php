<?php

	$err_email=trim($_POST['err_email']);
	$err_url=$_POST['err_url'];
	$err_desc=$_POST['err_desc'];
	$destinatario='info@redondows.com';
	
//	if ($err_email) $from = "From: $err_email\nReply-To: $err_email\n"; 
//	else            $from = "From: $destinatario\nReply-To: $destinatario\n";
	if (!$err_email) $err_email = 'noname@none.com';
	$from = "From: $err_email\nReply-To: $err_email\n"; 
	$subject = " :> Mensaje desde FSx-Connector Tutorial";
	
/*	
        $your_email = 'your@email.com';
		$from    = "From: $email\r\nReply-To: $email\r\n"; 
        $header  = "MIME-Version: 1.0\r\n"."Content-type: text/plain; charset=iso-8859-1\r\n";
        $content = "$body\r\n\r\n$name";
        
        include('../classes/function.word_wrap.php');
        $content = word_wrap($content,70);
        
        mail($your_email,$subject,$content,$from.$header);
*/

	//Estoy recibiendo el formulario, compongo el cuerpo
	$cuerpo = "<h1>Un mensaje desde FSx-Connector Tutorial</h1>";
		
	$cuerpo .= "<p>El Usuario " . $err_email . ", te envía este mensaje relativo a la url " . $err_url . ".</p>";
//	$cuerpo .= "<p>Tu email: " . $destinatario . "</p>";
	$cuerpo .= "<p>Mensaje: </p>";

	$cuerpo = $cuerpo.utf8_encode($err_desc);

	//mando el correo...
	mail($destinatario,
		$subject,
		$cuerpo,
		$from."MIME-Version: 1.0\nContent-type: text/html; charset=UTF-8"
	);

echo 'Su mensaje se ha enviado.';

?>

