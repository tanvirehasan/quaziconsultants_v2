<?php



//eamil
function email_send($subject, $title, $text, $receiver)
{

    $body = "<!DOCTYPE html>
<html lang='en' xmlns='http://www.w3.org/1999/xhtml' xmlns:o='urn:schemas-microsoft-com:office:office'>
<head>
	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width,initial-scale=1'>
	<meta name='x-apple-disable-message-reformatting'>
	<title>BOLD</title>
	<style>
		table, td, div, h1, p {font-family: Arial, sans-serif;}
	</style>
</head>
<body style='margin:0;padding:0;'>
	<table role='presentation' style='width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;'>
		<tr>
			<td align='center' style='padding:0;'>
				<table role='presentation' style='width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;'>
					<tr>
						<td align='center' style='padding:40px 0 30px 0;background:#F2F2F2;'>
							<img src='https://quaziconsultants.com/assets/images/logo.png' alt='' width='300' style='height:auto;display:block;' />
						</td>
					</tr>
					<tr>
						<td style='padding:36px 30px 42px 30px;'>
							<table role='presentation' style='width:100%;border-collapse:collapse;border:0;border-spacing:0;'>
								<tr>
									<td style='padding:0 0 36px 0;color:#153643;'>
										<h1 style='font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;'>" . $title . "</h1>
										<p style='margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;'>" . $text . "</p>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td style='padding:30px;background:#1E8449;'>
							<table role='presentation' style='width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;'>
								<tr>
									<td style='padding:0;width:50%;' align='left'>
										<p style='margin:0;font-size:14px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff;'>
											© Quazi Consultants " . date('Y') . "<br/><a href='http://www.quaziconsultants.com' style='color:#ffffff;text-decoration:underline;'>Unsubscribe</a>
										</p>
									</td>
									<td style='padding:0;width:50%;' align='right'>
										<table role='presentation' style='border-collapse:collapse;border:0;border-spacing:0;'>
											<tr>
												<td style='padding:0 0 0 10px;width:38px;'>
													<a href='http://www.twitter.com/' style='color:#ffffff;'><img src='https://assets.codepen.io/210284/tw_1.png' alt='Twitter' width='38' style='height:auto;display:block;border:0;' /></a>
												</td>
												<td style='padding:0 0 0 10px;width:38px;'>
													<a href='http://www.facebook.com/' style='color:#ffffff;'><img src='https://assets.codepen.io/210284/fb_1.png' alt='Facebook' width='38' style='height:auto;display:block;border:0;' /></a>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>

";


    include('smtp/PHPMailerAutoload.php');

    $mail = new PHPMailer();
    // 	$mail->SMTPDebug  = 1;
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Username = "tanvirhasanbcse@gmail.com";
    $mail->Password = "";
    $mail->SetFrom("tanvirhasanbcse@gmail.com", "Quazi Consultants");
    $mail->addBCC("team@quaziconsultants.com", "Quazi Consultants");
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AddAddress($receiver);
    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => false
    ));
    if (!$mail->Send()) {
        $mail->ErrorInfo;
    } else {
        return 'Sent';
    }

    return $body;
}






?>