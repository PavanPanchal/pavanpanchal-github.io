


<?php

/*

if(
$submit = $_POST['submit'];
 $name = $_post['name'];
  $mail = $_post['email'];
 $name = $_post['message'];

 
 $emil_from="https://keyprojects.github.io/";
 $email_subject ="message from my site";
 $email_body= "name : $name\n".
				"email : $mail\n".
				"message: $message\n";
				
			$to: "pavandpanchal@gmail.com";
			$headers = "from: $email_from \r\n";
			$headers = "reply-to: $mail \r\n";
			mail($to, $email_subject , $email_body, $headers );

			header("Location : index.html");
	)
	{
echo "pass1";

elseif(

if(!empty($_POST["submit"])) 
{
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];

	$toemail = "pavandpanchal@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toemail, $message, $mailHeaders)) 
	{
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
require_once "reachus.php";

)
{
	echo "pass2";
}

else(
			
			
			
			
			
if (isset($_POST['submit'])) {
	$submit= $_POST['submit'];
    $mail = $_POST['email']; 
    $subject = $_POST['name'];
    $message = $_POST[message];
    $from = "https://keyprojects.github.io/";
    $headers = "From:" . $from;
	$toemail = $submit;


    if (mail($toemail, $mail  , $subject, $message, $headers)) {
        echo "Mail Sent.";
    }
    else {
        echo "failed";
    }
}
)
{
	echo"pass3";
}
			
			




 ?>


*/










if (isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "pavandpacnhal@gmail.com";
    $email_subject = "New form submissions";

    function problem($error)
    {
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br><br>";
        echo $error . "<br><br>";
        echo "Please go back and fix these errors.<br><br>";
        die();
    }

    // validation expected data exists
    if (
        !isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])
    ) {
        problem('We are sorry, but there appears to be a problem with the form you submitted.');
    }

    $name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $message = $_POST['message']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .= 'The email address you entered does not appear to be valid.<br>';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {
        $error_message .= 'The name you entered does not appear to be valid.<br>';
    }

    if (strlen($message) < 2) {
        $error_message .= 'The message you entered do not appear to be valid.<br>';
    }

    if (strlen($error_message) > 0) {
        problem($error_message);
    }

    $email_message = "Form details below.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "name: " . clean_string($name) . "\n";
    $email_message .= "email: " . clean_string($email) . "\n";
    $email_message .= "message: " . clean_string($message) . "\n";

    // create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
?>

    <!-- include your success message below -->

    Thank you for contacting us. We will be in touch with you very soon.

<?php
}
?>
