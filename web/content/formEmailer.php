<?php

//generic post form data emailer


							require_once "Mail.php";
 
$from = "Rainman Forms <noreply@rainman.com>";
$to = $_POST["toEmail"];
//$subject = "Rainman Form Request\r\n\r\n";
	if ($_POST["mailSubject"]=="") $subject="Rainman Form Request\r\n\r\n";
	else $subject=$_POST["mailSubject"];
							$time = time ();
							$timestamp = date("g:i A, m/d/y",$time) . "<br>"; 					
							$body = "";														
							$body = $body . "<font face=verdana style='font-size:11px;'>";
							$body = $body . "<b>Submitted:</b> ";
							$body = $body . $timestamp;
							$body = $body . "<br><br>";
							$body = $body . "<b>Website:</b> ";
							$body = $body . $businessName;
							$body = $body . "<br><br>";
							
							$body = $body . "<TABLE style='font-size:11px;font-family:verdana'>";

							foreach( $_POST as $key => $value){
								switch ($key) {
									case "submit":
									case "mailSubject":
									case "toEmail":
									case "requestType":
										break;
									default:
										switch ($value) {
											case "spacer":
												$body = $body . "<TR><TD colspan='2' align='center'><strong>" . $key . "</strong></TD></TR>";
												break;
											default:
												$body = $body . "<TR><TD ALIGN='RIGHT' style='padding:5px;'><strong>" . $key . "</strong>  :</TD><TD>". $value ."</TD></TR>";
										}
								}
							}
							
							$body = $body . "</TABLE>"; 
 
$url = "http://www.rainman.com/downword.php";

function get_url_contents($url){
$crl = curl_init();
$timeout = 5;
curl_setopt ($crl, CURLOPT_URL,$url);
curl_setopt ($crl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($crl, CURLOPT_CONNECTTIMEOUT, $timeout);
$ret = curl_exec($crl);
curl_close($crl);
return $ret;
}

$str = file_get_contents($url);

$host = "mail.emailsrvr.com";
$username = "noreply@rainman.com";
$password = $str;


// To send HTML mail, the Content-type header must be set
//http://stackoverflow.com/questions/7814910/how-to-send-an-html-email-using-smtp-in-php?rq=1
$headers = array ('MIME-Version' => '1.0',
        'Content-Type' => "text/html; charset=ISO-8859-1",
        'From' => $from,
        'To' => $to,
        'Subject' => $subject
     );

  
  
$smtp = Mail::factory('smtp',
  array ('host' => $host,
    'auth' => true,
    'username' => $username,
    'password' => $password));
 
$mail = $smtp->send($to, $headers, $body);
 
if (PEAR::isError($mail)) {
  echo("<p>" . $mail->getMessage() . "</p>");
} else {
  echo("<p>Message successfully sent!</p>");
}
?>