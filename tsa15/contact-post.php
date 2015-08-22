<?php	
 			$userName=$_REQUEST['userName'];
			$userEmail=$_REQUEST['userEmail'];
			$userSubj=$_REQUEST['userSubj'];
			$userMsg=$_REQUEST['userMsg'];
			$subject = "Message from ".$userName; 
			$message = '<html><head><title>'.$subject.'</title></head><body><table><tr><td>Email id :  </td><td> '.$userEmail.'</td></tr>
<tr><td>Subject : </td><td> '.$userSubj.'</td></tr><tr><td>Name : </td><td> '.$userName.'</td></tr><tr><td>Says : </td><td> '.$userMsg.'</td>
</tr></table></body></html>';
			//$message = "Email id :  ".$userEmail. "\r\nPhone No : ".$userSubj."\r\nName : ".$userName."\r\nSays : ".$userMsg;
			$to="utravel-admin@vmhsbpa.com";
			$headers = "From: " . strip_tags($userEmail) . "\r\n";
			$headers .= "Reply-To: ". strip_tags($userEmail) . "\r\n";
			//$headers .= "CC: susan@example.com\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			if(!mail($to, $subject, $message, $headers)){
             $mail_status='no';
				header("Location: index.html");
			exit();
          }else{
          	  $mail_status='yes';
          	header("Location: index.html");
			exit();
           
         } ?>