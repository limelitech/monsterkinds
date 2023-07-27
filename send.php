<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$massage = $_POST['massage'];

mail("monserkids5@gmail.com", "Contact from the site", "$massage","From: $email\r\n")

echo "Thanks for contacting us!";




?>