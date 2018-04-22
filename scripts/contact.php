<?php

/* Set the mail recipient */
$myEmail = "s-Eric.Bass@lwtech.edu";
$subject = "My Contact Form";
$headers = "From: $myEmail";


/* Check for Required Input */
$email = check_input($_POST['email'],"Must enter an email address");


/* Non-Required Input */
$province = ($_POST['province']);
$comments = ($_POST['comments']);
$gender = ($_POST['gender']);


/* Email Preparation */
$message = "Hello!

Your contact request was submitted by:
Email Address: $email
Province of Residency: $province

The comments you wrote were: $comments

End of message";


/* Sending the Email message through PHP */
mail($myEmail, $subject, $message, $headers);


/* Redirect to Thank You page */
header('Location: ../pages/thanks.html');

exit();

function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
{   
    if($problem && strlen($data)==0)
        show_error($problem);
}
    return $data;
}

function show_error($myError)
{
    ?>
        <html>
        <body>
        <strong> Correct the following Errors </strong>
        <?php echo $myError; ?>
        </body>
        </html>
        <?php
exit();
}
        ?>