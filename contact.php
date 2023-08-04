<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["number"]) && !empty($_POST["company"]) && !empty($_POST["textarea"])) {

    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))


        $result = file_get_contents(
            'https://www.google.com/recaptcha/api/siteverify',
            false,
            stream_context_create(
                array(
                    'http' => array(
                        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                        'method' => 'POST',
                        'content' => http_build_query(
                            array(
                                'response' => $_POST['g-recaptcha-response'],
                                'secret' => '6LexNu8mAAAAAHgW_URYyqg-P8Z-y2DQhRakX7xC' //google captcha code
                            )
                        ),
                    ),
                )
            )
        );



    $result = json_decode($result);
    // var_dump($result);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $textarea = $_POST['textarea'];

    $mail = new PHPMailer();

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    // Set PHPMailer to use SMTP.
    $mail->isSMTP();
    // Set SMTP host name.
    $mail->Host = 'smtp.gmail.com';
    // Set this to true if SMTP host requires authentication to send email.
    $mail->SMTPAuth = true;
    $mail->SMTDebug = 3;
    // Provide username and password.
    $mail->Username = 'noreply.bicxo@gmail.com'; // SMTP username
    $mail->Password = 'ffqzutrcaxiuqwbu'; // SMTP password
    // If SMTP requires TLS encryption then set it.
    $mail->SMTPSecure = "tls";
    // Set TCP port to connect to.
    $mail->Port = 587;
    $mail->From = "noreply.bicxo@gmail.com";
    $mail->FromName = "Bicxo";
    $mail->addAddress('wddcdeveloper@gmail.com');
    $mail->addAddress('gaurav@webdakaar.com');
    $mail->isHTML(true);
    $mail->Subject = "Contact Us : " . $company;
    $mail->Body = "<table><tr><td>Name : </td><td>" . $name . "</td></tr>" . "<tr><td>Email : </td><td>" . $email . "</td></tr>" . "<tr><td>Mobile Number : </td><td>" . $number . "</td></tr>" . "<tr><td>Company : </td><td>" . $company . "</td></tr>" . "<tr><td>textarea : </td><td>" . $textarea . "</td></tr></table>";
    $mail->AltBody = "Name: " . $name . ",Email: " . $email . ",Mobile Number: " . $number . ",Company: " . $company . ", Message: " . $textarea;
    if (!$mail->send()) {
        echo '<script type="text/javascript">alert("Something Went Wrong.");</script>';
    } else {
        echo '<script type="text/javascript">
                window.location.href="thank-you.php";
            </script>';
    }

}


?>