<?php
$to_email = "rajulucky82520@gmail.com ";
$subject = "Raju....";
$body = "Hi Raju, welcom to visite my website";
$header = "From: raju123diwana@gmail.com";

if(mail($to_email, $subject, $body, $header)){
    echo "Email will be send...";
}else{
    echo "Email will be not send....";
}
?>