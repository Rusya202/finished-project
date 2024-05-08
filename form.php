<?php

$username = $_POST['username'];
$email = $_POST['email'];

if (empty($username) || empty($email)) {

  header("Location: https://static-00.iconduck.com/assets.00/loudly-crying-face-emoji-2048x2048-cfadhijl.png");
  exit;
}


$file = fopen("users.txt", "a");


fwrite($file, "username: $username\nemail: $email\n");


fclose($file);


header("Location: https://dealersupport.co.uk/wp-content/uploads/2023/08/iStock-1124532572.jpg");
exit;

?>