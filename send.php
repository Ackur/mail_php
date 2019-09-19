<?php
		if($_GET){
			$name = $_GET['name'];
			$city = $_GET['city'];
			$email = $_GET['email'];
			$phone = $_GET['phone'];
			$message = $_GET['message'];
		
			$text = 'Имя: '.$name."\n";
			$text .= 'email: '.$email."\n";
			$text .= 'Телефон: '.$phone."\n";
			$text .= 'Город: '.$city."\n";
			$text .= 'Сообщение: '."\n\n".$message."\n";

			$status = mail("contact@vrstudiogames.com","New message from vrstudiogames",$text);

			header("Content-Type: application/json");
			echo json_encode($status);
				}
		
		