<?php
if (isset['submit']) {
    $to = "arirani02@gmail.com";
    $from = $_POST['email'];
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $subject = "Email From Website";
    $subject2 = "Copy of your contact form submission.";
    $message = $_POST['message'];
    $message2 = "A copy of your email: " .  "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;

    mail($to, $subject, $message, $headers);
    mail($from, $subject2, $message2, $headers2);

    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";

}
?>
