<?php
//use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';



if (isset($_POST["enviar"])) {
    $affair = $_POST["affair"];
    $message = $_POST["message"];
    $name = $_POST["name"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $tyc = $_POST["tyc"];
    $td = $_POST["td"];
    $content = "Nombre: " . $name . "<br> Apellido: " . $lastName . "<br>Correo: " . $email . "<br>Asunto: " . $affair . "<br>Mensaje: " . $message . "<br> tyc: " . $tyc . "<br> td: " . $td;

    if (!empty($_POST["name"]) && !empty($_POST["lastName"]) && !empty($_POST["email"]) && !empty($_POST["phone"]) && !empty($_POST["affair"]) && !empty($_POST["message"]) && !empty($_POST["tyc"]) && !empty($_POST["td"])) {
        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = 2;
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'proveedorescontacto2022@gmail.com';
            $mail->Password   = 'Dev3lopment2022//';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 465 ;
            $mail->setFrom('proveedorescontacto2022@gmail.com', $name, $lastName);
            $mail->addAddress('proveedorescontacto2022@gmail.com');
            $mail->isHTML(true);
            $mail->Subject = $affair;
            $mail->Body    = $content;
            $mail->Charset  = 'UTF-8';
            $mail->send();
            header("Location: ../Vista/contact.php?resul=send");
        } catch (Exception $e) {
            echo "Hubo un error en el envio. Mailer Error: {$mail->ErrorInfo}";
        }
    }else{header("Location: ../Vista/contact.php?resul=errorContact");}
}
