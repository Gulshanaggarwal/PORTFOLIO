<?php
if($_POST["submit"]){
	$name = $_POST['fname'];
	$sender_mail = $_POST['Email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $to="gulshanaggarwal333gmail.com";
    $subject='My website message';

    //mail body

    $mail_body=" Name: $name\n Email: $sender_mail\n Phone_number: $phone\n\n $message";

    //mail function
    mail($to, $subject, $mail_body,"From: $name <$sender_mail>");
    echo "<script type='text/javascript'>
alert('Your message sent succesfully');
window.history.log(-1); 
</script>";


}
?>

