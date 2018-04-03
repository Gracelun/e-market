<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class mail{
	function sendMail($C_name, $C_email, $token){
		require_once 'PHPMailer/src/Exception.php';
		require_once 'PHPMailer/src/PHPMailer.php';
		require_once 'PHPMailer/src/SMTP.php';
		$mail = new PHPMailer(true);   
		try {
		    //Server settings
		    // $mail->SMTPDebug = 3;                                 
		    $mail->CharSet = "utf-8"; 
		    $mail->SMTPAuth = true;
		    $mail->isSMTP();
		    // MAIL SERVER
		    $mail->Host = 'smtp.gmail.com'; 
		    $mail->SMTPSecure = 'tls';        
		    $mail->Port = 587;
		    // YOUR MAIL SETTING    
		    $mail->Username = "grace821226@gmail.com";    
		    $mail->Password = "beauty4444";             
		    // MAIL SETTING
		    $mail->From = "grace821226@gmail.com";    
		    $mail->FromName = "Grace";
		    $mail->addAddress("$C_email", "$C_name");    
		    //Content
		    
		    $mail->Subject ="Shopping 驗證信"; 

			$url = 'http://'.$_SERVER["HTTP_HOST"]."/e-market/member/authorize.php?authorize=$token";
			$body = "
			<!DOCTYPE html>
			<html>
			<head>
				<title></title>
			</head>
			<body>
				<h1>親愛的 ".$C_name."(".$C_email.")，您好：</h1>
				<br />
				<br />
				<a href='".$url."'>".$url."</a><br/>
			</body>
			</html>
			";

		    // $mail->Body = $content;
		    $mail->MsgHTML($body);
            $mail->isHTML(true);
		    if(!$mail->send()){
		        echo "Error: " . $mail->ErrorInfo;
		    }else{
		        echo "<b>感謝您的留言，您的建議是我們前進的動力!</b>";
		    }
		    echo 'Message has been sent';
		} catch (Exception $e) {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		}
	}
}





?>