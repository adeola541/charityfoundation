<?php   
if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    $myMail = "adesinaoluwayanmife7@gmail.com";
    $header = "From:". $email;
    $message2 = "You have received a message from ".$name.". \n\n" . $message;




    mail($myMail,$subject,$message2,$header);
    header("Location: home.html?mailsend")

}
if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $gender = trim($_POST['gender']);
    $number= trim($_POST['number']);
    $email = trim($_POST['email']);
    $message3 = trim($_POST['message3']);
    $clothes = trim($_POST['clothes']);

    $myMail = "adesinaoluwayanmife7@gmail.com";
    $header = "From:". $email;
    $message4 = "You have received a message from ".$name.". \n\n" . $message;
}
?>