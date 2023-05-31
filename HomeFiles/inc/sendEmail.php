<?php
// Replace this with your own email address
function mailgonder($kime, $name, $mesaj){
    include 'class.phpmailer.php';
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = 'mail.digigarson.com.tr';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->Username = "info@digigarson.com.tr";
    $mail->Password = "Info7072@Ss141312";
    $mail->SetFrom($kime, $name);
    $mail->AddAddress("info@digigarson.com.tr", "digigarson.com.tr");
    $mail->Subject = "digigarson.com contact form message";
    $mail->CharSet = 'UTF-8';
    $content = $mesaj;
    $mail->MsgHTML($content);
    if($mail->Send()) {
        echo "success"; 
    } else {
        echo $mail->ErrorInfo;
    }
}
if($_POST) {
    $name = trim(stripslashes($_POST['name']));
    $email = trim(stripslashes($_POST['email']));
    $tel = trim(stripslashes($_POST['tel']));
    $subject = trim(stripslashes($_POST['subject']));
    $contact_message = trim(stripslashes($_POST['message']));
    $terms = trim(stripslashes($_POST['terms']));
    if(!empty($name) && !empty($email) && preg_match("([0]{1}[0-9]{3}[0-9]{3}[0-9]{4})", $tel) && !empty($subject) && !empty($contact_message) && !empty($terms)){
    // Set Message
    $message  = "Gönderen İsimi: " . $name . "<br />";
    $message .= "Email adresi: " . $email . "<br />";
    $message .= "Telefon Numarası: " . $tel . "<br />";
    $message .= "Mailin Konusu: " . $subject . "<br />";
    $message .= "Mesajın Geldiği Yer: digigarson.com.tr Contact Form <hr>";
    $message .= "Mesajı: <br />";
    $message .= $contact_message;
    mailgonder($email, $name, $message);
    }else{
        echo "Lütfen gerekli yerleri doldurunuz.!".$tel.$subject; 
    }
}
?>