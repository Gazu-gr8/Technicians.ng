<?php

	if(isset($_POST['submit'])) {
		$name 		= $_POST['name']; // Get Name value from HTML Form
		$email_id 	= $_POST['mail']; // Get Email Value
		$mobile_no 	= $_POST['mobile']; // Get Mobile No
		$service 	= $_POST['service']; //Get service
		$product 	= $_POST['type-product']; // Get Product type
		$reserve	= $_POST['datetimepicker']; // Get Date and time

		$msg = $_POST['message']; // Get Message Value


		$mailTo = "patrick@gazugroup.com"; // You can change here your Email
		$header = "From: ".$email_id;
		$txt    = "You have received an e-mail from ".$name.".\n\n".$msg;

		$subject = "'$name' requests a tech"; // This is your subject


		mail($mailTo, $name, $$txt, $mobile_no, $service, $header);
		header("Location: index.php?mailsend");
		
		// HTML Message Starts here
		$message ="
		<html>
			<body>
				<table style='width:600px;'>
					<tbody>
						<tr>
							<td style='width:150px'><strong>Name: </strong></td>
							<td style='width:400px'>$name</td>
						</tr>
						<tr>
							<td style='width:150px'><strong>Email ID: </strong></td>
							<td style='width:400px'>$email_id</td>
						</tr>
						<tr>
							<td style='width:150px'><strong>Mobile No: </strong></td>
							<td style='width:400px'>$mobile_no</td>
						</tr>
						<tr>
							<td style='width:150px'><strong>Service: </strong></td>
							<td style='width:400px'>$service</td>
						</tr>
						<tr>
							<td style='width:150px'><strong>Product: </strong></td>
							<td style='width:400px'>$product</td>
						</tr>
						<tr>
							<td style='width:150px'><strong>Date&Time: </strong></td>
							<td style='width:400px'>$reserve</td>
						</tr>
						<tr>
							<td style='width:150px'><strong>Message: </strong></td>
							<td style='width:400px'>$msg</td>
						</tr>
					</tbody>
				</table>
			</body>
		</html>
		";
		// HTML Message Ends here
		
		// Always set content-type when sending HTML email
		//$headers = "MIME-Version: 1.0" . "\r\n";
		//$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// More headers
		//$headers .= 'From: Admin <yagazie.anyanwu@fieldcolimited.com>' . "\r\n"; // Give an email id on which you want get a reply. User will get a mail from this email id
		//$headers .= 'Cc: oluwafemi.fashuwape@fieldcolimited.com ' . "\r\n"; // If you want add cc
		//$headers .= 'Bcc: pelumi.oduleye@fieldcolimited.com' . "\r\n"; // If you want add Bcc
		
		if(header("Location: index.php?mailsend")){
			// Message if mail has been sent
			header("Location: https://techniciansing.000webhostapp.com");
                    exit;
                
            }else {
                $error_message = "There was a problem sending your email: " . $mail->ErrorInfo;
       
		}
	}
?>
