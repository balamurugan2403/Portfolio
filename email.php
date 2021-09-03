<?php

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$to='bsitha2@uic.edu';
	$subject='Contact form';
	$message="Name: ".$name."\n"."Message: "."\n".$message;
	// $headers="From: ".$lastname;
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: Portfolio Contact Form' . "\r\n";

	// if(mail($to, $subject, $message, $headers)){
	// 	echo "<h1> success";
	// }
	// else{
	// 	echo "error";
	// }
	mail($to, $subject, $message, $headers);
	header("Location: index.html#footer");
}
?>
