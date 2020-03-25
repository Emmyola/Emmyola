<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$message = $_POST['message'];


$file = fopen($fname.'.txt', 'w');

fwrite($file, 'My First name is: ' .$fname.',' ) ;
fwrite($file, ' My Last name is: ' .$lname.',' );
fwrite($file, ' My Email is: ' .$email.',');
fwrite($file, ' I am a: ' .$gender.',' );
fwrite($file, '  My Description is: ' .$message );

fclose($file);

echo 'your file have been created';


 ?>
