<?php
session_start();
require_once('../PHPMailer/PHPMailerAutoload.php');
include 'db.php';
$assigned_worker = $_GET['wrkr'];
$id = $_GET['id'];
$sql = "UPDATE tbl_mock SET assigned_worker='$assigned_worker' WHERE id=$id";

if (mysql_query($sql)) {
	$update_message = 'Record updated successfully';
	
    mysql_query("UPDATE tbl_mock SET status='1' WHERE id=$id");



	$sql = "SELECT * FROM tbl_mock WHERE id=$id";
	$result = mysql_query($sql);
	$record = mysql_fetch_assoc($result);
	$cust_mail = $record['c_email'];
	$cust_name = $record['c_name'];




	$mail = new PHPMailer;

	///$mail->SMTPDebug = 2;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to
	$mail->Username = 'support@computerservice.ae';                 // SMTP username
	$mail->Password = 'Musthafa!23';                           // SMTP password

	$mail->From = 'from@example.com';
	$mail->FromName = 'Professional Computer Services';
	$mail->addAddress($cust_mail, $cust_name);     // Add a recipient
	$mail->addReplyTo('info@example.com', 'Information');
	//$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'Salaam Computers-Complaint reply';
	$mail->Body    = "Dear customer,<br><br>
 
Thank you for contacting <b>Professional Computer Services</b>. We have received your <br>email and our Customer Service team will contact you within the next 24 hrs.<br>
In the meantime, if you require any further information please feel free to<br> contact our office directly at 055-9633060<br>
<br><b>Please note our working hours are from 8AM to 6PM from Saturday to Thursday.</b>
<br><br><br><br>
Regards,<br>
<b>Professional Computer Services</b>";
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	//$mail->Send();

	

	if(!$mail->send()) {
		$mail_message = 'Message could not be sent';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		$mail_message = 'Message has been sent';
	}
} else {
	$update_message = 'Error updating record';
}

$_SESSION["mail_message"] = $mail_message;
$_SESSION["update_message"] = $update_message;

header ("location: ../Complaints.php");

?>