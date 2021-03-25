<?php  

	$nom=$_POST['name']; 
	$mail=$_POST['email']; 
	$objet=$_POST['subject']; 
	$message=$_POST['message']; 
	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n"; 
	$headers .= "From: $nom <$mail>\r\nReply-to : $nom <$mail>\nX-Mailer:PHP"; 
	$subject="$objet";  
	$destinataire="hamadouhelafita@gmail.com"; 
	$body="$message"; 

	if (mail($destinataire,$subject,$body,$headers)) {
			header('Location:index.html');
	} 
	else { 	
		header('Location:index.html');
	}
?>