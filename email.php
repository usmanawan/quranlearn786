<?php 
if(isset($_REQUEST['subject'])&&($_REQUEST['subject']!='')&&isset($_REQUEST['name'])&&($_REQUEST['name']!='')&&isset($_REQUEST['email'])&&($_REQUEST['email']!='')&&isset($_REQUEST['phone'])&&($_REQUEST['phone']!='')&&isset($_REQUEST['message'])&&($_REQUEST['message']!=''))
{		
		if (!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)) {
			echo json_encode(['code'=>404, 'msg'=> "Email is not valid"]);
			exit;
		}
		

		$to = 'usmanawan83@gmail.com,sadafqteacher@gmail.com,nimraqteacher@gmail.com,info@learnquran786.com,'; 
		
	
		$subject = 'New Contact Us Request';
		$email    = $_REQUEST['email'];
		
		// message
		$message = '
		<html>
		<head>
		<title>Learn Quran 786 customer contact form : Contact Form</title>
		</head>
		<body>
		<p>Dear Admin, an inquiry has been submitted on contact us form in Learn Quran 786 customer contact form .<br/>

</p>
		<p>Details of inquiry are attacted below for your reference.</p>
		<p>Subject: '.$_REQUEST['subject'].'<br/>
		Name : '.$_REQUEST['name'].'<br/>Email : '.$_REQUEST['email'].'<br/>Phone : '.$_REQUEST['phone'].'
		
		<br/>Message : '.$_REQUEST['message'].'
		</p>
		
		<br/>Warm Regards<br/> Learn Quran 786</p>
										
		</body>
		</html>
		';
		
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		// Additional headers
		$headers .= 'From: Learn Quran 786 <info@learnQuran786.com>' . "\r\n";
		
		// Mail it
		mail($to, $subject, $message, $headers);

		/* Prepare autoresponder subject */

			// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		// Additional headers
		$headers .= 'From: Learn Quran 786 <info@learnQuran786.com>' . "\r\n";
			$respond_subject = "Welcome thanks for your interest.";

			/* Prepare autoresponder message */
			$respond_message = "<h2> Details of our teaching are as under.:</h2><br/>
			<p>
			5 Days / Week <br/>
			22 Classes/Month <br/>
			$45  Monthly <br/>
			30 Min / Day <br/>
			English Teaching  <br/>
			Quran Reading / Nazra / Hifz <br/>
			Namaz / Salah <br/>
			Duas & Kalmas <br/>
			3 days free Trial <br/>
			Saturday Sunday Off <br/>
			please share your trial time with Pakistan Standard time like 6pm vancouver  is 6:00am Thursday, in Pakistan <br/>
			
			for More details please contact on our WhatsApp  +923115195621 or click the WhatsApp button on website.<br>
			
			Regards
			</p>
			";

			/* Send the message using mail() function */
			mail($email, $respond_subject, $respond_message,$headers);
		
		echo json_encode(['code'=>200, 'msg'=> "successs"]);
		//header("location:http://learnQuran786.com/index.html#contact");
		}
		?>