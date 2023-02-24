<!DOCTYPE html>

<html>

	<head>
		<title>CV Karol Lach - kontakt</title>
		<link rel="stylesheet" href="CV_style_kontakt.css">
		<meta charset="utf-8">
		<meta http-equiv="Content-Language" content="pl">
		<meta http-equiv="reply-to" content="karolinfo1@wp.pl">
		<meta name="description" content="CV Karol Lach">
		<meta name="keywords" content="CV, Karol, Lach, html, php, informacja">
		<meta name="author" content="Karol Lach">
		<meta name="generator" content="Notepad++">
		<meta name="robots" content="index">
	</head>
	<body>
	
		<form method="post">
			<label for="name">Imię i nazwisko</label>
			<input type="text" name="name" id="name" placeholder="Jan Kowalski" required>

			<label for="email">Email</label>
			<input type="email" name="email" id="email" placeholder="example@example.com" required>

			<label for="message">Wiadomość</label>
			<textarea name="message" id="message" placeholder="Wpisz swoją wiadomość" required></textarea>

			<input type="submit" name="submit" value="Wyślij">
		</form>
		
		<?php
			session_start();
			if(!empty($_POST['name']) and !empty($_POST['email']) and !empty($_POST['message'])){
			  	$email_odbiorcy = 'cv_karol_lach@karollach.cba.pl';   
				$wiadomosc = "<p>Dostałeś wiadomość od:</p>"; 
				$wiadomosc .= "<p>Imie i nazwisko: " . $_POST['name'] . "</p>"; 
				$wiadomosc .= "<p>Email: " . $_POST['email'] . "</p>"; 
				$wiadomosc .= "<p>Wiadomość: " . $_POST['message'] . "</p>"; 
				$message = '<!doctype html><html lang="pl"><head><meta charset="utf-8">'.$wiadomosc.'</head><body>';
				$subject = 'Wiadomość ze strony...';
				$subject = '=?utf-8?B?'.base64_encode($subject).'?=';
				if(mail($email_odbiorcy , $subject, $message)){ 
				  echo('Wiadomość została wysłana'); 
				}else{ 
				  echo('Wiadomość nie została wysłana'); 
				} 
			}
		?>
		
	</body>
</html>