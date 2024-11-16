<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $validationCustom01 = $_POST['name'];
    $validationCustom02 = $_POST['email'];
    $validationCustom04 = $_POST['message'];

    $to = "info@moepipublishing.co.za";
    $subject = "New Form Submission";
    $body = "Name: $validationCustom01\nEmail: $validationCustom02\nMessage: $validationCustom04";
    $headers = "From: $validationCustom02";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email successfully sent to $to";
    } else {
        echo "Email sending failed.";
    }
}
?>