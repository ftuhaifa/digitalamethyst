<?php

// Initialize variables to null.
$nameError ="";
$emailError ="";
$insertTodata = false;
$name="";
$email="";
$message="";
// On submitting form below function will execute.
if($_SERVER["REQUEST_METHOD"] == "POST"){
if (empty($_POST["name"])) {
$nameError = "Name is required";
} else {
$name = test_input($_POST["name"]);
// check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
$nameError = "Name: Only letters and white space allowed";
}
else{
$insertTodata  = True;  
}
}

if (empty($_POST["email"])) {
$emailError = "Email is required";
$insertTodata = false;
} else {
$email = test_input($_POST["email"]);
// check if e-mail address syntax is valid or not
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
$emailError = "Invalid email format";
$insertTodata = false;
}
}

$message = test_input($_POST['message']);


if($insertTodata){
$mail_to = 'digitalamethystco@gmail.com';
$body_message = 'From: '.$name."\n";
$body_message .= 'E-mail: '.$email."\n";
$body_message .= 'Message: '.$message;
$headers = "From:digitalamethystco@gmail.com\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);
/*
if ($mail_status) { 
    <script language="javascript" type="text/javascript">
        // Print a message
        alert('Thank you for the message. We will contact you shortly.');
        // Redirect to some page of the site. You can also specify full URL, e.g. http://template-help.com
        window.location = 'contact_page.html';
    </script>

}
*/

}

}//end the function 

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
//php code ends here


function send(){



}

?>