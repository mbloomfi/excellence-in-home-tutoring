<?php 
if(isset($_POST['contactSubmit'])){
    $to = "excellenceinhometutoring@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "New Message via Website";
    //$subject2 = "Thank you for your application";
    $message = $first_name . " " . $last_name . " sent you the following message via your homepage" . "\n\n" . $_POST['message'];
    //$message2 = "Excellence In-Home Tutoring thanks you for your application. It is now being reviewed. ";

    $headers = "From:" . $from;
    //$headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    //echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    header('Location: http://excellenceinhometutoring.com#thankYou');
    // You cannot use header and echo together. It's one or the other.
    }
?>